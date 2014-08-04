<?php

class Tag {

	public $id;
	
	public $name;
	
	public $color;

	public $error = false;

	private function writeToFields($row) {
		$this->id = $row['id'];
		$this->name = $row['name'];
        $this->color = $row['coloer'];
	}

    private function getLogsFromDb() {
        //TODO: get logs
    }
	
	public function getById($id) {
		$res = DbHelper::getInstance()->select('tags', '*', array('id' => $id), null, '1');
		if($row = $res->fetch_assoc()) {
			$this->error = false;
		}else {
			$this->error = true;
		}
	}
	
	public function getByName($name) {
		$res = DbHelper::getInstance()->select('tags', '*', array('name' => $name), null, '1');
		if($row = $res->fetch_assoc()) {
			$this->error = false;
		}else {
			$this->error = true;
		}
	}
	
	public static function exists($name) {
		return DbHelper::getInstance()->exists('tags', array('name' => $name));
	}

	public static function auth($name, $password) {
		return DbHelper::getInstance()->exists('tags', array('name' => $name, 'password' => md5($password)));
	}
	
	public function save() {
		if(User::exists($this->name)) {
			DbHelper::getInstance()->update('tags', array('id' => $this->id, array('name' => $this->name, 'password' => md5($this->password), 'email' => $this->email)));
		}else {
			DbHelper::getInstance()->insert('tags', array('name' => $this->name, 'password' => md5($this->password), 'email' => $this->email));
		}
	}
}