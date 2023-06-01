<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
        <img src="https://virtual2.umng.edu.co/pluginfile.php/1/theme_moove/logo/1677851070/LogosUMNGabiertos.png">
        </a>
    </div>
    <div class="titulo">

        <div class="container" style="margin-top: 40px;">
            <a href="panel_control.php">
                <h1>Documentos Entregados</h1>
            </a>
            <div class="login col-3 mt-3">
                <div style="margin-top:20px">
                    <a href="entregados.php" class="btn_doc">Andres Murcia</a>
                </div>
                <div style="margin-top:20px">
                    <a href="entregados.php" class="btn_doc"> Juanito Perez</a>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a href="entregados.php" class="btn_doc">Pablito Nuñez</a>
                </div>   
                <div style="margin-top:20px;text-align: center;">
                    <a href="entregados.php" class="btn_doc">Daniel Ramirez</a>
                </div>  
            </div>
        </div>
    </div>
</div>


<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
