<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Add Ticket') ?></legend>
        <?php
            echo $this->Form->control('Ticket_Passenger_DNI');
            echo $this->Form->control('Ticket_Travel_Code');
            echo $this->Form->control('Ticket_Sales_Manager_Code');
            echo $this->Form->control('Ticket_Seating_Code');
            echo $this->Form->control('Ticket_Application_Date');
            echo $this->Form->control('Ticket_Date_Issue');
            echo $this->Form->control('Ticket_Price');
            echo $this->Form->control('Ticket_Registration_Status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
