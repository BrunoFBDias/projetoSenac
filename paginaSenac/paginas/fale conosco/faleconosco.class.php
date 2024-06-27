<?php
    class faleconosco{

        private $nome;
        private $uf;
        private $cidade;
        private $email;
        private $telefone;
        private $modalidade;
        private $assunto;
        private $observacao;
        private $cpf;

        public function getNome(){
            return $this->nome;
        }
        public function getUf(){
            return $this->uf;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function getemail(){
            return $this->email;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getModalidade(){
            return $this->modalidade;
        }
        public function getAssunto(){
            return $this->assunto;
        }
        public function getObservacao(){
            return $this->observacao;
        }
        public function getCpf(){
            return $this->cpf;
        }


        public function setNome($nome){
            $this->nome = $nome;
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
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function setModalidade($modalidade){
            $this->modalidade = $modalidade;
        }
        public function setAssunto($assunto){
            $this->assunto = $assunto;
        }
        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
    }
?>