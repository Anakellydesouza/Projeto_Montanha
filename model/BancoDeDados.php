<?php
    class BancoDeDados{
        private $server;
        private $usuario;
        private $senha;
        private $nomeDB;
        
        public function __construct($server,$usuario,$senha,$nomeDB){
            $this->server = $server;
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->nomeDB = $nomeDB;
        }
        
        public function conectar(){
            $conexao = mysqli_connect($this->server, $this->usuario, $this->senha, $this->nomeDB);
            return $conexao;
        }
        
        public function desconectar(){
            mysql_close($this->conectar());
        }
        
        public function inserir_usuario($nome, $email, $cidade, $estado, $profissao, $tipo){
            $insere = "INSERT INTO user(nome, email, cidade, estado, profissao, tipo) VALUES ('$nome', '$email', '$cidade', '$estado', '$profissao', '$tipo')";
            if(!mysql_query($this->conecta(),$insere));
        }
        
        public function inserir_juizado($juizado_nome, $user_iduser){
            $insere = "INSERT INTO juizado(juizado_nome, user_iduser) VALUES ('$juizado_nome', '$user_iduser')";
            if(!mysql_query($this->conecta(),$insere));
        }
        
        public function select_users(){
            $pesquisa = mysqli_query($this->conectar(),"SELECT * FROM user");
            $rows = mysqli_num_rows($pesquisa);
            if(rows >= 1){
                while($reg = mysqli_fetch_array($pesquisa)){
                    $nome = $reg['user_nome'];
                    $id = $reg['iduser'];
                    
                    $selecao_status .= '<option value="'. $id.'">'. $nome .'</option>';
                }
                $this->desconetar();
                return $selecao_status;
            }
        }
    }

?>

// oiin, apareceu isso pra vc ai?