<?php
$conn = mysqli_connect('localhost', 'root', '', 'proyectos');

if(!$conn){
    echo 'Error: No se pudo conectar con MySQL '. PHP_EOL;
    echo 'Error de depuración: '.mysqli_connect_errno(). PHP_EOL;
    echo 'Error de depuración: '.mysqli_connect_error().PHP_EOL;
}