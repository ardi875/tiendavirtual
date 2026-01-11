<?php

/**
 * @author		Miguel Angel Macias Burgos
 * @company 	WBT
 * @copyright 	2026
 * @version     1.0
 */

require_once "config.php";

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
    </div>
    <!-- Body -->
    <div class='form-content'>
        <form action='request.php' method='post' >            
            <div class='x-1'>
                <select name='raza'>
                    <option value='1'>Laptop</option>
                    <option value='2'>Smartphone</option>
                    <option value='3'>Tablets</option>
                    <option value='4'>Smartwatch</option>
                </select>
            </div>
<div class='form-content'>
        <form action='request.php' method='post' >            
            <div class='x-2'>
                <select name='raza'>
                    <option value='1'>Sucursal </option>
                    <option value='2'>LP</option>
                    <option value='3'>CBBA</option>
                    <option value='4'>SCZ</option>
                </select>
            </div>
            <div class='x-2'>
                <input type='number' name='cantidad' placeholder='Cantidad de etiquetas' />
            </div>
            <div class='x-1'>
                <input type='submit' value='Generar' />
            </div>
            <div class='clear'></div>
        </form>
    </div>
</div>

</body>
</html>