<?php
require_once 'DB.class.php';
//
// User
// DB support class for the user table.
//
class User {

	// Properties
	public $id;
	public $username;
	public $hashedPassword;
	public $email;
	public $joinDate;
	public $side;

	//Constructor is called whenever a new object is created.
	//Takes an associative array with the DB row as an argument.
	function __construct($data) {
		$this->id = (isset($data['id'])) ? $data['id'] : "";
		$this->username = stripslashes((isset($data['username'])) ? $data['username'] : "");
		$this->hashedPassword = (isset($data['password'])) ? $data['password'] : "";
		$this->email = stripslashes((isset($data['email'])) ? $data['email'] : "");
		$this->joinDate = (isset($data['join_date'])) ? $data['join_date'] : "";
		$this->side = (isset($data['side'])) ? $data['side'] : "";
	}

	public function save($isNewUser = false) {
		//create a new database object.
		$db = new DB();
		$username = mysql_real_escape_string($this->username);
		$email = mysql_real_escape_string($this->email);
		$side = mysql_real_escape_string($this->side);

		//if the user is already registered and we're
		//just updating their info.
		if(!$isNewUser) {
			//set the data array
			$data = array(
				"username" => "'$username'",
				"password" => "'$this->hashedPassword'",
				"email" => "'$email'",
				"side" => "'$side'",
			);

			//update the row in the database
			$db->update($data, 'users', 'id = '. $this->id);
		}else {
		//if the user is being registered for the first time.
			$data = array(
				"username" => "'$username'",
				"password" => "'$this->hashedPassword'",
				"email" => "'$email'",
				"join_date" => "'".date("Y-m-d H:i:s",time())."'",
				"side" => "'$side'",
			);

			$this->id = $db->insert($data, 'users');
			$this->joinDate = time();
		}

		return true;
	}

}

?>