<?php
class MeuSenac{
    private $nome;
    private $telefone;
    private $uf;
    private $cidade;
    private $email;
    private $senha;
    private $cpf;


    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getUf(){
        return $this->uf;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    
    
    public function getCpf(){
        return $this->cpf;
    }



    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setUf($uf){
        $this->uf = $uf;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
   
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
   
}


?>