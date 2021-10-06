<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE)
{
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
    ?>

    <div class="navbar-fixed"/>
    <nav>
        <div class="nav-wrapper black">
            <a href="https://www.uacam.mx/" class="brand-logo right"><img src="images/Logo.jpg" width="60px" height="60px" alt="alt"/></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="?menu=perfil">Perfil</a></li>
                <li><a href="?menu=alumnos">Alumnos</a></li>
                <li><a href="?menu=logout"><i class="material-icons prefix">logout</i></li>
            </ul>
        </div>
    </nav>
    </div>

<?php } else {
    ?>

    <!-- navbar menu -->
    <div class="navbar navbar-fixed"/>
    <nav>
        <div class="nav-wrapper black ">
            <a href="https://www.uacam.mx/" class="brand-logo right"><img src="images/Logo.jpg" width="60px" height="60px" alt="alt"/></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="?menu=home">Inicio</a></li>
                <li><a href="?menu=universidad">Universidad</a></li>
                <li><a href="?menu=login">Login</a></li>
            </ul>
        </div>
    </nav>
    </div>
<?php } ?>