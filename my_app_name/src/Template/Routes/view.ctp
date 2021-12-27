<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Route $route
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Route'), ['action' => 'edit', $route->Rout_Code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Route'), ['action' => 'delete', $route->Rout_Code], ['confirm' => __('Are you sure you want to delete # {0}?', $route->Rout_Code)]) ?> </li>
        <li><?= $this->Html->link(__('List Routes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Route'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="routes view large-9 medium-8 columns content">
    <h3><?= h($route->Rout_Code) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rout Places Of Passage') ?></th>
            <td><?= h($route->Rout_Places_of_Passage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Code') ?></th>
            <td><?= $this->Number->format($route->Rout_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Code Direction Origin') ?></th>
            <td><?= $this->Number->format($route->Rout_Code_Direction_Origin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Code Direction Destiny') ?></th>
            <td><?= $this->Number->format($route->Rout_Code_Direction_Destiny) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Distance') ?></th>
            <td><?= $this->Number->format($route->Rout_Distance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Estimated Time') ?></th>
            <td><?= h($route->Rout_Estimated_Time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Registration Status') ?></th>
            <td><?= $route->Rout_Registration_Status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
