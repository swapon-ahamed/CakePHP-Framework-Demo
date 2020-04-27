<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<div class="row col-md-12 col-sm-12">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?php echo   __('Actions') ?></h4>
            <?php echo   $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id], ['class' => 'side-nav-item']) ?>
            <?php echo   $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id), 'class' => 'side-nav-item']) ?>
            <?php echo   $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?php echo   $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80 col-md-12 col-sm-12">
        <div class="stores view content">
            <h3><?php echo   h($store->name) ?></h3>
            <table class="table table-striped jambo_table bulk_action">
                <tr>
                    <th><?php echo   __('Name') ?></th>
                    <td><?php echo   h($store->name) ?></td>
                </tr>
                <tr>
                    <th><?php echo   __('Id') ?></th>
                    <td><?php echo   $this->Number->format($store->id) ?></td>
                </tr>
                <tr>
                    <th><?php echo   __('Created') ?></th>
                    <td><?php echo   h($store->created) ?></td>
                </tr>
                <tr>
                    <th><?php echo   __('Modified') ?></th>
                    <td><?php echo   h($store->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?php echo   __('Title') ?></strong>
                <blockquote>
                    <?php echo   $this->Text->autoParagraph(h($store->title)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
