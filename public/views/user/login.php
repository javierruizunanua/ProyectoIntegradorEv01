<!-- Card: Login -->
<div class="tab-content p-b-3">
    <div class="tab-pane active" id="profile">
            <form class="form-horizontal"  method="POST"
                  action="app/controllers/userController.php">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2>Introduzca detalles del acceso</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group has-danger">
                            <h6><label class="sr-only" for="email">Email:</label></h6>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                <input type="email" name="username"
                                       class="form-control" id="username"
                                       placeholder="javi@ejemplo.com" required
                                       autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6><label class="sr-only"
                                   for="password">Contraseña:</label></h6>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon"></div>
                                <input type="password" name="password"
                                       class="form-control" id="password"
                                       placeholder="Contraseña" required>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button  class="btn btn-success"
                                value="Login" id="login" name="btnsubmit">
                            Acceder
                        </button>
                    </div>
                </div>
                <br>
            </form>
    </div>
    <!--/ Card: Login -->

