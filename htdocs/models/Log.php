<?php

class Log {

	public $id;

    public $user_id;

	public $title;

	public $content;

    public $created;

    public $edited;

	public $error = false;

	private function writeToFields($row) {
		$this->id = $row['id'];
		$this->title = $row['title'];
		$this->content = $row['content'];
	}

    public function getById($id) {
		$res = DbHelper::getInstance()->select('logs', '*', array('id' => $id), null, '1');
		if($row = $res->fetch_assoc()) {
            $this->writeToFields($row);
			$this->error = false;
		}else {
			$this->error = true;
		}
	}

	public static function getByTags($tags) {
        $logs = array();
        if(!is_array($tags)) {
            $tagres = DbHelper::getInstance()->select('tags', '*', array('name' => $tags), null, '1');
            if($tag = $tagres->fetch_assoc()) {
                $assoc = DbHelper::getInstance()->select('logs_tags', '*', array('tag_id' => $tag['id']));
                while($id = $assoc->fetch_assoc()) {
                    $log = new Log();
                    $log->getById($id['log_id']);
                    $logs[] = $log;
                }
            }else {
                return null;
            }
        }else {

            // TODO: db subselect log <==> tags
        }

        return $logs;
	}

	public static function exists($name) {
		return DbHelper::getInstance()->exists('logs', array('name' => $name));
	}

	public static function auth($name, $password) {
		return DbHelper::getInstance()->exists('logs', array('name' => $name, 'password' => md5($password)));
	}

	public function save() {
		if(User::exists($this->name)) {
			DbHelper::getInstance()->update('logs', array('id' => $this->id, array('name' => $this->name, 'password' => md5($this->password), 'email' => $this->email)));
		}else {
			DbHelper::getInstance()->insert('logs', array('name' => $this->name, 'password' => md5($this->password), 'email' => $this->email));
		}
	}

    public function getComments() {

    }

    public function getTags() {

    }
}