<!DOCTYPE html>
<html>
<head>
	<title>InvestMe</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/functions.js"></script>
</head>
<body>
 <form method="POST" action="signup.php">
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="text" name="password"><br>
  Email:<br>
  <input type="text" name="email">
  <input type="submit" name="valider">
 </form>

 <?php
 include 'database.php';
 $pdo = Database::connect();
 $sql = "SELECT * FROM users";
 foreach ($pdo->query($sql) as $row) {
 	echo $row['username'];
 	echo "<br>";
 	echo $row['email'];
 	echo "<br>";
 	echo $row['password'];
 	echo "<br>";
 }
 ?>
</body>
</html>
