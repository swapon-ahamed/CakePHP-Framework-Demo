<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $stores
 */
?>
<div class="stores index content col-md-12 col-sm-12 ">
    <?php echo   $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?php echo   __('Stores') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th><?php echo   $this->Paginator->sort('id') ?></th>
                    <th><?php echo   $this->Paginator->sort('name') ?></th>
                    <th><?php echo   $this->Paginator->sort('created') ?></th>
                    <th><?php echo   $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?php echo   __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stores as $store): ?>
                <tr>
                    <td><?php echo   $this->Number->format($store->id) ?></td>
                    <td><?php echo   h($store->name) ?></td>
                    <td><?php echo   h($store->created) ?></td>
                    <td><?php echo   h($store->modified) ?></td>
                    <td class="actions">
                        <?php echo   $this->Html->link(__('View'), ['action' => 'view', $store->id]) ?>
                        <?php echo   $this->Html->link(__('Edit'), ['action' => 'edit', $store->id]) ?>
                        <?php echo   $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
</div>
