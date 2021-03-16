<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include 'header.php';
?>
        <div class="jumbotron jumbotron-fluid">
            <div id="bienvenida" class="container">       
                <?php 
                    echo "<h1 class='display-3'>$appname</h1>";

                    if ($loggedin) echo "<span class='badge badge-primary'> Has iniciado sesión: ".$user."</span>";
                    else           echo "<span class='badge badge-default'> por favor, regístrate o inicia sesión.</span>";
                ?>
            </div>
        </div>
        <div id="bienvenida" class="img-fluid" alt="Responsive image"> 
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <img src="https://www.ccastermas.com/wp-content/uploads/2019/09/game-astermas.jpg" class="rounded mx-auto d-block" style="width: 600px; height: 450px" alt="imagen de la tienda"/>
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
