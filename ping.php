<?php

#Obtener IP privada del equipo
#Creado por Triple Yei

$ip = shell_exec("ping www.example.com");
echo '<pre>' . $ip . '</pre>';

?>