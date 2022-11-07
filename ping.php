<?php

#Lanzar un ping a un dominio
#Creado por Triple Yei

$ip = shell_exec("ping www.example.com");
echo '<pre>' . $ip . '</pre>';

?>