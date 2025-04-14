<?php 

namespace App\Config;
use Dotenv\Dotenv;

class Config{
    private static array $env = [];

    public static function load() : void{
        $dotenv = Dotenv::createImmutable(__DIR__.'../');
        $dotenv->load();
        self::$env = $_ENV;
    }

    public static function get(string $key, $default = ''):string{
        return self::$env[$key] ?? $default;
    }
}