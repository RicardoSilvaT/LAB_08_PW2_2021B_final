<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="company index large-9 medium-8 columns content">
    <h3><?= __('Company') ?></h3>
    <p><?= date('l jS \of F Y h:i:s A'); ?></p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company_Adress_Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company_Transport_Number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company_Mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company_Web_Site') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company_Registration_Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                <th scope="col" class="Ajax"><?=__('Ajax') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($company as $company): ?>
            <tr id="company_<?= $company->Company_id; ?>">
                <td><?= $this->Number->format($company->Company_id) ?></td>
                <td><?= h($company->Company_Name) ?></td>
                <td><?= $this->Number->format($company->Company_Adress_Code) ?></td>
                <td><?= $this->Number->format($company->Company_Transport_Number) ?></td>
                <td><?= h($company->Company_Mail) ?></td>
                <td><?= h($company->Company_Web_Site) ?></td>
                <td><?= h($company->Company_Registration_Status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $company->Company_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->Company_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->Company_id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->Company_id)]) ?>
                </td>
                <td><button onclick="eliminar(<?=$company->Company_id ?>)">Eliminar</td>
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
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
</script>
<?php use Cake\Routing\Router; ?>
<script>
    function eliminar(codigo){
        console.log(codigo);
        $.ajax({
            type: "POST",
            url: '<?= Router::url(["controller"=>"company","action"=>"eliminar"]); ?>',
            data: {id:codigo},
            beforeSend: function(xhr){
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data){
                $('#company_'+codigo).fadeOut('slow');
                $('#messages_ajax').html('<div class="message success" onclick="this.classList.add(\'hidden\')">'+data+'</div>');
            },
            dataType: 'json',
        })
    }
</script>
