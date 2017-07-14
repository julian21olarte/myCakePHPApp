<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Usuario</h2>
        </div>
       <?= $this->Form->create($user, ['novalidate']) ?>
        <fieldset>
            <?php
                 $this->element('users/fiels');
            ?>
        </fieldset>
        <?= $this->Form->button('Registrar', ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
