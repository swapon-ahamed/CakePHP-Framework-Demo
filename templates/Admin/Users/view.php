<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
        <div class="users column-responsive index content col-md-12 col-sm-12">
            <h3>ID: <?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?>: </th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?>: </th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?>: </th>
                    <td><?php echo $this->Html->image($user->image,['width' =>'100px']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?>: </th>
                    <td><?= h($user->profile['mobile']) ?></td>
                </tr>

                <tr>
                    <th><?= __('Skills') ?>: </th>
                    <td><?php
                        foreach ($user->skills as $key => $skill) {
                           echo $skill['name']." ";
                        }
                     ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?>: </th>
                    <td><?= h($user->created) ?></td>
                </tr>

                <tr>
                    <th><?= __('Active') ?>: </th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>

