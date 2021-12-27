<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boleto[]|\Cake\Collection\CollectionInterface $boletos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Boleto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boletos index large-9 medium-8 columns content">
    <h3><?= __('Boletos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('lastName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firsName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boletos as $boleto): ?>
            <tr>
                <td><?= h($boleto->lastName) ?></td>
                <td><?= h($boleto->firsName) ?></td>
                <td><?= h($boleto->username) ?></td>
                <td><?= h($boleto->email) ?></td>
                <td><?= h($boleto->adress) ?></td>
                <td><?= h($boleto->adress2) ?></td>
                <td><?= $this->Number->format($boleto->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $boleto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $boleto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $boleto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boleto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
