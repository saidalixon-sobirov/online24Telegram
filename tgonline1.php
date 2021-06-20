<?php

//This project made by SaidAliKhan :) https://t.me/saidalixon_uz

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
 
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

 
$MadelineProto->account->updateStatus(['offline' => false ]);//TG da 24 soat ONLINE turish uchun false.ask holda true.

//   header('Content-type: image/jpeg');
      // Create Image From Existing File
      $jpg_image = imagecreatefromjpeg('img.jpg');
      $font_path = __DIR__ . '/lato/digital-7.ttf';
      $date = date("d.m.Y");
      $time = date("H:i");
      $white = imagecolorallocate($jpg_image, 255, 255, 255);
 $var1 = 780;
if( date('H')==11 || date('H')==21 || date('H')==31 || date('H')==41 || date('H')==51 || date('H')==01 ) $var1 = 880; 
if( date('i')==11 || date('i')==21 || date('i')==31 || date('i')==41 || date('i')==51 || date('i')==01 ) $var1 = 880; 
if( date('i') >= 10 && date('i') <= 19) $var1 = 880; 
if( date('H') >= 10 && date('H') <= 19) $var1 = 880; 


  	  imagettftext($jpg_image, 55, 0, 1010, 880, $white, $font_path, "L A S T   S E E N :");
      imagettftext($jpg_image, 300, 0, $var1, 1150, $white, $font_path, $time); //350,0,780,1150
      imagettftext($jpg_image, 100, 0, 950, 1270, $white, $font_path, $date);
 
      // Send Image to Browser
    //  imagejpeg($jpg_image);
      imagejpeg($jpg_image, "photo.jpg", 90);
      // Clear Memory
      imagedestroy($jpg_image);

$MadelineProto->photos->updateProfilePhoto(['photo' => "https://avatarfiles.alphacoders.com/715/71560.jpg" ]);
$MadelineProto->photos->uploadProfilePhoto(['file' => "photo.jpg" ]);
 
?>

