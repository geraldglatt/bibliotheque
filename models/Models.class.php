<?php
abstract class Models{
    
    private static $pdo;

    private static function setBDD(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=db_livres;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    }
    // accessible depuis les classes filles mais non par un algorythme tiers
    protected function getBDD(){
        if(self::$pdo === null){
            self::setBDD();
        }
        return self::$pdo;
    }
}