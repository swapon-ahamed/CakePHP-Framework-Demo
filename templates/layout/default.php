<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
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

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->fetch('meta') ?>

    <?php echo $this->Html->css('vendors/bootstrap/dist/css/bootstrap.min.css')?>
    <?php echo $this->Html->css('vendors/font-awesome/css/font-awesome.min.css')?>
    <?php echo $this->Html->css('vendors/iCheck/skins/flat/green.css')?>
    <?php echo $this->Html->css('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>
    <?php echo $this->Html->css('vendors/jqvmap/dist/jqvmap.min.css')?>
    <?php echo $this->Html->css('vendors/bootstrap-daterangepicker/daterangepicker.css')?>
    <?php echo $this->Html->css('build/css/custom.min.css')?>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php echo $this->element('sidebar'); ?>
            <?php echo $this->element('top_bar'); ?>
            <?php echo $this->element('content'); ?>
            <?php echo $this->element('footer'); ?>
        </div>
    </div>


    <!-- jQuery -->
    <?php echo $this->Html->script('vendors/jquery/dist/jquery.min.js') ?>
    <!-- Bootstrap -->
    <?php echo $this->Html->script('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>
    <!-- FastClick -->
    <?php echo $this->Html->script('vendors/fastclick/lib/fastclick.js') ?>
    <!-- NProgress -->
    <?php echo $this->Html->script('vendors/nprogress/nprogress.js') ?>
    <!-- Chart.js -->
    <?php echo $this->Html->script('vendors/Chart.js/dist/Chart.min.js') ?>
    <!-- gauge.js -->
    <?php echo $this->Html->script('vendors/gauge.js/dist/gauge.min.js') ?>
    <!-- bootstrap-progressbar -->
    <?php echo $this->Html->script('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>
    <!-- iCheck -->
    <?php echo $this->Html->script('vendors/iCheck/icheck.min.js') ?>
    <!-- Skycons -->
    <?php echo $this->Html->script('vendors/skycons/skycons.js') ?>
    <!-- Flot -->
    <?php echo $this->Html->script('vendors/Flot/jquery.flot.js') ?>
    <?php echo $this->Html->script('vendors/Flot/jquery.flot.pie.js') ?>
    <?php echo $this->Html->script('vendors/Flot/jquery.flot.time.js') ?>
    <?php echo $this->Html->script('vendors/Flot/jquery.flot.stack.js') ?>
    <?php echo $this->Html->script('vendors/Flot/jquery.flot.resize.js') ?>
    <!-- Flot plugins -->
    <?php echo $this->Html->script('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>
    <?php echo $this->Html->script('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>
    <?php echo $this->Html->script('vendors/flot.curvedlines/curvedLines.js') ?>
    <!-- DateJS -->
    <?php echo $this->Html->script('vendors/DateJS/build/date.js') ?>
    <!-- JQVMap -->
    <?php echo $this->Html->script('vendors/jqvmap/dist/jquery.vmap.js') ?>
    <?php echo $this->Html->script('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>
    <?php echo $this->Html->script('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>
    <!-- bootstrap-daterangepicker -->
    <?php echo $this->Html->script('vendors/moment/min/moment.min.js') ?>
    <?php echo $this->Html->script('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>

    <!-- Custom Theme Scripts -->
    <?php echo $this->Html->script('build/js/custom.min.js') ?>
</body>
</body>
</html>
