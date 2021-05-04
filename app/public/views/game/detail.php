<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../../persistence/DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../../../models/Game.php');
//Compruebo que me llega por GET el parámetro
if (isset($_GET["idgame"])) {
    $idgame = $_GET["idgame"];
    
    $gameDAO = new GameDAO();
    $game = $gameDAO->selectById($idgame);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Gestión de Videojuegos</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="../../../../assets/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../../../../index.php"><img class="img-fluid rounded-sm" src="../../../../assets/img/icono.png" style="width: 50px; height: 50px" alt="icono"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        </br>
        <!-- PageContent -->
        <div class="container">

            <div class="card mx-auto" style="width: 40rem;">
                <div class="card-header">
                    <h1 class="card-title text-center text-primary"> <?php echo $game->getName() ?></h1>
                </div>
                <img class="card-img-top rounded mx-auto d-block avatar" src='<?php echo $game->getCover() ?>' alt="Card image cap">
                <div class="card-body">
                    <div class="card-block">
                        <h3 class="card-subtitle mb-2 text-success">Precio: <?php echo $game->getPrice() ?> €</h3>
                        <h5 class="card-subtitle mb-2 text-secondary">Valoration: <?php echo $game->getValoration() ?></h5>
                        <p class=" card-text description">Description: <?php echo $game->getDescription() ?></p>
                        <p class="card-text"><small class="text-muted">Made by: <?php echo $game->getCompany() ?> </small></p>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; A. F. 2017</p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Java Script Boostrap-->
        <script src="../../../../assets/js/bootstrap.min.js" ></script>
        
    </body>

</html>


