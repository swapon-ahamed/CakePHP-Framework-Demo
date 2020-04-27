  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Division Lists</h2>
        <div class="clearfix"></div>
        <div><a class="btn btn-success" href="<?php echo $this->Url->build(['controller' =>'divisions','action' => 'add']) ?>">Add New</a></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                	<?php if($this->Flash->render()){ ?>
                	<div class="alert alert-success" role="alert"><?php echo $this->Flash->render() ?></div>
              		<?php } ?>
                	<!-- <div class="alert alert-danger" role="alert"><?php //echo $this->Flash->error() ?></div> -->
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Division Code</th>
              <th>Name</th>
              <th>Create date</th>
              <th>Modified date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach ($divisions as $division) { ?>
          	
            <tr>
              <td><?php echo $division->division_bbs_code ?></td>
              <td><?php echo $division->name ?></td>
              <td><?php echo $division->created ?></td>
              <td><?php echo $division->modified ?></td>
              <td>
				<?php echo $this->Html->link(__('View'),['action' => 'view',$division->id]); ?> | 
              	<?php echo $this->Html->link(__('Edit'),['action' => 'edit',$division->id]); ?> | 
              	<?php echo $this->Form->postLink(__('Delete'),['action' => 'delete',$division->id], ['confirm' => __('Are you sure to delete # {0}?',$division->id) ]); ?></td>
            </tr>
        <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
  </div>
</div>
    </div>
  </div>

  <div class="paginator">
  	<ul class="pagination">
  		<?php echo   $this->Paginator->first('<< ' . __('first ')) ?>
  		<?php echo   $this->Paginator->prev('< ' . __('previous ')) ?>
  		<?php echo   $this->Paginator->numbers() ?>
  		<?php echo   $this->Paginator->next(__('next ') . ' >') ?>
  		<?php echo   $this->Paginator->last(__('last ') . ' >>') ?>
  	</ul>
  	<p><?php echo   $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
  </div>

