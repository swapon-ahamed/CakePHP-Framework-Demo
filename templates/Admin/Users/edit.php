<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="column-responsive content col-md-12 col-sm-12">
    <div class="users form content">
        <?= $this->Form->create($user,['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Edit User') ?></legend>
            <?php
                echo $this->Form->control('username',[ 'label' =>'Username', 'class' =>'form-control']);
                echo $this->Form->control('email',[ 'label' =>'Email', 'class' =>'form-control']);
                echo $this->Form->control('profile.mobile', ['class' => 'form-control']);
                echo $this->Form->control('active',['class' => 'form-control']);
                echo $this->Form->control('image', [ 'label' =>'Image', 'type' => 'file', 'class' =>'form-control']);
                echo $this->Form->control('skills.0.name',[ 'label' => 'Skills', 'class' => 'form-control']);
                echo $this->Form->control('skills.1.name',[ 'label' => 'Skills', 'class' => 'form-control']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

