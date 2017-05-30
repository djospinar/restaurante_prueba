<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-12">
    <h3><?= __('Meseros') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meseros as $mesero): ?>
            <tr>
                <td><?= $this->Number->format($mesero->id) ?></td>
                <td><?= h($mesero->dni) ?></td>
                <td><?= h($mesero->nombre) ?></td>
                <td><?= h($mesero->apellido) ?></td>
                <td><?= $this->Number->format($mesero->telefono) ?></td>
                <td><?= h($mesero->created) ?></td>
                <td><?= h($mesero->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mesero->id], array("class"=>"btn btn-sm btn-default")); ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesero->id], array("class"=>"btn btn-sm btn-default")); ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesero->id], array("class"=>"btn btn-sm btn-default"), ['confirm' => __('Are you sure you want to delete # {0}?', $mesero->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
          
            <?= $this->Paginator->prev('< ' . __('atras')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
          
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
