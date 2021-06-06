<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<div class="container mt-3">
<h1>Please Enter Your Roll Number and Name</h1>
<form action ="/Bootstrap/Entry2.php" method = "post">
  <div class="mb -3">
    <label for="rno" >Roll Number</label>
    <input type="number" class="form-control" id="rno"  name = "rno">

  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="String" class="form-control" id="name" name = "name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<body>
  <br>
  <h4>Current Table Is </h4>
</body>


<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$db = 'new';
$conn = mysqli_connect($servername,$username,$pass,$db);
if(!$conn){
die("Sorry we failed to connect : ". mysqli_connect_error());
}
//else{
//echo "Connection was successful<br>";
//}
?>


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $rno = $_POST['rno'];
        $name = $_POST['name'];
        //echo $name;
        //echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //<strong>Success!</strong> Your email ' . $email.' and password '. $password.' has been submitted successfully!
        //<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          //<span aria-hidden="true">×</span>
        //</button>
      //</div>';
      // Submit these to a database
    //}



//$Rno = 200100011;
//$name = "'Adityaaaa'";

$sql = "INSERT INTO details(RollNo,Name) VALUES($rno , '$name')";

//$sql = "INSERT INTO details(RollNo,Name) VALUES ($Rno , $name)";
$result = mysqli_query($conn,$sql);

if($result){
//echo "The Record has been inserted<br>";
//echo $show;
}
else{
echo "The Record was not inserted. Error - ".mysqli_error($conn);
}
}

$show = "SELECT DISTINCT * FROM details";
$natija = mysqli_query($conn,$show);
//$num = mysqli_num_rows($natija);
//echo $num;
echo "<br>";

echo "<table id=\"Details\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
<tr>
<th>Roll Number</th>
<th>Name</th>

</tr>";
while($row = mysqli_fetch_array($natija)) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['RollNo'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";

    echo "</tr>";
    echo "</tbody>";

}
echo "</table>";

//if($num>0){

//while($row = mysqli_fetch_assoc($natija)){
//    echo  $row['RollNo']."  |  ".$row['Name'];
//    echo"<br>";

//  }
//}


?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
