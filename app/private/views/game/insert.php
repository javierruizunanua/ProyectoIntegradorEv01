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
        <nav class="navbar navbar-light navbar-fixed-top navbar-expand-md bg-faded" role="navigation" style="background-color: #e3f2fd;">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="../../../../index.php"> <img class="img-fluid rounded-sm" src="../../../../assets/img/icono.png" style="width: 50px; height: 50px" alt="icono"></a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                      <a type="button" class="btn btn-info " href="#">Introducir un videojuego</a>
                    </li>
                  </ul>
                </div>
              </nav>
        <!-- Page Content -->
         <div class="container">
            <form class="form-horizontal" method="post" action="../../../controllers/game/insertController.php">
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="description" name="description" placeholder="Description" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cover" class="col-sm-2 control-label">Cover</label>
                    <div class="col-sm-10">
                        <input type="url" class="form-control" id="urlPicture" name="cover" placeholder="Cover" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" min="0" class="form-control" id="price" name="price" placeholder="Price" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="valoration" class="col-sm-2 control-label">Valoration</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" min="0" class="form-control" id="valoration" name="valoration" placeholder="Valoration" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="company" class="col-sm-2 control-label">Company</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="empresa" name="company" placeholder="Company" value="">
                    </div>
                </div>
           
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Insertar</button>
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

        <!-- jQuery -->
        <!-- <script src="../../assets/js/jquery.js"></script> -->

        <!-- Bootstrap Core JavaScript -->
        <script src="../../../../assets/js/bootstrap.min.js"></script>
    </body>

</html>


