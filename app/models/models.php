<?php
    require_once __DIR__ . '/../config/database.php'; // Inclui o arquivo de configuração do banco de dados

    class Models{
        protected $conn; // Conexão com o banco de dados

        public function __construct(){
            $this -> conn = (new Database()) -> conn; // Cria uma nova instância de Database e obtém a conexão
            $this -> conn -> select_db('database_distribuidora'); // Seleciona o banco de dados 'database_distribuidora'
        }

        public function _query($sql){
            // Executa uma query SQL recebida por parâmetro
            return $this -> conn -> query($sql) == TRUE; // Retorna TRUE se a query for bem-sucedida
        }

        public function _insert($table, $data) {
            if (empty($data)) return false;

            // Colunas e placeholders
            $columns = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));

            // Prepara o statement
            $stmt = $this->conn->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
            if (!$stmt) return false;

            // Define todos os tipos como string ('s')
            $types = str_repeat('s', count($data));
            $stmt->bind_param($types, ...array_values($data));

            // Executa e retorna TRUE/FALSE
            return $stmt->execute();
        }

        public function _readAll($table){
            // Lê todos os registros de uma tabela
            $stmt = $this -> conn -> prepare("SELECT * FROM $table"); // Prepara o statement SQL
            if(!$stmt) return []; // Retorna array vazio se a preparação falhar

            $stmt -> execute(); // Executa o statement
            $result = $stmt -> get_result(); // Obtém o resultado da consulta
            return $result -> fetch_all(MYSQLI_ASSOC); // Retorna todos os registros como array associativo
        }

        public function _delete($table, $id){
            // Deleta um registro pelo id em uma tabela
            $stmt = $this -> conn -> prepare("DELETE FROM $table WHERE id = ?"); // Prepara o statement SQL
            if(!$stmt) return FALSE; // Retorna FALSE se a preparação falhar

            $stmt -> bind_param('i', $id); // Faz o bind do parâmetro id (inteiro)
            return $stmt -> execute(); // Executa o statement e retorna o resultado
        }
    }
?>