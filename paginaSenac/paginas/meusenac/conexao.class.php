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
        public function getConnection() {
            return $this->conn;
        }

        public function cadastro($nome,$telefone,$uf,$cidade,$email,$senha,$cpf){
            $cripto = hash("sha3-512",$senha);
            $stmt = $this->conn->prepare("INSERT INTO meusenac(nome,telefone,uf,cidade,email,senha,cpf)VALUES(?,?,?,?,?,?,?)");
            $stmt->bind_param('sisssss',$nome,$telefone,$uf,$cidade,$email,$cripto,$cpf);
            $stmt->execute();

            if($stmt == true){

                echo "<script language='javascript' type='text/javascript'>
                alert('Cadastro realizado com sucesso!');
                window.location.href='cadastro.php';
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