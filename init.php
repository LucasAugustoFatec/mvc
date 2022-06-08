<?php

//timezone, ou seja, o horário colocado no site, ao que parece.

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define ('BD_SERVIDOR','localhost');
define ('BD_USUARIO','id18911902_root');
define ('BD_SENHA','{\|N!=|(kc3Uyg7<');
define ('BD_BANCO','id18911902_livraria');

$conn = mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO)
or
die ('Ops! Não foi posível realizar a conexão...');

echo "A conexão foi bem sucedida. ";

?>
