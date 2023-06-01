<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
        <img src="https://virtual2.umng.edu.co/pluginfile.php/1/theme_moove/logo/1677851070/LogosUMNGabiertos.png">
        </a>
    </div>

    <div class="login col-3 mt-3">
        <a href="centro.php" class="letra">Centro de Investigación</a>
    </div>

    <div class="login col-3 mt-3">
        <a href="docente.php" class="letra">Docente</a>
    </div>
</div>
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
