<?php

class Customers
{
	private $serverName = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $database = 'project';
	public $con;

	//member functions

	// database connection
	public function __construct(){

		$this->con = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
		if(mysqli_connect_error()){
			echo "not connected";
			trigger_error("failed to connect" . mysqli_connect_error());
		}
		else{
			return $this->con;
		}
  }


	public function checkCredentials($post){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$age = $_POST['age'];
		$query = "INSERT INTO customers(name, email, password, age)
								VALUES('$name', '$email', '$password', '$age')";
		$sql = $this->con->query($query);
		if($sql==true){
			echo "hello";
			header("Location:admin.php?msg1=insert");
		}
		else{
			echo 'failed to insert';
		}
	}


?>
