<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style4.css">

    
</head>
<div class = "contact-form">
    <h2>Login</h2>
    
    <form action ="/ICC Convener Job/Job Seeker.php" method = "post">
    <p>Username</p><input placeholder="Enter Your Email" id = "username" name = "username" type="email" >
    <p>Password</p><input placeholder="Type Your Password" id = "password" name = "password" type="password" >
    
    <button type="submit" class = "button">Login</button>
    </form>
    <h5> New User ? Sign Up Now</h5>
    <a href="/ICC Convener Job/SignUp.php" target="_parent"><button type="submit" class = "button2">Sign Up</button></a>

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
//else{
//echo "Connection was successful<br>";
//}
?>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];
        
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        
		if(!empty($username) && !empty($password) )
		{

			//read from database
			$query = "select * from Internship where Email = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
                    
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] == $password)
					{

						$name = $user_data['FullName'];
                        $_SESSION['name']= $name;
						header("Location: /ICC Convener Job/Intership Portal.php");
						die;
					}
				}
			}
			
			echo "<br><br>";
            echo "<p> <font color=red font face='arial' size='3pt'>Wrong Username or Password !</font> </p>";
		}else
		{   echo "<br><br>";
			echo "<p><font color=red font face='arial' size='3pt'>Enter valid credentials !</font></p>";
		}
	}

?>
</html>