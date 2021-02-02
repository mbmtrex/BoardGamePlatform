<?php
session_start();
include_once("../connectToDB.php");
	
if (isset($_POST['username'])) {	
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$sql = $_db->query("SELECT * FROM users WHERE UserName='$username' AND UserPassword='$password' LIMIT 1"); // searched for the people in DB

//check person in data base
	$existCount = $sql->rowCount(); // count the row nums
	if ($existCount == 0) { // evaluate the count
		 $_SESSION['username'] = false;
		 //baraye debug !
		 $output = array('msg'=>'Hello $uname  with id $id', 'loggedin'=>'false');
	}

	if ($existCount > 0) {
	    while($row = $sql->fetch(PDO::FETCH_ASSOC)){ 
             $id = $row["UserId"];
			 $uname = $row["UserName"];
			 $pword = $row["UserPassword"];
			 //$pword = $row["password"];
			 
        }
    $_SESSION['username'] = $uname;
	$_SESSION['userpassword'] =$pword;
		$output = array("msg"=>" سلام $uname! ", "loggedin"=>"true");
    } 
	echo json_encode($output);
}
?>