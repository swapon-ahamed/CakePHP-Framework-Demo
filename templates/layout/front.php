<?php

$cakeDescription = 'CakePHP: Demo project';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    

    <?= $this->fetch('meta') ?>

    <?php echo $this->Html->css('bootstrap.min.css')?>
    
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php echo $this->element('front/navbar'); ?>
            <?php echo $this->element('front/content'); ?>
            <?php echo $this->element('front/footer'); ?>
        </div>
    </div>


    <!-- jQuery -->
    <?php echo $this->Html->script('jquery-3.5.0.min.js') ?>
    <?php echo $this->Html->script('popper.min.js') ?>
    <?php echo $this->Html->script('bootstrap.min.js') ?>
   

    <!-- Custom Theme Scripts -->
    <?php echo $this->Html->script('build/js/custom.min.js') ?>
</body>
</body>
</html>
