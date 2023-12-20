<?php

require_once '../../classes/autoload.php';

$nmCompleto = filter_input(INPUT_POST,'formNmCompleto',FILTER_SANITIZE_SPECIAL_CHARS); 
$dn = filter_input(INPUT_POST,'formDn',FILTER_SANITIZE_SPECIAL_CHARS); 
$telefone = filter_input(INPUT_POST,'formTelefone',FILTER_SANITIZE_SPECIAL_CHARS);  
$celular = filter_input(INPUT_POST,'formCelular',FILTER_SANITIZE_SPECIAL_CHARS);  
$sexo = filter_input(INPUT_POST,'formSexo',FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST,'formRg',FILTER_SANITIZE_SPECIAL_CHARS);  
$cpf = filter_input(INPUT_POST,'formCpf',FILTER_SANITIZE_SPECIAL_CHARS);  
$endereco = filter_input(INPUT_POST,'formEndereco',FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_POST,'formEmail',FILTER_SANITIZE_SPECIAL_CHARS);
$foto = filter_input(INPUT_POST,'formFoto',FILTER_SANITIZE_SPECIAL_CHARS);


$newNmClientes = new Clientes();
$newNmClientes->dadosDoFormulario($nmCompleto, $dn, $telefone, $celular, $sexo, $rg, $cpf, $endereco, $email, $foto);
$newNmClientes-> create();