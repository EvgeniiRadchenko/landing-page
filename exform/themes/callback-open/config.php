<?php
if(!isset($_REQUEST['mf_theme'])) die('Restricted access');

$config->form_addmsg = '*Если Вы спешите - укажите только свой номер телефона';
$config->form_header = 'Закажите обратный звонок';
$config->phone_title = 'Ваш номер телефона';
$config->phone_time_title = 'Ваш e-mail';
$config->phone_time_value = 'в любое время';
$config->checbox_name = 'для отправки сообщения поставьте галочку';
$config->submit_title = 'Отправить заявку';
//$config->enable_captcha = false;

$field_value = array_merge($field_value, array(
	'phone_time'=>'',
)); 

$field_class = $field_value;
?>
