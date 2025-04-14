<?php

namespace App\Models;
use App\Config\Config;

use PDO;
use PDOException;

class Database{

    private static $instance = null;
    private $pdo;
    private $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
    ];

    private string $hostname;
    private string $username;
    private string $password;
    private string $database;

    public function __construct() {
        $this->hostname = Config::get('DB_HOST');
	    $this->username = Config::get('DB_USER');
	    $this->password = Config::get('DB_PASS');
        $this->database = Config::get('DB_NAME');

        try {
            $this->pdo = new PDO("mysql:host=$this->hostname;dbname=$this->database;charset=utf8", $this->username, $this->password, $this->option);
        } catch (PDOException $e) {
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
    
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConnection() {
        return $this->pdo;
    }
}