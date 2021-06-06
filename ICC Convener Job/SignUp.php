<html>
<head>
    <title>SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="style5.css">

    
</head>
<div class = "contact-form">
    <h2>Sign Up</h2>
    <form action ="/ICC Convener Job/SignUp.php" method = "post">
    <p>Set Your Full Name</p><input placeholder="Enter Your Full Name" id = "username" name = "username" type="text">
    <p>Set Your Password</p><input placeholder="Type Your Password" id = "password" name = "password" type="password" >
    <p>Enter Your Email</p><input placeholder="someone@example.com" id = "email" name = "email" type = "email">
    <button type="submit" class="button">Sign Up</button>
    </form>
</div>


<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$db = 'Job';
$conn = mysqli_connect($servername,$username,$pass,$db);
if(!$conn){
die("Sorry we failed to connect : ". mysqli_connect_error());
}

?>


<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
    

    if (!empty($username) && !empty($password) && !empty($email)){
$sql = "INSERT INTO Internship(FUllName,Email,Password) VALUES('$username' , '$email', '$password')";
$sql2 = "INSERT INTO Verify(Email,Tata,Facebook,Cisco,Uber,Linkedin) VALUES ('$email',NULL,NULL,NULL,NULL,NULL)";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);

if($result){

}
else{
echo "The Record was not inserted. Error - ".mysqli_error($conn);
}
}
else {echo "<br>";
    echo  "<p> <font color=red font face='arial' size='3pt'>Enter Valid Entries !</font> </p>";}

    }
    
    
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($username) && !empty($password) && !empty($email)){
   echo "<br><br><br><br><br>";
   
   echo "<p> <font color=white font face='arial' size='5pt'>Signed Up Successfully !</font> </p>";
   
   
}
?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($username) && !empty($password) && !empty($email)) : ?>
<a href="/ICC Convener Job/Job Seeker.php" target="_parent"><button name="button2" type="submit" class = "button2">
Proceed to Login</button></a>
<?php endif ?>
</html>