<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Nuevo Favorito</h2>
        </div>
       <?= $this->Form->create($bookmark, ['novalidate']) ?>
        <fieldset>
            <?php
                 echo $this->element('bookmarks/fields');
            ?>
        </fieldset>
        <?= $this->Form->button('Registrar', ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
