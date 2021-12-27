<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Route $route
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Routes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="routes form large-9 medium-8 columns content">
    <?= $this->Form->create($route) ?>
    <fieldset>
        <legend><?= __('Add Route') ?></legend>
        <?php
            echo $this->Form->control('Rout_Code_Direction_Origin');
            echo $this->Form->control('Rout_Code_Direction_Destiny');
            echo $this->Form->control('Rout_Distance');
            echo $this->Form->control('Rout_Estimated_Time', ['empty' => true]);
            echo $this->Form->control('Rout_Places_of_Passage');
            echo $this->Form->control('Rout_Registration_Status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
