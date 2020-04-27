<!-- page content -->
<div class="right_col" role="main">

  <div class="row">
	  	<div class="col-md-12 alert alert-success">
  		 <?php echo $this->Flash->render(); ?>
  	</div>

    <?php echo $this->fetch('content') ?>
  </div>
</div>
<!-- /page content -->

