<?php
function novaConexao($banco = 'projeto_login')
{
    $servidor = 'localhost:3306';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO(
            "mysql:host=$servidor;dbname=$banco",
            $usuario,
            $senha
        );
        return $conexao;
        
    } catch (PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}
