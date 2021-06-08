<!-- Card: Register -->
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <form class="form-horizontal"  method="POST" action="app/controllers/UserController.php">

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2>Registrate</h2>
                    </div>
                </div>
                <div class="form-group">
                    <h6><label for="email">Correo:</label></h6>
                    <input type="email" class="form-control" id="username" placeholder="javi@ejemplo.com" name="username">
                </div>
                <br>
                <div class="form-group">
                    <h6><label for="password">Contraseña:</label></h6>
                    <input type="password" class="form-control" id="password" placeholder="contraseña" name="password">
                </div>

                <br>
                <button class="btn btn-primary"  id="register" name="btnregister">Registrarse</button>
            </form>
        </div>
    </div>
</div>


