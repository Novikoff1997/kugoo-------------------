<?php

if (isset($_POST['userphone'])) {
  $userphone = ($_POST['userphone']);
} else {
  $useremail = ($_POST['useremail']);
};

$token = '7943971722:AAGfP4hlg1OV8CDZXJF41lxb-eBe0LqigpE';
$chat_id = '-4566051360';

if (isset($userphone)) {
  $formData = 'Новая заявка на тест-драйв. Телефон: ' . $userphone;
} else {
  $formData = 'Новая заявка на тест-драйв. email: ' . $useremail;
  //Тут можно настроить подписку на рассылку, или отправку сообщений на почту. Но пока все отправляется в ТГ
};



$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$formData}&parse_mode=html", "r");

