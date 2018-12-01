<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Name:  Auth Lang - Russian
 *
 * Author: Ben Edmunds
 * 		  ben.edmunds@gmail.com
 *         @benedmunds
 *
 * Author: Daniel Davis
 *         @ourmaninjapan
 *
 * Translation: Ievgen Sentiabov
 *         @joni-jones
 *
 * Location: http://github.com/benedmunds/ion_auth/
 *
 * Created:  03.09.2013
 *
 * Description:  Russian language file for Ion Auth views
 *
 */

// Errors
$lang['error_csrf'] = 'Форма не прошла проверку безопасности.';

// Login
$lang['login_heading']         = 'Кириш';
$lang['login_subheading']      = 'Кириш учун телефон рақамни ва паролингизни киритинг.';
$lang['login_identity_label']  = 'Телефон:';
$lang['login_password_label']  = 'Пароль:';
$lang['login_remember_label']  = 'Мени эсда сақлаш:';
$lang['login_submit_btn']      = 'Кириш';
$lang['login_forgot_password'] = 'Паролни қайта тиклаш';

// Index
$lang['index_heading']           = 'Пайдаланыўшылар';
$lang['index_subheading']        = 'Пайдаланыўшылар дизими.';
$lang['index_fname_th']          = 'Аты';
$lang['index_lname_th']          = 'Фамилиясы';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Топарлар';
$lang['index_status_th']         = 'Статус';
$lang['index_action_th']         = 'Әмел';
$lang['index_active_link']       = 'Актив';
$lang['index_inactive_link']     = 'Блокланған';
$lang['index_create_user_link']  = 'Создать нового пользователя';
$lang['index_create_group_link'] = 'Создать новую группу';

// Deactivate User
$lang['deactivate_heading']                  = 'Деактивировать пользователя';
$lang['deactivate_subheading']               = 'Вы уверены, что хотите деактивировать пользователя \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Да:';
$lang['deactivate_confirm_n_label']          = 'Нет:';
$lang['deactivate_submit_btn']               = 'Отправить';
$lang['deactivate_validation_confirm_label'] = 'подтверждение';
$lang['deactivate_validation_user_id_label'] = 'ID пользователя';

// Create User
$lang['create_user_heading']                           = 'Пайдаланыўшы қосыў';
$lang['create_user_subheading']                        = 'Төмендеги мағлыўматларды толтырың.';
$lang['create_user_fname_label']                       = 'Аты:';
$lang['create_user_lname_label']                       = 'Фамилиясы:';
$lang['create_user_identity_label']                    = 'Identity:';
$lang['create_user_company_label']                     = 'Компания:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Телефон:';
$lang['create_user_password_label']                    = 'Пароль:';
$lang['create_user_password_confirm_label']            = 'Пароль тастыйықлаў:';
$lang['create_user_submit_btn']                        = 'Пайдаланыўшы қосыў';
$lang['create_user_validation_fname_label']            = 'Аты';
$lang['create_user_validation_lname_label']            = 'Фамилиясы';
$lang['create_user_validation_identity_label']         = 'Identity';
$lang['create_user_validation_email_label']            = 'Email';
$lang['create_user_validation_phone_label']            = 'Телефон';
$lang['create_user_validation_phone1_label']           = 'Первая часть телефона';
$lang['create_user_validation_phone2_label']           = 'Вторая часть телефона';
$lang['create_user_validation_phone3_label']           = 'Третья часть телефона';
$lang['create_user_validation_company_label']          = 'Компания';
$lang['create_user_validation_password_label']         = 'Пароль';
$lang['create_user_validation_password_confirm_label'] = 'Пароль тастыйықлаў';

// Edit User
$lang['edit_user_heading']                           = 'Пайдаланыўшы өзгертиў';
$lang['edit_user_subheading']                        = 'Төмендеги мағлыўматларды толтырың.';
$lang['edit_user_fname_label']                       = 'Аты:';
$lang['edit_user_lname_label']                       = 'Фамилиясы:';
$lang['edit_user_company_label']                     = 'Компания:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Телефон:';
$lang['edit_user_password_label']                    = 'Пароль: (өзгерген болса)';
$lang['edit_user_password_confirm_label']            = 'Пароль тастыйықлаў: (өзгерген болса)';
$lang['edit_user_groups_heading']                    = 'Топар';
$lang['edit_user_submit_btn']                        = 'Пайдаланыўшы сақлаў';
$lang['edit_user_validation_fname_label']            = 'Аты';
$lang['edit_user_validation_lname_label']            = 'Фамилиясы';
$lang['edit_user_validation_email_label']            = 'Email';
$lang['edit_user_validation_phone_label']            = 'Телефон';
$lang['edit_user_validation_phone1_label']           = 'Первая часть телефона';
$lang['edit_user_validation_phone2_label']           = 'Вторая часть телефона';
$lang['edit_user_validation_phone3_label']           = 'Третья часть телефона';
$lang['edit_user_validation_company_label']          = 'Компания';
$lang['edit_user_validation_groups_label']           = 'Топар';
$lang['edit_user_validation_password_label']         = 'Пароль';
$lang['edit_user_validation_password_confirm_label'] = 'Пароль тастыйықлаў';

// Create Group
$lang['create_group_title']                  = 'Создать группу';
$lang['create_group_heading']                = 'Создать группу';
$lang['create_group_subheading']             = 'Пожалуйста заполните следующую информацию.';
$lang['create_group_name_label']             = 'Группа:';
$lang['create_group_desc_label']             = 'Описание:';
$lang['create_group_submit_btn']             = 'Создать группу';
$lang['create_group_validation_name_label']  = 'Группа';
$lang['create_group_validation_desc_label']  = 'Описание';

// Edit Group
$lang['edit_group_title']                  = 'Редактировать группу';
$lang['edit_group_saved']                  = 'Группа сохранена';
$lang['edit_group_heading']                = 'Редактировать группу';
$lang['edit_group_subheading']             = 'Пожалуйста заполните следующую информацию.';
$lang['edit_group_name_label']             = 'Название группы:';
$lang['edit_group_desc_label']             = 'Описание:';
$lang['edit_group_submit_btn']             = 'Сохранить группу';
$lang['edit_group_validation_name_label']  = 'Группа';
$lang['edit_group_validation_desc_label']  = 'Описание';

// Change Password
$lang['change_password_heading']                               = 'Изменить пароль';
$lang['change_password_old_password_label']                    = 'Старый пароль:';
$lang['change_password_new_password_label']                    = 'Новый пароль (минимум %s символов):';
$lang['change_password_new_password_confirm_label']            = 'Подтвердить пароль:';
$lang['change_password_submit_btn']                            = 'Изменить';
$lang['change_password_validation_old_password_label']         = 'Старый пароль';
$lang['change_password_validation_new_password_label']         = 'Новый пароль';
$lang['change_password_validation_new_password_confirm_label'] = 'Подтвердить пароль';

// Forgot Password
$lang['forgot_password_heading']                 = 'Забыли пароль';
$lang['forgot_password_subheading']              = 'Пожалуйста введите ваш email и мы сможем отправить вам email с новым паролем.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Отправить';
$lang['forgot_password_validation_email_label']  = 'Email';
$lang['forgot_password_username_identity_label'] = 'Логин';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_back']    = 'Вернуться';
$lang['forgot_password_email_not_found']         = 'No record of that email address.';
$lang['forgot_password_identity_not_found']         = 'No record of that username address.';

// Reset Password
$lang['reset_password_heading']                               = 'Изменить пароль';
$lang['reset_password_new_password_label']                    = 'Новый пароль (минимум 8 символов):';
$lang['reset_password_new_password_confirm_label']            = 'Подвердить:';
$lang['reset_password_submit_btn']                            = 'Изменить';
$lang['reset_password_validation_new_password_label']         = 'Новый пароль';
$lang['reset_password_validation_new_password_confirm_label'] = 'Подтвердить';

// Activation Email
$lang['email_activate_heading']    = 'Активировать аккаунт для %s';
$lang['email_activate_subheading'] = 'Пожалуйста перейдите по ссылке для %s.';
$lang['email_activate_link']       = 'Активировать аккаунт';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Сбросить пароль для %s';
$lang['email_forgot_password_subheading'] = 'Пожалуста по ссылке для %s.';
$lang['email_forgot_password_link']       = 'Сбросить пароль';

// New Password Email
$lang['email_new_password_heading']    = 'Новый пароль для %s';
$lang['email_new_password_subheading'] = 'Пароль был сброшен для: %s';
