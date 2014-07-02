<?php
    # Este archivo contiene la informaci�n para el acceso a la base de datos
    # El archivo esta establecido para una conexi�n a PostgreSQL 
    
    # Informaci�n de Acceso
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', '');
    DEFINE ('DB_NAME', 'cineucab');
    
    # Realizamos la conexi�n a la base de datos
   /*$conexion = mysql_connect(DB_HOST, DB_HOST, DB_PASSWORD) or die 
    ("No se pudo conectar al Servidor de la base de datos MySQL");
    */
    //pg_connect("host=".DB_HOST." port=5432 dbname=".DB_NAME." user=".DB_USER." password=".DB_PASSWORD)                                                
    $conexion_bd = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Error " . mysqli_error($link));
    

?>