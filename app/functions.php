<?php
include __DIR__ . '/env.php';

$site = "Asset Finance Shop";
$phone_number = "1300 023 185";
$admin_email = 'info@assetfinanceshop.com'; // 'arijal@aiims.com.au';
// $bcc_email = "kalbassit@aiims.com.au";
$no_reply_email = 'info@assetfinanceshop.com';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

$application_page = false;
$thankyou_page = false;
$pageRef = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
