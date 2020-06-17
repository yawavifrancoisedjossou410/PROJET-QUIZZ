<?php 

/**
* Gestion de la base de données
*/
class Db{
	
	private $host ='localhost';
	private $name='quizz';
	private $user="root";
	private $pass='';

	private $connexion;

	function __construct($host=null,$name=null,$user=null,$pass=null){
		
		if($host != null){
			$this->host = $host;
			$this->name = $name;
			$this->user = $user;
			$this->pass = $pass;
		}

		try{

			$this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->name,
				$this->user,$this->pass,array(
					PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
					PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
					));

		}catch (PDOException $e){
			echo 'Erreur : Impossible de se connecter  à la BD !';die();
		}
	}

	/* requete */

	public function query($sql , $data=array()){
		$req = $this->connexion->prepare($sql);
		$req->execute($data);

		return $req->fetchAll(PDO::FETCH_OBJ); 
	}
	public function tquery($sql , $data=array()){
		$req = $this->connexion->prepare($sql);
		$req->execute($data);

		return $req->fetchAll(PDO::FETCH_ASSOC); 
	}

	public function insert($sql , $data=array()){
		$req = $this->connexion->prepare($sql);
		$req->execute($data);
	}

	public function uniqueEmail($champ){
		$req= $this->connexion->prepare('SELECT count(*) as nbre FROM users WHERE email=:email');
		$req->execute(array('email'=>$champ));	

        $reponse = $req->fetchAll(PDO::FETCH_ASSOC);
		return $reponse[0]['nbre'];
	}

}