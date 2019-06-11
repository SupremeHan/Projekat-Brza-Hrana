<?php
// Повезивање са сервером базе података
 $bp = mysqli_connect("localhost","root","","vebispit"); 
 if (!$bp) 
 die('Јавила се грешка при повезивању са сервером базе података.');
// Нормализација улазних података
$username= mysqli_real_escape_string($bp, @$_POST['username']);
$password= mysqli_real_escape_string($bp, @$_POST['password']);

// Унос новог записа у табелу 


$upit = "Select * from User where username='$username'"; 
$rezultat = mysqli_query($bp, $upit); 
    if(mysqli_num_rows($rezultat)> 0)

        
    
if (!$rezultat) 
die(mysqli_error($bp));
// Раскид везе са сервером базе података 
mysqli_close($bp);

// Преусмеравање на формулар за унос
 die(header("Location: index.html"));
    
?>