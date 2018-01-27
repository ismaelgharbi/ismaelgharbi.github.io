<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


    if(empty($username)) {
	header("location: index.php?error=empty");
	exit();}

	if(empty($email)) {
	header("location: index.php?error=empty");
	exit();}

	if(empty($password)) {
	header("location: index.php?error=empty");
	exit();}

	$conn = mysql_connect('localhost','root','','users');
	if (!$conn) {die("connection failed:"-mysqli_connect_error());}
	$sql = "INSERT INTO users (username , email , password )
	VALUES ('$username' , '$email', '$password')";
	if (mysqli_query($conn, $sql)) {header("location: index.php?error=success");}
		else {echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

	mysqli_close($conn);
	?>