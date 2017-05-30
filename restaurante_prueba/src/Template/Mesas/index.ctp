<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-12">
    <h3><?= __('Mesas') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puestos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posicion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mesero_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesas as $mesa): ?>
            <tr>
                <td><?= $this->Number->format($mesa->id) ?></td>
                <td><?= h($mesa->serie) ?></td>
                <td><?= h($mesa->puestos) ?></td>
                <td><?= h($mesa->posicion) ?></td>
                <td><?= h($mesa->created) ?></td>
                <td><?= h($mesa->modified) ?></td>
                <td><?= $mesa->has('mesero') ? $this->Html->link($mesa->mesero->id, ['controller' => 'Meseros', 'action' => 'view', $mesa->mesero->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mesa->id], array("class"=>"btn btn-sm btn-default")); ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesa->id], array("class"=>"btn btn-sm btn-default")); ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesa->id], array("class"=>"btn btn-sm btn-default") , ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        <ul class="pagination">
            
            <?= $this->Paginator->prev('< ' . __('atras')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            
        </ul>
        
    </div>
</div>
