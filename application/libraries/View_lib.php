<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class View_lib{
    
    public function __construct()
    {
        
    }
    
    function render_homepage($page,$data = '')
    {
        $CI =&get_instance();
        $data = (array)$data;
        if (!isset($data['title'])) $data['title'] = $CI->config->item('default_title');
        $data['content'] = $page;
        $data['data'] = $data;
        $CI->load->view('layout_homepage',$data);
    }
    
    function render($page,$data = '')
    {
        $CI =&get_instance();
        $data = (array)$data;
        if (!isset($data['title'])) $data['title'] = $CI->config->item('default_title');
        $data['content'] = $page;
        $data['data'] = $data;
        $CI->load->view('layout',$data);
    }


    function render_test($page,$data = '')
    {
		$CI =&get_instance();
        $data = (array)$data;
        if (!isset($data['title'])) $data['title'] = $CI->config->item('default_title');
        $data['content'] = $page;
        $data['data'] = $data;
        $CI->load->view('layout_test',$data);
    }
    
}