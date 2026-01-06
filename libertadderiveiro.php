<?php

/*

include 'phpqrcode/qrlib.php'; // Asegúrate de que la ruta sea correcta

// Para modificar el color se modifico la libreria qrimage.php
// se color el color rosado

$dato = "http://globalinvestment.com.ve/qrcoatings/libertadderiveiro.html";

$nivelCorreccion = QR_ECLEVEL_H;
$tamano = 5;
$rutaGuardado = "qr_coatings_libertadderiveiro.png";

QRcode::png($dato,$rutaGuardado, $nivelCorreccion, $tamano);

*/

include('phpqrcode/qrlib.php');

$dato = "http://globalinvestment.com.ve/qrcoatings/libertadderiveiro.html";
$pngfile = 'qr_coatings_libertadderiveiro.png';
$nivelCorreccion = QR_ECLEVEL_H;
$tamano = 5;

// 1. Generamos el QR normalmente en un archivo temporal
QRcode::png($dato, $pngfile, $nivelCorreccion, $tamano, 2);

// 2. Cargamos la imagen creada para manipularla
$im = imagecreatefrompng($pngfile);

// 3. Definimos tus nuevos colores (R, G, B)
// Ejemplo: Fondo Gris Claro y Código Rojo Industrial
$fondoR = 255; $fondoG = 255; $fondoB = 255;
$codeR  = 255; $codeG  = 0;   $codeB  = 128;

// 4. Buscamos el índice del color negro y blanco en la imagen generada
$indexNegro = imagecolorexact($im, 0, 0, 0);
$indexBlanco = imagecolorexact($im, 255, 255, 255);

// 5. Cambiamos los colores en la paleta
imagecolorset($im, $indexNegro, $codeR, $codeG, $codeB);     // Cambia Negro -> Rojo
imagecolorset($im, $indexBlanco, $fondoR, $fondoG, $fondoB); // Cambia Blanco -> Gris

// 6. Guardamos la imagen final
imagepng($im, $pngfile);
imagedestroy($im);

// echo $path;
// echo "¡Código QR generado con colores para coatings!";

?>

<img src="<?php echo $pngfile; ?>" alt="Código QR de la empresa">
