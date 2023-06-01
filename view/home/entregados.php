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

            <h1>Documentos Entregados</h1>
            <div class="login col-3 mt-3">
                <div style="margin-top:20px">
                    <a  class="btn_doc">Cedula de ciudadania</a>
                    <button >Revizar</button>
                </div>
                <div style="margin-top:20px">
                    <a  class="btn_doc"> Hoja de vida</a>
                    <button >Revizar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Libreta Militar</a>
                    <button >Revizar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Tarjeta profesional</a>
                    <button >Abrir</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Diploma de grado</a>
                    <button >Revizar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Diploma de grado</a>
                    <button >Revizar</button>

                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Diploma de grado</a>
                    <button >Revizar</button>
                </div>
            </div>
        </div>  
    </div>
    <div class="login col-3 mt-3">
        <a href="centro.php" style="text-decoration: none;margin-left:20px">Aceptar entrega</a>
    </div>
    <div class="login col-3 mt-3">
        <a href="centro.php" style="text-decoration: none;">Rechazar entrega</a>
    </div>
    <div class="login col-3 mt-3">
        <a href="centro.php" style="text-decoration: none;">Revisar otro estudiante</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
