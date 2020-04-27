
<h3>Articles</h3>
<div class="row">
	<div class="col-md-3 border mr-2">
		<h4>Recent Post</h4>
		<ul class="list-group list-group-flush">
			<?php foreach ($articlesList as $id => $title) : ?>
			<li class="list-group-item"><a href="<?php echo $this->Url->build(['controller' => 'blogs','action' => 'view', $id]) ?>"><?php echo $title; ?></a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="col-md-8">
		
		<?php

		foreach ($articles as  $article): ?>
			<div class="row">
				<div class="col-md-12 border mb-2">
					<h5><a href="<?php echo $this->Url->build(['controller' => 'blogs','action' => 'view', $id]) ?>"><?php echo $title; ?></a></h5>
										<p>
						<?php 
						echo $this->Text->truncate( $article->details,
						    280,
						    [
						        'ellipsis' => "<a href='".$this->Url->build(['controller' => 'blogs','action' => 'view', $id]) ."'> More ...</>",
						        'exact' => false
						    ]
						);
						?>
					</p>
				</div>
			</div>

		<?php endforeach; ?>

		<nav aria-label="">
			<ul class="pagination">
				<?php echo $this->Paginator->prev('Prev') ?>
				<?php echo $this->Paginator->numbers() ?>
				<?php echo $this->Paginator->next('Next') ?>
			</ul>
		</nav>
	</div>
</div>
