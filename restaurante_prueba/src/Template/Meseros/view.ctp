<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mesero'), ['action' => 'edit', $mesero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mesero'), ['action' => 'delete', $mesero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Meseros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesero'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mesas'), ['controller' => 'Mesas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesa'), ['controller' => 'Mesas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meseros view large-9 medium-8 columns content">
    <h3><?= h($mesero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($mesero->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mesero->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($mesero->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mesero->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($mesero->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mesero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mesero->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Mesas') ?></h4>
        <?php if (!empty($mesero->mesas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Serie') ?></th>
                <th scope="col"><?= __('Puestos') ?></th>
                <th scope="col"><?= __('Posicion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Mesero Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mesero->mesas as $mesas): ?>
            <tr>
                <td><?= h($mesas->id) ?></td>
                <td><?= h($mesas->serie) ?></td>
                <td><?= h($mesas->puestos) ?></td>
                <td><?= h($mesas->posicion) ?></td>
                <td><?= h($mesas->created) ?></td>
                <td><?= h($mesas->modified) ?></td>
                <td><?= h($mesas->mesero_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Mesas', 'action' => 'view', $mesas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Mesas', 'action' => 'edit', $mesas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mesas', 'action' => 'delete', $mesas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
