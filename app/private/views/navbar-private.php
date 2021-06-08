
<nav class="navbar navbar-expand-lg navbar-light bg-info">

        <div class="d-flex">
            <div class="p-2">
                <a class="navbar-brand" href="index.php?edit=introduction">
                    <img src="./public/assets/img/icono.png" class="img-fluid rounded" style="width: 50px; height: 50px" alt="logotienda">
                </a>
            </div>
            <div class="p-2"><h1 class="display-5">GameStore</div></div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul>
                <li class="nav-item d-inline-flex p-2">
                    <a class="nav-link" href="index.php?edit=games">Videojuegos</a>
                </li>
            </ul>
            <!--Begin User Security: Login -->
            <ul>
                <li class="nav-item d-inline-flex p-2">
                    <a href="./index.php?user=logout" type="button" class="btn btn-outline-secondary">Exit</a>
                </li>
            <!--End  User Security: Login -->
            
                <li class="nav-item d-inline-flex p-2">
                    <a type="button" class="p-2 btn btn-primary" href="index.php?game=insert">Añadir</a>
                </li>
            </ul>
        </div>
     </div>
</nav>
<hr/>

