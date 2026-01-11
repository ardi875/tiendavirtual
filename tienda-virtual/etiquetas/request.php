<?php

/**
 * @author		Miguel Angel Macias Burgos
 * @company 	WBT
 * @copyright 	2026
 * @version     1.0
 */

require_once "config.php";

// Recibir datos del form
$raza = $_POST["raza"];
$cantidad = $_POST["cantidad"]; //20

switch($raza){
    case "1":
        // Laptop
        $prefijo = "L-";
        break;
    case "2":
        // Smartphone
        $prefijo = "S-";
        break;
    case "3":
        // Tablet
        $prefijo = "T-";
        break;
    case "4":
        // Smartwatch
        $prefijo = "W-";
        break;
}

$p = 1;
$etiquetas = "";
while($p <= $cantidad){
    $t = strlen($p); // funcion para obtener la longitud de una cadena
    switch($t){
        case 1:
            $nro = "0000" . $p;
            break;
        case 2:
            $nro = "000" . $p;
            break;
        case 3:
            $nro = "00" . $p;
            break;
        case 4:
            $nro = "0" . $p;
    }

    $codigo = $prefijo . $nro;
    

    $etiquetas .= "
        <div class='x-2'>
            <div class='card'>
                <div class='card-title'>Código #". $p ."</div>
                <div class='card-subtitle'>". $codigo ."</div>
                <div class='clear'></div>
            </div>
        </div>";
    $p = $p + 1; // $p++
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv='content-type' content='text/html' charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    
	<title><?php echo $appTitle; ?></title>
        
    <!-- CSS -->
    <link rel='stylesheet' href='css/main.css' />        
</head>

<body>

<!-- Main Page -->
<div class='ctn-form'>
    <!-- Header -->
    <div class='form-header'>
        <div class='ctn-icon'><div class='icon'></div></div>
        <div class='form-title'><?php echo $appTitle ?></div>
        <div class='form-subtitle'><?php echo $appSubtitle ?></div>
        <div class='bar'><div class='step'></div></div>
        
        <a href='index.php'><div class='btn-back'></div></a>
    </div>
    <!-- Body -->
    <div class='form-content'>
        <?php echo $etiquetas ?>
        <div class='clear'></div>
    </div>
</div>

</body>
</html>