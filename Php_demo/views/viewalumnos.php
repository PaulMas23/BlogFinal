<table class="striped ">
    <thead class ="black white-text">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th></th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sqlAlumnos as $alumnoview) { ?>
            <tr>
                <td><?php echo $alumnoview->id; ?></td>
                <td><?php echo $alumnoview->nombre; ?></td>
                <td><?php echo $alumnoview->sexo; ?></td>
                <td>
                    <?php if ($alumnoview->sexo == 'M') { ?>
                        <i class = "material-icons prefix blue-text">male</i>
                    <?php } else { ?>
                        <i class = "material-icons prefix red-text">female</i>
                    <?php } ?>
                </td>
                <td>
                    <button class="btn waves-effect waves-light red" type="submit" name="action">
                        <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>"
                           <i class="material-icons right white-text">delete</i></a>
                    </button>  
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
                            <i class="material-icons right white-text">edit</i></a>
                    </button>                    
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>