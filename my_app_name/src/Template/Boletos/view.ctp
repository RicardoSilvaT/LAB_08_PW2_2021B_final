<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boleto $boleto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Boleto'), ['action' => 'edit', $boleto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Boleto'), ['action' => 'delete', $boleto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boleto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Boletos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boleto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="boletos view large-9 medium-8 columns content">
    <h3><?= h($boleto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('LastName') ?></th>
            <td><?= h($boleto->lastName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FirsName') ?></th>
            <td><?= h($boleto->firsName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($boleto->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($boleto->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= h($boleto->adress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress2') ?></th>
            <td><?= h($boleto->adress2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($boleto->id) ?></td>
        </tr>
    </table>
</div>
