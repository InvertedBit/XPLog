<?php
class DbHelper {
	static function getInstance() {
		if(!isset(DbHelper::$instance)) {
			DbHelper::$instance = new DbHelper();
		}
		return DbHelper::$instance;
	}
	
	private static $instance;
	
	private $db;
	
	private function DbHelper() {
		$config = ConfigHelper::getConfig();
		$this->init($config['db']['conn']['host'], $config['db']['conn']['user'], $config['db']['conn']['password'], $config['db']['conn']['dbname']);
	}
	
	public function init($host, $db, $user, $pw) {
		$this->db = new Mysqli($host, $db, $user, $pw);
	}
	
	public function insert($table, $values) {
		$query = 'INSERT INTO `'.$table.'` ';
		$keys = '(';
		$vals = 'VALUES (';
		foreach($values as $key => $val) {
			$keys .= '`'.$key.'`,';
			$vals .= '\''.$val.'\',';
		}
		$keys = substr($keys,0,strlen($keys)-1).') ';
		$vals = substr($vals,0,strlen($vals)-1).');';
		$query .= $keys.$vals;
		return $this->db->query($query);
	}
	
	public function update($table, $where, $data) {
		$query = 'UPDATE `'.$table.'` SET ';
		foreach($data as $key => $val) {
			$query .= '`'.$key.'` = \''.$val.'\',';
		}
		$query = substr($query,0,strlen($query)-1);
		$query .= ' WHERE';
		foreach($where as $key => $val) {
			$query .= ' `'.$key.'` = \''.$val.'\' AND';
		}
		$query = substr($query,0,strlen($query)-4);
		$query .= ';';
	}

    public function exists($table, $conds) {
        $condstring = '';
        foreach($conds as $key => $val) {
            $condstring .= ' `'.$key.'` = \''.$val.'\' AND';
        }
        $condstring = substr($condstring, 0, strlen($condstring)-4);
        $query = 'SELECT EXISTS(SELECT 1 FROM `'.$table.'` WHERE'.$condstring.');';
        $res = $this->db->query($query);
        $exists = $res->fetch_array();
        if($exists[0] == '1')
            return true;
        else
            return false;
    }

	public function select($table, $keys, $conds = null, $order = null, $limit = null) {
		$keystring = '';
		if(is_array($keys)) {
			foreach($keys as $key) {
				$keystring .= $key.',';
			}
			$keystring = substring($keystring, 0, strlen($keystring)-1);
		}else {
			$keystring = '*';
		}
		
		$query = 'SELECT '.$keystring.' FROM `'.$table.'`';
        //TODO: implement subselect
		if(isset($conds)) {
			$condstring = '';
			foreach($conds as $key => $val) {
				$condstring .= '`'.$key.'` = \''.$val.'\' AND';
			}
			$condstring = substr($condstring,0,strlen($condstring)-4);
			$query .= 'WHERE '.$condstring;
		}
		if(isset($order)) {
		
		}
		if(isset($limit)) {
			if(is_array($limit)) {
				$query .= ' LIMIT '.$limit['from'].','.$limit['to'];
			}else {
				$query .= ' LIMIT '.$limit;
			}
		}
		$query .= ';';
				
		$res = $this->db->query($query);
		$rows = array();
		while($row = $res->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
	
	public function getError() {
		return $this->db->error;
	}
}