<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['name'])){
  if (isset($_POST['name'])) {
    if (!empty($_POST['name'])){
      $name = strip_tags($_POST['name']);
      $nameFieldset = "Имя: ";
    }
  }
}
if (!empty($_POST['tel'])){
  if (isset($_POST['tel'])) {
    if (!empty($_POST['tel'])){
      $tel = strip_tags($_POST['tel']);
      $telFieldset = "Телефон: ";
    }
  }
}
if (!empty($_POST['email'])){
  if (isset($_POST['email'])) {
    if (!empty($_POST['email'])){
      $email = strip_tags($_POST['email']);
      $emailFieldset = "Почта: ";
    }
  }
}
if (!empty($_POST['msg'])){
  if (isset($_POST['msg'])) {
    if (!empty($_POST['msg'])){
      $msg = strip_tags($_POST['msg']);
      $msgFieldset = "Сообщение: ";
    }
  }
}


$token = "5025229143:AAGYUUhWnGQlEMZaB2wO_N6z-IHVk1JYwho";
$chat_id = "-746460934";
$arr = array(
  $nameFieldset => $name,
  $telFieldset => $tel,
  $emailFieldset => $email,
  $msgFieldset => $msg,
);
$txt = '';
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}
$_SESSION['send'] = true;
header('Location: /#form');
?>