<?php
    echo $this->Form->control('title', ['label' => 'Titulo']);
    echo $this->Form->control('url', ['type' => 'text', 'label' => 'Enlace']);
    echo $this->Form->control('description', ['label' => 'Descripción']);
    //echo $this->Form->control('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario'], 'label' => 'Rol']);
    //echo $this->Form->control('active', ['label' => 'Activo']);
?>