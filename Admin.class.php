<?php
class admin{
	private $id_ad;
	private $name;
	private $password;
	
	public function getId(){
		return $this->id_ad;
	}
	public function getName(){
		return $this->name;
	}
	public function getPassword(){
		return $this->password;
	}
}
?>