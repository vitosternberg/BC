<?php

if (isset($_POST["submit"])){
    if (empty($nombre)){
        echo "<p>ingresa un nombre<p>";
    }else {
        if(strlen($nombre) >20){
        echo "<p>nombre muy largo <p>";
        }
    }
    if (empty($fono)){
        echo "<p>ingresa un numero<p>";
    }else {
        if(!is_numeric($fono) && strlen($nombre) ===9){
        echo "<p>formato numerico invalido<p>";
        }
    }
    if (empty($mail)){
        echo "<p>ingresa un correo<p>";
    }else {
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            echo "<p>formato de correo invalido</p>";
        }
    }
    
    
}
?>