<html>
<head>
    <title>Uber Internship Portal</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
   
    
</head>
<?php
session_start();
$code = 4;
$_SESSION['code'] = $code;
$name = $_SESSION['name'];
        
        ?>
    <img width = "200px" style ="margin:0px" src = "logo4.png">
    <hr size="3" width="90%" color="#000080"> 
    <h1> Hi, <?php echo $name; ?></h1>
    <h2> Kindly upload your resume to apply for Uber Internship </h2>
    <div class = "new">
    <form action="upload.php" method="post" enctype="multipart/form-data">
  
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Resume" name="submit">
</form>

<a href="/ICC Convener Job/Intership Portal.php" target="_parent"><button class="button9">Go back to Internship Portal</button></a>
</div>
    </html>