<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Usuarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name', ['Nombre']) ?></th>
                        <th><?= $this->Paginator->sort('last_name', ['Apellido']) ?></th>
                        <th><?= $this->Paginator->sort('email', ['Email']) ?></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->id], ['confirm' => 'Estas seguro que deseas eliminar el usuario?', 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('Primero') ?>
                <?= $this->Paginator->prev('Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente') ?>
                <?= $this->Paginator->last('Ultimo') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} de {{count}} filas.')]) ?></p>
        </div>
    </div>
</div>