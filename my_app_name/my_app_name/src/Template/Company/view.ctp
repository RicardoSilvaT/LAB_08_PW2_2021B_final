<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->Company_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->Company_id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->Company_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Company'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="company view large-9 medium-8 columns content">
    <h3><?= h($company->Company_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($company->Company_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Mail') ?></th>
            <td><?= h($company->Company_Mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Web Site') ?></th>
            <td><?= h($company->Company_Web_Site) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Registration Status') ?></th>
            <td><?= h($company->Company_Registration_Status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Id') ?></th>
            <td><?= $this->Number->format($company->Company_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Adress Code') ?></th>
            <td><?= $this->Number->format($company->Company_Adress_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Transport Number') ?></th>
            <td><?= $this->Number->format($company->Company_Transport_Number) ?></td>
        </tr>
    </table>
</div>
