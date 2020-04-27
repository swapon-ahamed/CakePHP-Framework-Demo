<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content col-md-12 col-sm-12">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
    <h3><?= __('Users') ?></h3>
    
    <?php echo $this->Form->create(null, ['type' => 'get']) ?>
    <?php echo $this->Form->control('key', [ 'label' => '', 'placeholder' => 'Search', 'class' => 'form-control','value' => $this->request->getQuery('key')]) ?>
    <?php echo $this->Form->submit('submit',['class' => 'btn btn-success mt-3']) ?>
    <?php echo $this->Form->end() ?>

    <div class="table-responsive mt-2">
        <?php echo $this->Form->create( null,['url' => ['action' => 'deleteAll']] ); ?>
        <?php echo $this->Form->submit('Delete All', ['class' => 'btn btn-danger']) ?>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('Image') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('skills') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
               
                <?php foreach ($users as $user): ?>
                   <?php //var_dump($users); ?>
                <tr>
                    <td><?= $this->Form->checkbox('ids[]',['value' => $user->id]) ?></td>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?php echo $this->Html->image($user->image,['class' =>'img-circle','width' => '40px']) ?></td>
                    <td><?= h($user->profile['mobile']) ?></td>
                    <td>
                        <?php if($user->active): echo h('Active')?>
                        <?php else: echo  h('Inactive') ?>
                        <?php endif; ?>
                    
                    </td>
                    <td>
                        
                    <?php
                        foreach ($user->skills as $skill) {
                            echo $skill['name']." ";
                        }

                     ?>

                    </td>
                    <td><?= h($user->created) ?></td>
                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['block' =>true,'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
