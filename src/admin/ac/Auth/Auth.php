<?php 

namespace App\Admin\Auth ;

if(!isset($_SESSION)){
	session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Auth extends Connection
{
	public function set($data = array()){
		if(array_key_exists('username', $data)){
			$this->username = $data['username'];
		}
		if(array_key_exists('email', $data)){
			$this->email    = $data['email'];
		}
		if(array_key_exists('password', $data)){
			$this->password = $data['password'];
		}
		if(array_key_exists('mobile', $data)){
			$this->mobile = $data['mobile'];
		}
		if(array_key_exists('role', $data)){
			$this->role   = $data['role'];
		}

		return $this;
	}

	//insert register data into database...
	public function store(){
		try {

			$compare = $this->con->prepare("select * from register where status=1 ");
			$compare->execute();
			$results = $compare->fetchAll(PDO::PARAM_STR);

			foreach($results as $result){

				if($result['email'] == $this->email){
					$_SESSION['emailExist'] = $this->email." already Exist, Choose another email !";
					header('location:secure_login.php');
					die();
					//echo "<script>window.location='secure_login.php'</script>";
				}
				elseif($result['username'] == $this->username){
					$_SESSION['usernameExist'] = $this->username." already Exist, Choose another username !";
					header('location:secure_login.php');
					die();
					//echo "<script>window.location='secure_login.php'</script>";
				}
			}
				// else{
					$stmt = $this->con->prepare("insert into register(username, email, password, mobile, role, unique_id, created_at) values(:username, :email, :password, :mobile, :role, :unique_id, NOW() ) ");
					$stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
					$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
					$stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
					$stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
					$stmt->bindValue(':role', $this->role, PDO::PARAM_STR);
					$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
					$stmt->execute();
					if($stmt){
						$_SESSION['register'] = "Registration Successfully.";
						echo "<script>window.location='index.php'</script>";
					}
				//}
			//}

			// $stmt = $this->con->prepare("insert into register(username, email, password, mobile, role, unique_id, created_at) values(:username, :email, :password, :mobile, :role, :unique_id, NOW() ) ");
			// $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
			// $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
			// $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
			// $stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
			// $stmt->bindValue(':role', $this->role, PDO::PARAM_STR);
			// $stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			// $stmt->execute();
			// if($stmt){
			// 	$_SESSION['register'] = "Registration Successfully.";
			// 	echo "<script>window.location='index.php'</script>";
			// }
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// login 
	public function login(){
		try {

			$stmt = $this->con->prepare("select * from register where username=:username and password=:password and status=1 ");
			$stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
			$stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
			$stmt->execute();
			$stmt->rowCount();
			if($stmt > 0){
				header('location:index.php');
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function checkLogin(){
		try {

			$stmt = $this->con->prepare("select * from register where status=1");
			$stmt->bindValue(':', $this->username, PDO::PARAM_STR);
			$stmt->bindValue(':', $this->email, PDO::PARAM_STR);
			//$stmt->bindValue(':',);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
}