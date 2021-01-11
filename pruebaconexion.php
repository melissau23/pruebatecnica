<?php

$servidor="localhost";
$basededatos="prueba";
$usuario="root";//root es el usuario que incada que no se creo un usuario y contraseña a la base de datos-usuario predeterminado
$contraseña="";

$conexion= new mysqli($servidor,$usuario,$contraseña,$basededatos);//YA ESTA LA CONEXION A LA BASE DE DATOS.
//new mysqli es una funcion de php que me permite conectar a las bases de datos de MySQL
//1.Entra al servidor
//2. Comprueba que el usuario y la contraseña esten bien.
//4. Ya cuando esta en la base de datos, selecciona a la base que vamos a trabajar.
if($conexion->connect_errno)//Verificar si hay algun error de conexion.
    {
        echo "La conexion presenta fallas";
        exit();//Cierra la conexion.
    }
//connect_errno: comprobar errores de conexion.


?>