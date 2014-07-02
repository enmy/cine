<script>
    function validarDatos()
    {/*
        var verificar = true;
        
        if(!document.inicio_sesion_post_frm.cedula_num.value)
        {
            alert("Cedula de identidad requerida");
            document.inicio_sesion_post_frm.cedula_num.focus();
            verificar = false;
        } else if(!document.inicio_sesion_post_frm.contrasena_txt.value)
        {
            alert("Contrasena requerida");
            document.inicio_sesion_post_frm.contrasena_txt.focus();
            verificar = false;
        }
        
        if(verificar)
            document.inicio_sesion_post_frm.submit();*/
    }
    
    
</script>

<form name="inicio_sesion_post_frm" action="control.php?sesion=inicio" method="post" enctype="application/x-www-form-urlencoded">
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
    Contrase&ntilde;a:
    <input type="password" name="contrasena_txt" />
    <br /><br />
    <input type="hidden" name="sesion" value="inicio" />
    <input type="submit" id="iniciar_btn" name="iniciar_btn" value="Iniciar" onclick="validarDatos()" />
</form>

<?php
?>