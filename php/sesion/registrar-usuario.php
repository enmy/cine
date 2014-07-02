<form name="inicio_sesion_post_frm" action="control.php?sesion=registro" method="post" enctype="application/x-www-form-urlencoded">
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        if($_GET["error"]=="si")
        {
            echo "<span>Verificar datos</span>";
        }else
        {
            echo "<span>Introduce tus datos</span>";
        }
    ?>
    <br /><br />
    C&eacute;dula de identidad:
    <input type="number" name="cedula_num" />
    <br /><br />
    Nombre y apellido:
    <input type="text" name="nombre_txt" />
    <br /><br />
    Correo electr&oacute;nico:
    <input type="email" name="correo_txt" />
    <br /><br />
    N&uacute;mero de tarjeta de cr&eacute;dito:
    <input type="number" name="tdc_num" />
    <br /><br />
    Contrase&ntilde;a:
    <input type="password" name="contrasena_txt" />
    <br /><br />
    <input type="hidden" name="sesion" value="registro" />
    <input type="submit" id="registrar_btn" name="registrar_btn" value="Reg&iacute;strate" />
</form>