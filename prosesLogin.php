
<?php
session_start();
$data = array(
			array(
				"id"=>"1",
				"username"=>"sherli",
				"password"=>"sherli",
				"akses"=>"admin"	
			),
			array(
				"id"=>"2",
				"username"=>"sherla",
				"password"=>"scorpio19",
				"akses"=>"user"	
			)
		);
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$num = 0;
	$data_valid = 0;
	while($num < count($data)){
		if($username == $data[$num]['username'] && $password == $data[$num]['password'] ){
			$_SESSION['username'] = $username;
			$_SESSION['akses'] = $data[$num]['akses'];
			$_SESSION['id'] = $data[$num]['id'];
			$data_valid = 1;
		}
		$num++;
	}
	if ($data_valid < 1) {
		echo "Login Gagal";
	} else {
		header('location: registrasi.php');
	}
}

?>