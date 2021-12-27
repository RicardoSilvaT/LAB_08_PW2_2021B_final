<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Passenger_DNI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Travel_Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Sales_Manager_Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Seating_Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Application_Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Date_Issue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket_Registration_Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->Ticket_Code) ?></td>
                <td><?= $this->Number->format($ticket->Ticket_Passenger_DNI) ?></td>
                <td><?= $this->Number->format($ticket->Ticket_Travel_Code) ?></td>
                <td><?= $this->Number->format($ticket->Ticket_Sales_Manager_Code) ?></td>
                <td><?= $this->Number->format($ticket->Ticket_Seating_Code) ?></td>
                <td><?= h($ticket->Ticket_Application_Date) ?></td>
                <td><?= h($ticket->Ticket_Date_Issue) ?></td>
                <td><?= $this->Number->format($ticket->Ticket_Price) ?></td>
                <td><?= h($ticket->Ticket_Registration_Status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->Ticket_Code]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->Ticket_Code]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->Ticket_Code], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->Ticket_Code)]) ?>
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
