<?php
include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$email = sanitize($_POST["email"]);
$password = password_check(sanitize($_POST["password"]));

$sql = "SELECT * FROM `user` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT code FROM `user` WHERE `email` = '$email';";
$result2 = mysqli_query($conn, $sql2);

$record = mysqli_fetch_assoc($result);
$hash = $record["password"];

$record2 = mysqli_fetch_assoc($result2);
$code = $record["code"];

if (empty($email) && empty($password)) {
	echo "Email and password are empty<br>";
	echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	include("./error2.php");
}else if (mysqli_num_rows($result) == 0) {
	echo "Email is unknown, you need to register first<br>";
	echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	include("./error2.php");
} else if ($code != '0') {
	echo "You still need to activate your email?<br><a href='../index.php?content=activate'>Activate here</a><br>or<br>";
	echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	include("./error2.php");
} else if (password_verify($password, $hash)) {

	echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	include("./error2.php");

	$userrole = $record["userrole"];
	session_start();

	$_SESSION["iduser"] = $record["iduser"];
	$_SESSION["firstname"] = $record["firstname"];
	$_SESSION["infix"] = $record["infix"];
	$_SESSION["lastname"] = $record["lastname"];
	$_SESSION["email"] = $record["email"];
	$_SESSION["password"] = $record["password"];
	$_SESSION["phone"] = $record["phone"];
	$_SESSION["address"] = $record["address"];
	$_SESSION["postalcode"] = $record["postalcode"];
	$_SESSION["city"] = $record["city"];
	$_SESSION["userrole"] = $record["userrole"];
	$_SESSION["date"] = $record["date"];
	$_SESSION["code"] = $record["code"];
/*
	echo 'Info<br>'
	. $email . ' - email<br>'
	. $password . ' - password<br>'
	. $hash . ' - hashed password<br>
	<br>session:<br>'
	. $_SESSION["iduser"] . ' - ID<br>'
	. $_SESSION["firstname"] . ' - firstname<br>'
	. $_SESSION["infix"] . ' - infix<br>'
	. $_SESSION["lastname"] . ' - lastname<br>'
	. $_SESSION["email"] . ' - email<br>'
	. $_SESSION["password"] . ' - password<br>'
	. $_SESSION["phone"] . ' - phone<br>'
	. $_SESSION["address"] . ' - address<br>'
	. $_SESSION["postalcode"] . ' - postalcode<br>'
	. $_SESSION["city"] . ' - city<br>'
	. $_SESSION["userrole"] . ' - userrole<br>'
	. $_SESSION["date"] . ' - date<br>'
	. $_SESSION["code"] . ' - code<br>';
*/
	switch ($userrole) {
		case 'Root':
			header("location: ../index.php?content=dashboard");
			break;
		case 'Admin':
			header("location: ../index.php?content=dashboard");
			break;
		default:
			header("location: ../index.php?content=dashboard");
			break;
	}

} else {
	echo "Password is unknown, did you forget your password?<br><a href='../index.php?content=forgot_password'>Click here to create a new password</a><br><br>";
	echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	include("./error2.php");
}
