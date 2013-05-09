<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>

<?php
    $main = new Area('Main');
    $main->display($c);
?>


<?php $this->inc('elements/footer.php'); ?>
