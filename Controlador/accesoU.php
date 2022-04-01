<?php

    include("../Controlador/BD/Conexion.php");
    $empleadoDao = new UsuarioDao();

    $alias = $_POST['alias'];
    $contrasena = $_POST['contrasena'];

    $csql = "SELECT * FROM usuarios  WHERE Alias = '$alias' and Contraseña = '$contrasena'";
    
    try{
        $resultado = $empleadoDao->consulta($csql);
        if($resultado->num_rows != 0)
           require_once ("../Vista/inicioS.html");
        else
            require_once ("../Vista/main.html");
                
    }catch(RuntimeException $re){
        echo $re->getMessage();
    }
?>