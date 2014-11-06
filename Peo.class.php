<?php
class Peoples{
	private $id;
	private $name;
	private $class;
	private $phoneNum;
	private $college;
	private $team;
	
	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getClass(){
		return $this->class;
	}
	public function getPhoneNum(){
		return $this->phoneNum;
	}
	public function getCollege(){
		return $this->college;
	}
	public function getTeam(){
		return $this->team;
	}
}

?>