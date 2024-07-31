<?php 
session_start();

$_SESSION['recaptcha'] = mt_rand(1000,9999);

$img = imagecreate(100,50);
$font = '28DaysLater.ttf';
$bg = imagecolorallocate($img, 255, 255,255);
$textcolor = imagecolorallocate($img, 0, 0, 0);
imagefttext($img, 33, 0, 0, 45, $textcolor, $font, $_SESSION['recaptcha']);
header('content-type:image/jpeg');
imagejpeg($img);
imagedestroy($img);