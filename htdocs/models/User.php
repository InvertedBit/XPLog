<?php

class User {

	public $id;
	
	public $name;
	
	public $password;
	
	public $email;
	
	public $error = false;

	private function writeToFields($row) {
		$this->id = $row['id'];
		$this->name = $row['name'];
		$this->password = $row['password'];
		$this->email = $row['email'];
	}
	
	public function getById($id) {
		$res = DbHelper::getInstance()->select('users', '*', array('id' => $id), null, '1');
		if($row = $res->fetch_assoc()) {
			$this->error = false;
		}else {
			$this->error = true;
		}
	}
	
	public function getByName($name) {
		$res = DbHelper::getInstance()->select('users', '*', array('name' => $name), null, '1');
		if($row = $res->fetch_assoc()) {
			$this->error = false;
		}else {
			$this->error = true;
		}
	}
	
	public static function exists($name) {
		return DbHelper::getInstance()->exists('users', array('name' => $name));
	}

	public static function auth($name, $password) {
		return DbHelper::getInstance()->exists('users', array('name' => $name, 'password' => md5($password)));
	}
	
	public function save() {
		if(User::exists($this->name)) {
			DbHelper::getInstance()->update('users', array('id' => $this->id, array('name' => $this->name, 'password' => md5($this->password), 'email' => $this->email));
		}else {
			DbHelper::getInstance()->insert('users', array('name' => $this->name, 'password' => md5($this->password), 'email' => $this->email));
		}
	}
}