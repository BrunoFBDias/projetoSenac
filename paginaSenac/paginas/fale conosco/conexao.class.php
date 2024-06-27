<?php
    class conexao{
        public $servidor = 'localhost';
        public $user = 'root';
        public $pass = '';
        public $banco = 'senac';
        public $conn;

        public function __construct(){
            $this->conexao();
        }

        private function conexao(){
            $this->conn = new mysqli($this->servidor,$this->user,$this->pass,$this->banco);
        }

        public function cadastro($nome,$uf,$cidade,$email,$telefone,$modalidade,$assunto,$observacao,$cpf){
            $stmt = $this->conn->prepare("INSERT INTO faleconosco(nome,uf,cidade,email,telefone,modalidade,assunto,observacao,cpf)VALUES(?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('ssssisssi',$nome,$uf,$cidade,$email,$telefone,$modalidade,$assunto,$observacao,$cpf);
            $stmt->execute();

            if($stmt == true){

                echo "<script language='javascript' type='text/javascript'>
                alert('Cadastro realizado com sucesso!');
                window.location.href='faleconosco.php';
                </script>";
                return $stmt;
            }else{
                die("Falha no Cadastro");
            }
            $stmt->close();
            $this->conn->close();

        }
    }
?>