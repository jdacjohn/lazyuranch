<?php

// Begin the session
session_start();

// If the session is not present, set the variable to an error message
if(!isset($_SESSION['captcha_id']))
	include('../includes/rand.php');
// Else if it is present, set the variable to the session contents
else
	$str = $_SESSION['captcha_id'];

// Set the content type
//header('Content-type: image/png');
header('Cache-control: no-cache');

// Create an image from button.png
$image = imagecreatefrompng('button.png');

// Set the font colour
$colour = imagecolorallocate($image, 239, 239, 239);

// Set the font
$font = 'fonts/Anorexia.ttf';

// Set a random integer for the rotation between -10 and 10 degrees
$rotate = rand(-5, 5);

// Create an image using our original image and adding the detail - Params below
// imagettftext ( image , size , angle , x , y , color , font , stringToWrite )
imagettftext($image, 12, $rotate, 36, 24, $colour, $font, $str);

// Output the image as a png
imagepng($image);

?>