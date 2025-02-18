<!-- Menu -->
<?= $this->include('partials/sidenav') ?>
<?php if($title):?>
    <?php echo view("partials/topbar", array("title" => $title)) ?>
<?php else: ?>
    <?= $this->include('partials/topbar') ?>
<?php endif; ?>

<!-- @@include('./horizontal-nav.html') -->