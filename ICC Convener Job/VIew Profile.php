<html>
<head>
    <title>Internship Portal</title>
    <link rel="stylesheet" type="text/css" href="style7.css">
   
    
</head>

<?php
session_start();
$email = $_SESSION['username'];
$name = $_SESSION['name'];
$ok = $_SESSION['uploadOk'];
$code = $_SESSION['code'];
?>
<h1 class="heading"> View Your Profile </h1>;

<div class="forprofile">
<img src="profile.png">
<h1><?php echo $name; ?></h1>
<h1><?php echo $email; ?></h1>
</div>
<a href="/ICC Convener Job/Intership Portal.php" target="_parent"><button type="submit"class = "button" >Go back to Internship Portal</button></a>
<div class="rest">
<br>
<h1>Available Internships</h1>
<img src="logo1.png">
<img src="logo2.png">
<img src="logo3.png">
<img src="logo4.png">
<img src="logo5.png">
<h2>Internships applied for -</h2>
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
$q = "SELECT * From Verify
WHERE Email = '$email'";
$r2 = mysqli_query($conn,$q);
$user_data = mysqli_fetch_assoc($r2);
$var = "ok";

if($user_data['Tata'] == $var){echo "<h2>Tata</h2>";}
if($user_data['Facebook'] == $var){echo "<h2>Facebook</h2>";}
if($user_data['Cisco'] == $var){echo "<h2>Cisco</h2>";}
if($user_data['Uber'] == $var){echo "<h2>Uber</h2>";}
if($user_data['Linkedin'] == $var){echo "<h2>Linkedin</h2>";}
?>
</div>
</html>