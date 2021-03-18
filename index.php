<!--
    Version 2
-->
<?php
    include 'templates/header.php';
?>
        <div class="jumbotron jumbotron-fluid">
            <div id="bienvenida" class="container">       
                <?php 
                    echo "<h1 class='display-3'>Gamestore</h1>";

                    if ($loggedin) echo "<span class='badge badge-primary'> Has iniciado sesión: ".$user."</span>";
                    else           echo "<span class='badge badge-default'> por favor, regístrate o inicia sesión.</span>";
                ?>
            </div>
        </div>
        <div id="bienvenida" class="img-fluid" alt="Responsive image"> 
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <img src="assets/img/tienda.jpg" class="rounded mx-auto d-block" style="width: 600px; height: 450px" alt="imagen de la tienda"/>
                    <p class="lead">Aquí podrás consultar todos los juegos de diferentes consolas y generaciones disponibles. Podrás ver sus detalles y elegir el que más te guste.</p>   
                </div>
            </div>                
        </div>
        <footer class="footer">
            <div class="container">
                <span class="text-muted">Proyecto Integrador, Desarrollo Web - 2ºDAM</span>
            </div>
        </footer>
    </body> 
</html>
