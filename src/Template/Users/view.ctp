
<div class="well">
  <h2>  <?= $user->first_name .' '. $user->last_name ?> </h2>
  <br>

  <dl>
    <dt>Nombre</dt>
    <dd> <?=  $user->first_name ?>  </dd>
    <br>

    <dt>Apellido</dt>
    <dd><?=  $user->last_name ?></dd>
    <br>

    <dt>Correo electronico</dt>
    <dd><?=  $user->email ?></dd>
    <br>

    <dt>Habilitado</dt>
    <dd><?=  $user->active ? 'SI' : 'NO' ?></dd>
    <br>

    <dt>Creado</dt>
    <dd><?=  $user->created->nice() ?></dd>
    <br>

    <dt>Modificado</dt>
    <dd><?=  $user->modified->nice() ?></dd>
    <br>
  </dl>

</div>