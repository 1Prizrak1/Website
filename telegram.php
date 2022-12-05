<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$token = "5737355089:AAFAGYCDvtZYnV5qcUipiZ3vybbo_eaz-hk";
$chat_id = "-706682644";
$arr = array(
    'ФИО: ' => $Name,
    'Email:' => $Email
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo "<script>alert(\"Кидайте ёнэ всегда в бан\");</script>";
} else {
    echo "<script>alert(\"Error.\");</script>";
}
?>