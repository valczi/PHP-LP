<?php
require_once 'vendor/autoload.php';

use App\Entity\Rectangle;

$rectangle = new Rectangle();

// Création d'une image de 200 x 200 pixels
$canvas = imagecreatetruecolor(1000, 1000);

// Alloue les couleurs
$pink = imagecolorallocate($canvas, 255, 105, 180);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 132, 135, 28);

// Dessine 3 rectangles, chacun avec sa couleur
imagerectangle($canvas, 50, 50, 150, 150, $pink);
imagerectangle($canvas, 45, 60, 120, 100, $white);
imagerectangle($canvas, 100, 120, 75, 160, $green);

// Affichage et libération de la mémoire
header('Content-Type: image/jpeg');

imagejpeg($canvas);
imagedestroy($canvas);
