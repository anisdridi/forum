<?php
	class utilisateur{
		private $id_user=null;
		private $nom_user=null;
		private $prenom_user=null;
		private $email_user=null;
		private $pw_user=null;
		
		function __construct($id_user, $nom_user, $prenom_user, $email_user,$pw_user){
			$this->id_user=$id_user;
			$this->nom_user=$nom_user;
			$this->prenom=$prenom;
			$this->prenom_user=$prenom_user;
			$this->email_user=$email_user;
			$this->pw_user=$pw_user;
		}
		function getIduser(){
			return $this->id_user;
		}
		function getNom(){
			return $this->nom_user;
		}
		function getPrenom(){
			return $this->prenom_user;
		}
		function getEmail(){
			return $this->email_user;
		}
		function getPw(){
			return $this->pw_user;
		}
		function setId_user(string $id_user){
			$this->id_user=$id_user;
		}
		function setNom(string $nom_user){
			$this->nom_user=$nom_user;
		}
		function setPrenom(string $prenom_user){
			$this->prenom_user=$prenom_user;
		}
		function setEmail(string $email_user){
			$this->email_user=$email_user;
		}
		function setPw(string $pw_user){
			$this->pw_user=$pw_user;
		}
		
	}


?>