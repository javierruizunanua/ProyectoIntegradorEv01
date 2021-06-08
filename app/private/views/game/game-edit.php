<?php
if (isset($_GET["idgame"])) {
    $game = $this->getGameToEditAction($_GET["idgame"]);
}

?>

<link rel="stylesheet" href="./public/assets/SCEditor_wysiwyg/minified/themes/default.min.css" id="theme-style" />

<script src="./public/assets/SCEditor_wysiwyg/minified/sceditor.min.js"></script>
<script src="./public/assets/SCEditor_wysiwyg/minified/icons/monocons.js"></script>
<script src="./public/assets/SCEditor_wysiwyg/minified/formats/xhtml.js"></script>
<style>
    textarea {
        padding: 10px;
        vertical-align: top;
        width: 200px;
        height: 500px;
    }
    textarea:focus {
        outline-style: solid;
        outline-width: 2px;
    }

</style>
        <!-- Page Content -->
        <div class="container">
            <form class="form-horizontal" method="post" action="app/controllers/GameController.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="<?php echo $game->getName(); ?>">
                    </div>
                </div>
                </br>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $game->getDescription(); ?>">
                    </div>
                </div>
                </br>
                <div class="form-group">
                    <label for="cover" class="col-sm-2 control-label">Cover:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cover" name="cover" placeholder="Cover" value="<?php echo $game->getCover(); ?>">
                    </div>
                </div>
                </br>
                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price:</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" min="0" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $game->getPrice(); ?>">
                    </div>
                </div>
                </br>
                <div class="form-group">
                    <label for="valoration" class="col-sm-2 control-label">Valoration:</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" min="0" class="form-control" id="valoration" name="valoration" placeholder="Valoration" value="<?php echo $game->getValoration(); ?>">
                    </div>
                </div>
                </br>
                <div class="form-group">
                    <label for="company" class="col-sm-2 control-label">Company:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="<?php echo $game->getCompany(); ?>">
                    </div>
                </div>
                </br>
                <input type="hidden" name="id" value="<?php echo $game->getIdGame(); ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>

<script>
  var textarea = document.getElementById('duties');
  sceditor.create(textarea, {
    format: 'xhtml',
    icons: 'monocons',
    style: 'public/assets/SCEditor_wysiwyg/themes/content/default.min.css',
    value: textarea.value
  });

</script>