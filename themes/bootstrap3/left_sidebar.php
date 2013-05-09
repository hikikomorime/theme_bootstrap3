<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>

<div class="row">
    <div class="col col-lg-4">
        <?php $left_sidebar_global = new GlobalArea('Left Sidebar'); $left_sidebar_global->display(); ?>
        <?php $left_sidebar_local = new Area('Sidebar'); $left_sidebar_local->display($c); ?>
    </div>
    
    <div class="col col-lg-8">
        <?php $main_area = new Area('Main'); $main_area->display($c); ?>
    </div>
</div>



<?php $this->inc('elements/footer.php'); ?>
