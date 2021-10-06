<?php
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
    ?>
    <h3> No estas logueado, registrate!!</h3>
    <?php
} else {
    ?>
    <br />
    <br />

    <div class="container">
        <br />
        <br />
        <div class="row">
        </div>
        <div class="row">
            <div class="col s12 m6 offset-m4">
                <form action="./controller/login.php" method="post">
                    <div class="row card-panel z-depth-4">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">face</i>
                            <input
                                type="text"
                                placeholder="ingrese su Usuario"
                                id="usuario"
                                name="usuario"
                                class="validate" required
                                />
                            <label for="usuario">usuario</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input
                                    type="password"
                                    placeholder="ingrese su password"
                                    id="pswd"
                                    name="pswd"
                                    class="validate" required
                                    />
                                <label for="Contraseña">password</label>
                            </div>
                            <button class="btn blue right">
                                <i class="material-icons left">login</i>
                                enviar
                            </button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php } ?>