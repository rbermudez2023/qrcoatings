<?php

include 'phpqrcode/qrlib.php'; // Asegúrate de que la ruta sea correcta

/*
$dato = "Empresa: Coatings de Oriente C.A.\n";
$dato .= "Sitio Web: https://coatingsdeoriente.com.ve/\n"; // La URL o el texto que quieres codificar
$dato .= "Calle 12, Colinas del Neveri, Edif. Centro Yoly, Local 1 PB. Barcelona. Codigo Postal 6001. Anzoátegui. Venezuela\n";
$dato .= "Contato: Alfredo Riveiro\n";
$dato .= "Telefono: +58 424-8062481\n";
$dato .= "Correo Corporativo: coatingsdeoriente@gmail.com.ve\n";
$dato .= "Correo Corporativo: gerencia@globalinvestment.com.ve\n";
$dato .= "Correo Personal: alfredoriveiro1961@gmail.com";
$nivelCorreccion = QR_ECLEVEL_H;
$tamano = 5;
$rutaGuardado = "qr_coatings.png"; */

$dato = "http://localhost/qrcoatings/alfredoriveiro.html";

$nivelCorreccion = QR_ECLEVEL_H;
$tamano = 5;
$rutaGuardado = "qr_coatings.png";

QRcode::png($dato,$rutaGuardado, $nivelCorreccion, $tamano);
?>

<img src="<?php echo $rutaGuardado; ?>" alt="Código QR de la empresa">
