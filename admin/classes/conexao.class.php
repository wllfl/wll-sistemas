<?php
 /*************************************************************************************************************  
 * @author William F. Leite                                                                                   *  
 * Data: 20/06/2014                                                                                           *  
 * Descrição: Classe elaborada com o objetivo de auxlilar nas operações CRUDs em diversos SGBDS, possui       *  
 * funcionalidades para construir instruções de INSERT, UPDATE E DELETE onde as mesmas podem ser executadas   *  
 * nos principais SGBDs, exemplo SQL Server, MySQL e Firebird. Instruções SELECT são recebidas integralmente  *  
 * via parâmetro.                                                                                             *  
 *************************************************************************************************************/  

/*
 * Constantes de parâmetros para configuração da conexão
 */
define('SGBD', 'postgre');
define('HOST', 'pgsql.wllsistemas.com.br');
define('DBNAME', 'wllsistemas');
define('CHARSET', 'utf8');
define('USER', 'wllsistemas');
define('PASSWORD', '011224');

class conexao {
    
    /*
     * Atributo estático de conexão
     */
    private static $pdo;

    /*
     * Escondendo o construtor da classe
     */
    private function __construct() {
        //
    }

    /*
     * Método estático para retornar uma conexão válida
     * Verifica se já existe uma instância da conexão, caso não, configura uma nova conexão
     */
    public static function getInstance() {

        if (!isset(self::$pdo)) {
            try {
                $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
                switch (SGBD) :
                    case 'mysql':
                        self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                        break;
                    case 'mssql':
                        self::$pdo = new PDO("sqlsrv:server=" . HOST . "; database=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                        break;
                    case 'postgre':
                        self::$pdo = new PDO("pgsql:host=" . HOST . "; dbname=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                        break;
                endswitch;
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                print "Erro: " . $e->getMessage();
            }
        }
        return self::$pdo;
    }

}

