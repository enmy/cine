<?php
    
    if($_GET["sesion"]=="inicio")
    {
        # conexión a la base de datos
        require('../conectar-bd.php');
    
        $query = "SELECT * FROM usuario
                    WHERE ci_usuario = ".$_POST["cedula_num"]." AND 
                        contrasena = ".$_POST["contrasena_txt"] 
            or die("Error in the consult.." . mysqli_error($conexion_bd));
        
        if ($resultado = mysqli_query($conexion_bd, $query))
        {
            if ($fila = mysqli_fetch_row($resultado))
            {
                //inicio la sesion
                session_start();
                
                //variables de sesion
                $_SESSION["autentificado"] = true;
                $_SESSION["usuario"] = $_POST["cedula_num"];
                
                #$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
                $_SESSION["nombre_usuario"] = $fila[1];
                //echo '<script language="javascript">alert("'.$name.'");</script>';
                
                mysqli_free_result($resultado);
                
                header("Location: archivo-protegido.php");
            }
        } else header("Location: inicio-sesion.php?error=si");
    
    
        //$consulta = mysqli_query($conexion_bd, $query);
        
        /*while($row = mysqli_fecth_array($consulta)) 
        {
          echo $row["name"] . "<br>";
        }*/
    
        /*if ($resultado = mysqli_query($conexion_bd, $query)) 
        {
        
            // obtener el array asociativo 
            while ($fila = mysqli_fetch_row($resultado)) {
                echo "$fila[0] $fila[1] $fila[2] $fila[3] $fila[4] <br>";
            }
        
            // liberar el conjunto de resultados 
            mysqli_free_result($resultado);
        }*/
    
        mysqli_close ( $conexion_bd );
    /*
        if($_POST["cedula_num"]==12345 && $_POST["contrasena_txt"]="1234")
        {
            //inicio la sesion
            session_start();
            
            //variables de sesion
            $_SESSION["autentificado"] = true;
            $_SESSION["usuario"] = $_POST["cedula_num"];
            
            header("Location: archivo-protegido.php");
            
        }else
        {
            header("Location: inicio-sesion.php?error=si");
        }*/
    }else if($_GET["sesion"]=="registro")
    {
        # conexión a la base de datos
        require('../conectar-bd.php');
        
        $query = "INSERT INTO usuario VALUES('{$_POST['cedula_num']}', \"'{$_POST['nombre_txt']}'\", \"'{$_POST['correo_txt']}'\", '{$_POST['contrasena_txt']}', '{$_POST['tdc_num']}')";
        
        if ($resultado = mysqli_query($conexion_bd, $query))
        {
            #resulto bien
            header("Location: ../../index.php?registrado=true");
        } else
        {
            header("Location: registrar-usuario.php?error=si");
        }
        mysqli_close ( $conexion_bd );
    }
?>