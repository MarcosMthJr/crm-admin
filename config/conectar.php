<?php

$host = '127.0.0.1';
$dbname = 'crm_clientes';
$dbuser = 'root';
$dbsenha = '1234';

$opcoes = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];

/**
 * Gera uma conexão ao banco
 * @param string $host
 * @param string $dbname
 * @param string $dbuser
 * @param string $dbsenha
 * @param array $opcoes
 * @return PDO|null
 */
if (!function_exists('getPdo')) {
    function getPdo(string $host, string $dbname, string $dbuser, string $dbsenha, array $opcoes = []) : ?PDO
    {
        $pdo = null;
        try {
            $pdo = new PDO(
                'mysql:host=' . $host . ';port=3306;dbname=' . $dbname,
                $dbuser,
                $dbsenha,
                $opcoes
            );
        } catch (PDOException $e) {
            echo $e."<br>".'Erro ao estabelecer uma conexao.<br />';
        }
        return $pdo;
    }
}

$pdo = getPdo($host, $dbname, $dbuser, $dbsenha, $opcoes);

if (empty($pdo)) {
    exit;
}

/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/