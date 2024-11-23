<?php

class Configuration
{
    //connexion à la base de données en utilisant PDO : 
    const DB_HOST = 'localhost';
    const DB_NAME = 'to_do_list_01';
    const DB_USER = 'root';
    const DB_PASS = 'root';

    private string $_dsn = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME;

    //options pour gérer les erreurs : 
    //ATTR_ERRMODE : rapport d'erreurs 
    //ERRMODE_EXCEPTION : lance une exception en cas d'erreur
    //ATTR_DEFAULT_FETCH_MODE : mode de récupération par défaut
    //FETCH_ASSOC : retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public function __construct()
    {
        $this->try();
    }

    public function try()
    {
        try {
        $pdo = new PDO($this->_dsn, DB_USER, DB_PASS, $this->_options);
        } catch (PDOException $e) { //en cas d'erreur, on capture l'erreur de type PDOException
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}
