<?php

class Database { 
 	private static $instance;
	private $db;
 
	/* Constructeur privé */
	private function __construct() {//Connection à la base de données
        try {	//Rajouter array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8') pour intégrer les caractères spéciaux (accents par ex)
            $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
        } catch(Exception $e) {
            echo 'Erreur connexion DB : '.$e->getMessage().'<br />';
			echo 'N° : '.$e->getCode();
        }
    }	
	public function __destruct() {
		self::$instance = null;
	}
	/* Singleton (une seule et unique instance PDO pour tout le script) */
	static function getInstance() {
		if(is_null(self::$instance)) {
			self::$instance = new Database;
		}
		return self::$instance;
	}
	/* Requete de retour */
	public function fetch($sql) {
		$state = $this->db->query($sql);
		if($state) return $state->fetchAll(PDO::FETCH_ASSOC);
		return false;
	}
	public function fetchClass($sql, $class) {
		$state = $this->db->query($sql);
		if($state) return $state->fetchAll(PDO::FETCH_CLASS, $class);
		return false;
	}

	
	/* Requete d'execution */
	public function exec($sql) {
		return $this->db->exec($sql);
	}
	/* Derniere ID inseree */
	public function lastInsertId() {
		return $this->db->lastInsertId();
	}
}
