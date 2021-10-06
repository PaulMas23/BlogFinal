<?php

    if (filter_input_array(INPUT_POST)) {
                    
        $_id =  trim(filter_input(INPUT_POST, 'id'));   
        $_nombre = trim(filter_input(INPUT_POST, 'nombre'));
        $_sexo = trim(filter_input(INPUT_POST, 'sexo'));
        include_once '../model/alumnos.php';

        $edit = alumnos::edit($_id,$_nombre,$_sexo);
        if ($edit){
            header("location: ../index.php?menu=alumnos");
        } else{
            echo 'Error, no se pudo actualizar';
        }
    }

?>