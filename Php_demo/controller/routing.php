<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "inicio":
        require_once('./views/home.php');
        break;
    case "perfil":
        require_once('./views/perfil.php');
        break;
    case "universidad":
        require_once('./views/universidad.php');
        break;
    case "alumnos":
        include_once './model/alumnos.php';
        $sqlAlumnos = alumnos::consultar();

        include_once './views/viewalumnos.php';
        break;
    case "logout":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        break;
    case "deletealumno":
        $_idalumnos = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once ('./model/alumnos.php');
        $sqlAlumnos = alumnos::delete($_idalumnos);
        header("location: ./index.php?menu=alumnos");
        break;
     case "editalumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once ('./model/alumnos.php');
        $sqlAlumnos = alumnos::consultarAlumno($_idalumno);
        include_once './views/editar.php';
        break;
    
    case "insertalumnoview":
        require_once('./views/insertAlumno.php');
        break;

    case "login":
        require_once('./views/login.php');
        break;
    case "bienvenido":
        require_once('./views/bienvenido.php');
        break;

    default:
        require_once('./views/home.php');
}
?>