<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Cron extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('data');
    }

    public function index()
    {
        //import hotels of tashkent
        $dataset_id = 714;
        //$version_id = $this->data->getVersion($dataset_id);
        $museums_tashkent = $this->data->getData($dataset_id, 714);
        $this->db->truncate('hotel_tashkent');
        foreach($museums_tashkent as $item){
            $insert = [
                'name' => $item->G1,
                'addres' => $item->G2,
                'tel' => $item->G3,
            ];
            $this->db->insert('hotel_tashkent', $insert);
        }

        //import hotels of samarkand
        $dataset_id = 863;
        //$version_id = $this->data->getVersion($dataset_id);
        $museums_samarkand = $this->data->getData($dataset_id, 9535);
        $this->db->truncate('hotel_samarkand');
        foreach($museums_samarkand as $item){
            $insert = [
                'juridical_name' => $item->G1,
                'name' => $item->G2,
                'address' => $item->G3,
                'tel' => $item->G4,
                'mail' => $item->G5,
                'room' => $item->G6,
                'floor' => $item->G7,
                'level' => $item->G8,
            ];
            $this->db->insert('hotel_samarkand', $insert);
        }

        //import universities
        $dataset_id = 5220;
        //$version_id = $this->data->getVersion($dataset_id);
        $universities = $this->data->getData($dataset_id, 8021);
        $this->db->truncate('universities');
        foreach($universities as $item){
            $insert = [
                'otm_kodi' => $item->G1,
                'otm_nomi' => $item->G2,
                'yonalish_nomi' => $item->G3,
                'yonalish_kodi' => $item->G4,
                'talim_bosqichi' => $item->G5,
                'akkreditatsiya_sanasi' => $item->G6,
                'sertifikat_seriyasi' => $item->G7,
                'sertifikat_raqami' => $item->G8,
            ];
            $this->db->insert('universities', $insert);
        }

        //import museums culture and sport
        $dataset_id = 86;
        //$version_id = $this->data->getVersion($dataset_id);
        $museums = $this->data->getData($dataset_id, 142);
        $this->db->truncate('museums_culture_sport');
        foreach($museums as $item){
            $insert = [
                'title' => $item->G1,
                'phone_number' => $item->G2,
                'email' => $item->G3,
            ];
            $this->db->insert('museums_culture_sport', $insert);
        }

        //import museums of tashkent
        $dataset_id = 736;
        //$version_id = $this->data->getVersion($dataset_id);
        $museums_tashkent = $this->data->getData($dataset_id, 735);
        $this->db->truncate('museums_tashkent');
        foreach($museums_tashkent as $item){
            $insert = [
                'title' => $item->G1,
                'address' => $item->G2,
                'phone_number' => $item->G3,
                'index' => $item->G4,
                'lon' => $item->G5,
                'lat' => $item->G6,
            ];
            $this->db->insert('museums_tashkent', $insert);
        }
    }
}