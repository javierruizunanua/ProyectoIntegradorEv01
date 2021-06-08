<?php
require_once(dirname(__FILE__) . '/../../../controllers/PublicViewController.php');
require_once(dirname(__FILE__) . '/../../../controllers/ContentController.php');
// Get actual news from database
$games = $this->getActualGamesAction();
?>

<div class="jumbotron">
    <div class="row">
        <div class="col-6 mx-auto">
            <h2 class="p-2 display-4" >Gestión de los videojuegos
            </h2>
        </div>
    </div>

</div>

</br>

<div class="container">
<?php
for ($i = 0; $i < sizeof($games); $i+=3) {
?>
<div class="row">
    <?php
    for ($j = $i; $j < ($i + 3); $j++) {
        if (isset($games[$j])) {
            ?>
            <div class=" col-md-4 ">
                <div class="card ">
                    <div class="card-block">
                        <h2 class="card-title"><?php echo $games[$j]->getName()  ?></h2>
                        <img class="card-img-top rounded mx-auto" src='<?php echo  $games[$j]->getCover() ?>' alt="Card image cap">
                    </div>
                    <div class=" btn-group card-footer" role="group">
                        <div class=" btn-group card-footer" role="group">
                            <a type="button" class="btn btn-secondary"
                               href="index.php?game=details&idgame=<?php echo $games[$j]->getIdGame() ?>">Detalles</a>
                            <a type="button" class="btn btn-success"
                               href="index.php?game=edit&idgame=<?php echo $games[$j]->getIdGame() ?>">Modificar</a>
                            <a type="button" class="btn btn-danger"
                               href="index.php?game=delete&idgame=<?php echo $games[$j]->getIdGame() ?>">Borrar</a>
                        </div>
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