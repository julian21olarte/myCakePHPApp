<?php
    echo $this->Form->control('first_name', ['label' => 'Nombre']);
    echo $this->Form->control('last_name', ['label' => 'Apellido']);
    echo $this->Form->control('email', ['label' => 'Correo']);
    echo $this->Form->control('password', ['label' => 'Contraseña']);
    //echo $this->Form->control('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario'], 'label' => 'Rol']);
    //echo $this->Form->control('active', ['label' => 'Activo']);
?>