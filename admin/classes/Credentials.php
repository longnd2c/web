<?php 
session_start();
/**
 * 
 */
class Credentials
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}


	public function createAdminAccount($name, $username, $password){
		$q = $this->con->query("SELECT A_Username FROM tbladmin WHERE A_Username = '$username'");
		if ($q->num_rows > 0) {
			return ['status'=> 303, 'message'=> 'Username already exists'];
		}else{
			$password = password_hash($password, PASSWORD_BCRYPT, ["COST"=> 8]);
			$q = $this->con->query("INSERT INTO `tbladmin`(`A_Name`, `A_Username`, `A_Password`, `is_active`) VALUES ('$name','$username','$password','0')");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Admin Created Successfully'];
			}

		}
	}

	public function loginAdmin($username, $password){
		$q = $this->con->query("SELECT * FROM tbladmin WHERE A_Username = '$username' LIMIT 1");
		if ($q->num_rows > 0) {
			$row = $q->fetch_assoc();
			if (password_verify($password, $row['A_Password'])) {
				$_SESSION['admin_name'] = $row['A_Name'];
				$_SESSION['admin_id'] = $row['A_ID'];
				return ['status'=> 202, 'message'=> 'Login Successful'];
			}else{
				return ['status'=> 303, 'message'=> 'Login Fail'];
			}
		}else{
			return ['status'=> 303, 'message'=> 'Account not created yet with this Username'];
		}
	}

}

//$c = new Credentials();
//$c->createAdminAccount("Rizwan", "rizwan@gmail.com", "12345");

//PRINT_R($c->loginAdmin("rizwan@gmail.com", "12345"));

if (isset($_POST['admin_register'])) {
	extract($_POST);
	if (!empty($name) && !empty($username) && !empty($password) && !empty($cpassword)) {
		if ($password == $cpassword) {
			$c = new Credentials();
			$result = $c->createAdminAccount($name, $username, $password);
			echo json_encode($result);
			exit();
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Password mismatch']);
			exit();
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}
}

if (isset($_POST['admin_login'])) {
	extract($_POST);
	if (!empty($username) && !empty($password)) {
		$c = new Credentials();
		$result = $c->loginAdmin($username, $password);
		echo json_encode($result);
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		exit();
	}
}


?>