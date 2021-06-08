<div class="container">
  <div class="row">
    <?php
    use \App\Controllers\ContentController;
    require_once(dirname(__FILE__) . '/../../app/controllers/ContentController.php');
    $content = new ContentController();
    echo $content->getContentAction($_GET['goto']);
    ?>
  </div>
</div>