<?php 
    if($_SESSION['cargo_database']!="Administrador"){
        $ins_login->forzar_cierre_sesion_controlador();
        exit();
    }
