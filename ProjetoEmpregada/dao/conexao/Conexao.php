<?php
abstract class Conexao {
    public static function getConnection() {
        $host = 'localhost';
        $db = 'projeto_empregada';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Ativa exceções para erros
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Define o modo de busca padrão para FETCH_ASSOC
            PDO::ATTR_EMULATE_PREPARES   => false,                  // Desativa a emulação de prepared statements
        ];

        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            return $pdo;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
?>
