<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $company->Company_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $company->Company_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Company'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="company form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Edit Company') ?></legend>
        <?php
            echo $this->Form->control('Company_Name');
            echo $this->Form->control('Company_Adress_Code');
            echo $this->Form->control('Company_Transport_Number');
            echo $this->Form->control('Company_Mail');
            echo $this->Form->control('Company_Web_Site');
            echo $this->Form->control('Company_Registration_Status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
