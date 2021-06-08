<!-- PageContent -->
<div class="container">

<?php
$game = $this->getGameDetailsAction($_GET['idgame']);
?>
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
</div>


