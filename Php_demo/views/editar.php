<form action="./controller/editAlumnoController.php" method="POST">
                    
    <input type="hidden" name="id" value="<?php echo  $sqlAlumnos['id']  ?>">
    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo  $sqlAlumnos['nombre']  ?>">
    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo  $sqlAlumnos['sexo']  ?>">
                                
    <input type="submit" class="btn  center btn-primary btn-block" value="Guardar">
</form>