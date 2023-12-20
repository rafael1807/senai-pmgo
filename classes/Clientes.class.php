<?php
session_start();
require_once 'crudClientes.php';
class Clientes extends Connection implements crudClientes{
    private $codigo, $nmCompleto, $dn, $telefone, $celular, $sexo, $rg, $cpf, $endereco, $email,$foto;
   
    // setters: enviam informações para os atributos

    protected function setCodigo($codigo){
        $this ->codigo = $codigo;
    }
    protected function setNmCompleto($nmCompleto){
        $this ->nmCompleto = $nmCompleto;
    }
    protected function setDn($dn){
        $this ->dn = $dn;
    }
    protected function setTelefone($telefone){
        $this ->telefone = $telefone;
    }
    protected function setCelular($celular){
        $this ->celular = $celular;
    }
    protected function setSexo($sexo){
        $this ->sexo = $sexo;
    }
    protected function setRg($rg){
        $this ->rg = $rg;
    }
    protected function setCpf($cpf){
        $this ->cpf = $cpf;
    }
    protected function setEndereco($endereco){
        $this ->endereco = $endereco;
    }
    protected function setEmail($email){
        $this ->email = $email;
    }
    protected function setFoto($foto){
        $this ->foto = $foto;
    }
    
    // getters: recebem informações para os atributos
    protected function getCodigo(){
        return $this ->codigo;
    }
    protected function getNmCompleto(){
        return $this ->nmCompleto;
    }
    protected function getDn(){
        return $this ->dn;
    }
    protected function getTelefone(){
        return $this ->telefone;
    }
    protected function getCelular(){
        return $this ->celular;
    }
    protected function getSexo(){
        return $this ->sexo ;
    }
    protected function getRg(){
        return $this ->rg;
    }
    protected function getCpf(){
        return $this ->cpf;
    }
    protected function getEndereco(){
        return $this ->endereco;
    }
    protected function getEmail(){
        return $this ->email;
    }
    protected function getFoto(){
        return $this ->foto;


    // Métodos específicos 
    public function dadosDoFormulario($nmCompleto, $dn, $telefone, $celular, $sexo, $rg, $cpf, $endereco, $email, $foto){
        $this ->setNmCompleto($nmCompleto);
        $this ->setDn($dn);
        $this ->setTelefone($telefone);
        $this ->setCelular($celular);
        $this ->setSexo($sexo);
        $this ->setRg($rg);
        $this ->setCpf($cpf);
        $this ->setEndereco($endereco);
        $this ->setEmail($email);
        $this ->setFoto($foto);         
    }
    // Métodos da Interface

    public function create(){
        $NmCompleto =  $this->getNmCompleto();
        $Dn = $this->getDn();
        $Telefone = $this->getTelefone();
        $Celular = $this->getCelular();
        $Sexo = $this->getSexo();
        $Rg = $this->getRg();
        $CPF = $this->getCpf();
        $Endereco = $this->getEndereco();
        $Email = $this->getEmail();
        $Foto = $this->getFoto();
      
        $conn = $this->connect();

        $sql = "INSERT INTO tb_clientes (`codigo`, `nmCompleto`, `dn`, `telefone`, `celular`, `sexo`, `rg`, `cpf`, `endereco`, `email`,'foto') VALUES (default,:NmCompleto,:Dn,:Telefone,:Celular,:Sexo,:Rg,:CPF,:Endereco,:Email,LOAD_FILE(:Foto)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':NmCompleto',$NmCompleto);
        $stmt->bindParam(':Dn',$Dn);
        $stmt->bindParam(':Telefone',$Telefone);
        $stmt->bindParam(':Celular',$Celular);
        $stmt->bindParam(':Sexo',$Sexo);
        $stmt->bindParam(':Rg',$Rg);
        $stmt->bindParam(':CPF',$CPF);
        $stmt->bindParam(':Endereco',$Endereco);
        $stmt->bindParam(':Email',$Email);
        $stmt->bindParam(':Foto',$Foto);
        
        if($stmt -> execute()):
            $_SESSION['sucesso'] = 'Cadastrado com sucesso!';
            $destino = header('Location: ../../public/cadastro.php');
        else:        
            $_SESSION['erro'] = 'Não Cadastrado!';
            $destino = header('Location: ../../public/cadastro.php');
        endif;

    }
    public function read(){

    }
    public function update($nmCompleto, $dn, $telefone, $celular, $sexo, $rg, $cpf, $endereco, $email, $foto,$codigo){

    }
    public function delete($codigo){

    }

}
