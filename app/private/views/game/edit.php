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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                      <a type="button" class="btn btn-info " href="insert.php">Introducir un videojuego</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content -->
        <div class="container">
            <form class="form-horizontal" method="post" action="../../../controllers/game/editController.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="<?php echo $game->getName(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $game->getDescription(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cover" class="col-sm-2 control-label">Cover</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cover" name="cover" placeholder="Cover" value="<?php echo $game->getCover(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" min="0" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $game->getPrice(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="valoration" class="col-sm-2 control-label">Valoration</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" min="0" class="form-control" id="valoration" name="valoration" placeholder="Valoration" value="<?php echo $game->getValoration(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="company" class="col-sm-2 control-label">Company</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="<?php echo $game->getCompany(); ?>">
                    </div>
                </div>
                
                <input type="hidden" name="idgame" value="<?php echo $game->getIdGame(); ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Edit</button>
                    </div>
                </div>
            </form>
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
        <script src="../../../../assets/js/bootstrap.min.js"></script>

    </body>
</html>


