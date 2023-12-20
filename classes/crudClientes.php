<?php

interface crudClientes{
    public function create();
    public function read();
    public function update($nmCompleto, $dn, $telefone, $celular, $sexo, $rg, $cpf, $endereco, $email, $foto,$codigo);
    public function delete($codigo);
}