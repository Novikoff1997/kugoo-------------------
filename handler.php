<?php

$userphone = htmlspecialchars($_POST['userphone']);

$token = '7943971722:AAGfP4hlg1OV8CDZXJF41lxb-eBe0LqigpE';
$chat_id = '-4566051360';

$formData = 'Новая заявка на тест-драйв. Телефон: ' . $userphone;


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$formData}&parse_mode=html", "r");
if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
};

