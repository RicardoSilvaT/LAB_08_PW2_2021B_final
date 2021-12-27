<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket $ticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->Ticket_Code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->Ticket_Code], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->Ticket_Code)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->Ticket_Code) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ticket Code') ?></th>
            <td><?= $this->Number->format($ticket->Ticket_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Passenger DNI') ?></th>
            <td><?= $this->Number->format($ticket->Ticket_Passenger_DNI) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Travel Code') ?></th>
            <td><?= $this->Number->format($ticket->Ticket_Travel_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Sales Manager Code') ?></th>
            <td><?= $this->Number->format($ticket->Ticket_Sales_Manager_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Seating Code') ?></th>
            <td><?= $this->Number->format($ticket->Ticket_Seating_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Price') ?></th>
            <td><?= $this->Number->format($ticket->Ticket_Price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Application Date') ?></th>
            <td><?= h($ticket->Ticket_Application_Date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Date Issue') ?></th>
            <td><?= h($ticket->Ticket_Date_Issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Registration Status') ?></th>
            <td><?= $ticket->Ticket_Registration_Status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
