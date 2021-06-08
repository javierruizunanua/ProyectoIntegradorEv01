<?php
require_once(dirname(__FILE__) . '/../../app/controllers/PublicViewController.php');

$games = $this->getActualGamesAction();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img class="img-fluid rounded" src="public/assets/img/tienda.jpg" alt="Imagen de la tienda">
        </div>
        <div class="col-md-4">
            <h1>GameStore: Tienda de videojuegos</h1>
            <p class="lead">Es un listado de videojuegos</p>

            <!--Begin User Security: SignUp -->
            <div  class="d-inline-flex">
                <a href="index.php?user=signup" type="button" class="btn btn-outline-primary">Acceder</a>
            </div>
            <!--End  User Security: SignUp -->

        </div>
    </div>
</div>

<hr>
<div class="container">
<?php
for ($i = 0; $i < sizeof($games); $i+=3) {
?>
<div class="row">
    <?php
    for ($j = $i; $j < ($i + 3); $j++) {
        if (isset($games[$j])) {
            ?>
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-header">
                        <h2 class="card-title text-center"><?php echo $games[$j]->getName() ?></h2>
                    </div>
                    <img card-img-top rounded mx-auto d-block avatar src="<?php echo $games[$j]->getCover() ?>"  alt="Card image cap"/>
                    <div class="card-body">
                        <div class="card-block">          
                            <p class=" card-text description">Precio: <?php echo $games[$j]->getPrice()?> €</p>
                            <p class=" card-text description">Valoración: <?php echo $games[$j]->getValoration()?> €</p>
                            <p class=" card-text description">Descrición: <?php echo $games[$j]->getValoration()?></p>
                            <p class="card-text description"><small class="text-muted">Producido por: <?php echo $games[$j]->getCompany()?></small></p>
                        </div>
                    </div>
                    <div class=" btn-group card-footer" role="group">
                        <a type="button" class="btn btn-secondary"
                           href="index.php?game=public-details&idgame=<?php echo $games[$j]->getIdGame()  ?>">Detalles</a>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>
<?php
}
?>

</div>