<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boleto $boleto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Boletos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="boletos form large-9 medium-8 columns content">
    <?= $this->Form->create($boleto) ?>
    <fieldset>
        <legend><?= __('Add Boleto') ?></legend>
        <?php
            echo $this->Form->control('lastName');
            echo $this->Form->control('firsName');
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('adress');
            echo $this->Form->control('adress2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
