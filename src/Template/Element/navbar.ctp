<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">myCakePHPApp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php 
      if(isset($current_user)):
    ?>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Nuevo Usuario', ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link('List Bookmarks', ['controller' => 'Bookmarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('New Bookmark', ['controller' => 'Bookmarks', 'action' => 'add']) ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <?php else: ?>
    <ul class="nav navbar-nav navbar-right">
      <li><?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>

    <?php
      endif
    ?>

  </div><!-- /.container-fluid -->
</nav>