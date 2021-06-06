<html>
<head>
    <title>Upload Portal</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
   
    
</head>
<?php
session_start();
$code = $_SESSION['code'];
$email = $_SESSION['username'];
if($code == 1){
  $target_dir = "tata/";}
if($code == 2){
    $target_dir = "facebook/";}
if($code == 3){
      $target_dir = "cisco/";}
if($code == 4){
        $target_dir = "uber/";}
if($code == 5){
$target_dir = "linkedin/";}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check2 = pathinfo($target_file);
$check3 = $check2['extension'];
$check4 = strtolower($check3);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  /*if($check !== false) {
    
    
    
    
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    echo "<br>";
    $uploadOk = 0;
  }*/
  if($check4 == 'pdf' || $check4 == 'docx'){$uploadOk =1;}
  else{echo "<h1>Only .pdf and .docx files are allowed</h1>";
    $uploadOk=0;}
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "<h1>Sorry, file already exists.</h1>";
  echo "<br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<h1>Sorry, your file is too large.</h1>";
  echo "<br>";
  $uploadOk = 0;
}

// Allow certain file formats
/*
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}*/


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<h1>Sorry, your file was not uploaded.</h1>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h1>The file has been uploaded.</h1>";

  } else {
    echo "<h1>Sorry, there was an error uploading your file.</h1>";
  }
}
$_SESSION['uploadOk'] = $uploadOk;
?>
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
$okay = "ok";

if($uploadOk == 1){
  
  if($code == 1){
    $query = "UPDATE Verify
    SET Tata = '$okay'
    WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);
  }
  if($code == 2){
    $query = "UPDATE Verify
    SET Facebook = '$okay'
    WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);
  }
  if($code == 3){
    $query = "UPDATE Verify
    SET Cisco = '$okay'
    WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);
  }
  if($code == 4){
    $query = "UPDATE Verify
    SET Uber = '$okay'
    WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);
  }
  if($code == 5){
    $query = "UPDATE Verify
    SET Linkedin = '$okay'
    WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);
  }
}
?>
<div>
<a href="/ICC Convener Job/Intership Portal.php" target="_parent"><button class="button3">Go back to Internship Portal</button></a>
</div>
</html>