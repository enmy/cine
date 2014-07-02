<!DOCTYPE html>
<html lang="es">

<head>
	<title>cineUCAB</title>
	<meta charset="utf-8" />
    
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="/cine/WOWSlider/engine1/style.css" />
	<script type="text/javascript" src="/cine/WOWSlider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="/cine/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/cine/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="/cine/css/index.css" />
</head>
    
<body background="/cine/img/wallpaper.jpg">
    <div align="center" style="width:960px; margin: 0 auto;">

        <!-- ENCABEZADO -->
        <div class="row" style="width:inherit; height:196px; background-image:url('/cine/img/wallpaper4.png'); background-size:cover;">
            <div class="col-md-3"><img src="/cine/img/logoUCAB.png" alt="logo" /></div>
            <div class="col-md-3" style="height:100%;"><h1 style="margin:25% 0; color:white;">Cine UCAB</h1></div>
            <div class="col-md-3"></div>
            <div class="col-md-3" style="height:100%;">
                <?php
                    session_start();

                    #si no ha iniciado sesion
                    if(!isset($_SESSION["autentificado"]) || !$_SESSION["autentificado"])
                        echo '<a href="/cine/php/sesion/inicio-sesion.php" style="float:right; color:white;">Iniciar sesi&oacute;n</a>';
                    else
                    {   
                        //$name = $_SESSION["nombre_usuario"];
                        //echo '<script language="javascript">alert("'.$name.'");</script>';
                        //echo $name;
                        
                        echo '<span style="color:white;">'.$_SESSION["nombre_usuario"].'</span><a href="/cine/php/sesion/salir.php" style="float:right; color:white;">Cerrar sesi&oacute;n</a>';
                    }
                ?>
            </div>
        </div>
        <!-- FIN DE ENCABEZADO -->
        
        <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container1">
            <div class="ws_images"><ul>
                <li><img src="/cine/img/Pelo-malo.jpg" alt="hola" title="Pelo Malo" id="wows1_0" width="960" height="360"/></li>
                <li><img src="/cine/WOWSlider/data1/images/big_15.jpg" alt="big (15)" title="big (15)" id="wows1_1"/></li>
                <li><img src="/cine/WOWSlider/data1/images/big_16.jpg" alt="big (16)" title="big (16)" id="wows1_2"/></li>
                </ul></div>
        <div class="ws_thumbs">
            <div>
            <a href="#" title="chao"><img src="/cine/img/Pelo-malo.jpg" alt="" width="128" height="48"/></a>
            <a href="#" title="big (15)"><img src="/cine/WOWSlider/data1/tooltips/big_15.jpg" alt="" /></a>
            <a href="#" title="big (16)"><img src="/cine/WOWSlider/data1/tooltips/big_16.jpg" alt="" /></a>
                
            </div>
        </div>
            <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="/cine/WOWSlider/engine1/wowslider.js"></script>
            <script type="text/javascript" src="/cine/WOWSlider/engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section -->
        
        <br /><br /><br />
        
        <?php #IMAGEN PARA SLIDER
            /*# conexión a la base de datos
            require('php/conectar-bd.php');
            
            $query = "SELECT imagen_portada FROM portadas WHERE id_pelicula = 1";

            if ($resultado = mysqli_query($conexion_bd, $query))
            {
                #resulto bien
                if ($fila = mysqli_fetch_row($resultado))
                {
                    header("Content-Type: image/jpeg");
                    echo $fila[0];
                    mysqli_free_result($resultado);
                }
            }
            mysqli_close ( $conexion_bd );*/
        ?>
        
        <br /><br /><br />
        
        <!-- BARRA DE NAVEGACION -->
        <div class="row" id="barranav" style="width:100%;" >
          <a href="#"><div class="col-md-2" style="border-left-style:none">Inicio</div></a>
          <a href="#"><div class="col-md-2">Cartelera</div></a>
          <a href="#"><div class="col-md-2">Cines</div></a>
          <a href="#"><div class="col-md-2">Próximamente</div></a>
          <a href="#"><div class="col-md-2">Precios</div></a>
          <a href="#"><div class="col-md-2">Acerca de</div></a>
        </div>
        <!-- FIN BARRA DE NAVEGACION -->
        
        <br />
        
        <!-- CINES -->
        <div>
            <div>
                
        <?php #CARTELERA
            # conexión a la base de datos
            require('conectar-bd.php');
            
            $query = "SELECT DISTINCT ciudad FROM sucursal ORDER BY ciudad ASC";

            if ($resultado = mysqli_query($conexion_bd, $query))
            {
                #resulto bien
                while ($fila=mysqli_fetch_row($resultado))
                {
                    echo '<div class="row" id="barratitulo" style="width:100%;" ><h1>'.$fila[0].'</h1></div>';
                    
                    $query2 = "SELECT direccion FROM sucursal WHERE ciudad = \"".$fila[0]."\"";
                    if ($resultado2 = mysqli_query($conexion_bd, $query2))
                    {
                        while ($fila2 = mysqli_fetch_row($resultado2))
                        {
                            echo '<div class="row contenido" style="width:100%;" ><h4>'.$fila2[0].'</h4></div>';
                        }
                        mysqli_free_result($resultado2);
                    }
                }
                mysqli_free_result($resultado);
            }
            mysqli_close ( $conexion_bd );
        ?>
                
                <div class="row" id="barratitulo" style="width:100%;" ><h1>ciudad</h1></div>
                <div class="row contenido" style="width:100%;" ><h3>cine</h3><br /><br /><br /><br /><br /></div>
            </div>
        </div>
        <!-- CINES -->
        
        
        
    </div>
    
    <?php
        if(isset($_GET['registro']) && $_GET['registro'])
            echo '<script language="javascript">alert("Resgistro exitoso");</script>';
    ?>
    
</body>
</html>