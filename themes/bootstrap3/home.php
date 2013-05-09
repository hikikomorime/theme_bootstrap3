<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>

<div class="jumbotron">
<?php
    $a = new Area('Header'); $a->display($c);
?>
</div>

<?php
    $a = new Area('Main');
    $a->display($c);
?>


<?php $this->inc('elements/footer.php'); ?>
