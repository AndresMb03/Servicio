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
                    <a  class="btn_doc">Cedula ciudadania</a>
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
                <div style="margin-top:20px">
                    <a  class="btn_doc"> Hoja de vida</a>
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Libreta Militar</a>
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Tarjeta profesional</a>
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Diploma de grado</a>
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Diploma de grado</a>
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
                <div style="margin-top:20px;text-align: center;">
                    <a  class="btn_doc">Diploma de grado</a>
                    <input type="file" id="documento" style="display: none;">
                    <button onclick="seleccionarDocumento()">Entregar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function seleccionarDocumento() {
            var inputDocumento = document.getElementById('documento');
            inputDocumento.click();
            inputDocumento.addEventListener('change', function() {
                var archivo = inputDocumento.files[0];
                // Aquí puedes realizar cualquier acción adicional con el archivo seleccionado, como enviarlo a un servidor o procesarlo de alguna manera.
                console.log('Archivo seleccionado:', archivo.name);
            });
        }
    </script>
    <div class="login col-3 mt-3">
        <a href="docente.php" style="text-decoration: none;margin-left:20px">Enviar Documentación</a>
    </div>
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
