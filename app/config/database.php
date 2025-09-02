<?php
    class Database{
        private $host = 'localhost'; // Endereço do servidor do banco de dados.
        private $user = 'root'; // Nome de usuário do banco de dados.
        private $password = ''; // Senha do banco de dados.
        public $conn; // Conexão com banco de dados.

        public function __construct(){
            $this -> conn = new mysqli($this -> host, $this -> user, $this -> password); // Criação da conexão com o banco de dados.

            if($this -> conn -> connect_error){
                die('Falha na conexão: ' . $this -> conn -> connect_error);
            }

            $sql = 'CREATE DATABASE IF NOT EXISTS database_distribuidora'; // Comando SQL para criar o banco de dados, caso ele não exista.

            $this->conn->query($sql);

            $this->conn->select_db('database_distribuidora'); // Seleciona o banco criado
        }

        public function _close(){
            $this -> conn -> close();
        }
    }
?>