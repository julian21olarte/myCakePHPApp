<div class="row">
  <div class="col-xs-12">
    <div class="page-header">
      <h2>
      Mi Lista
      <?= $this->HTML->link('Nuevo Bookmark', ['controller' => 'Bookmarks', 'action' => 'add'], ['class' => 'btn btn-warning pull-right']) ?>
      </h2>
      
    </div>

    <ul class="list-group">
    <?php foreach($bookmarks as $bookmark): ?>
      <li class="list-group-item">
        <h4 class="list-group-item-heading"> 
          <?= h($bookmark->title) ?> 
          <div class="actions pull-right">
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bookmark->id], ['class' => 'btn btn-sm btn-primary']) ?>
            <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $bookmark->id], ['confirm' => 'Estas seguro que deseas eliminar el enlace?', 'class' => 'btn btn-sm btn-danger']) ?>
          </div>
        </h4>
        <p>
          <strong class="text-info">
            <small>
              <?= $this->Html->link($bookmark->url, null, ['target' => '_blank']) ?>
            </small>
          </strong>
        </p>
        <p class="list-group-item-text">
          <?= h($bookmark->description) ?>
        </p>
      </li>
      <?php endforeach ?>
    </ul>

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