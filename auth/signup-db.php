<?php
// Повезивање са сервером базе података
 $bp = mysqli_connect("localhost","root","","vebispit"); 
 if (!$bp) 
 die('Јавила се грешка при повезивању са сервером базе података.');
// Нормализација улазних података
$username= mysqli_real_escape_string($bp, @$_POST['username']);
$password= mysqli_real_escape_string($bp, @$_POST['password']);
$email= mysqli_real_escape_string($bp, @$_POST['email']);
// Унос новог записа у табелу
$bytes = random_bytes(32);
$salt = bin2hex($bytes);
$saltedPW = $password . $salt;
$hashedPW = hash("sha256", $saltedPW);

$upit = "insert into User (username, password, email, salt) values ('$username', '$hashedPW', '$email', '$salt')"; 
$rezultat = mysqli_query($bp, $upit); 
if (!$rezultat) 
die(mysqli_error($bp));
// Раскид везе са сервером базе података 
mysqli_close($bp);
// Преусмеравање на формулар за унос
 die(header("Location: signup.html"));

 ?>