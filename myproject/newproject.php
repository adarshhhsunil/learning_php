<!DOCTYPE html>
<html>
<body>
<style>
.error {color: #FF0000;}
</style>
<?php

      $server     ="localhost";
      $username   ="root";
      $password   ="";
      $database   ="footbal_db";
// connection
$conn = mysqli_connect($server,$username,$password,$database);

  if     ($conn->connect_error)
   {
       die("connection failed:".$conn->connect_error);
   }
   
   echo("connected succesfully\n");

//  variables to empty set
$nameErr = $emailErr = $placeErr = $ageErr = $genderErr ="";
$name = $email = $place = $age = $gender ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];}
    return false ;
    if (empty($_POST["email"])){
        $emailErr = "email is required";
    } else {
            $email = $_POST["email"];}
    return false ;
    if (empty($_POST["place"])) {
       $placeErr = "place is required";
    } else {
        $place = $_POST["place"];} 
     return false ;
    if (empty($_POST["gender"])) {
        $genderErr = "gender is required";
    } else {
        $gender = $_POST["gender"];}          
     return false ;


     if(isset($_POST['submit'])) {
      // ($_POST['name'])
      // ($_POST['email'])
      // ($_POST['place'])
      // ($_POST['age'])
      // ($_POST['gender'])
  

      



$sql = "INSERT INTO information (name, email, place , age , gender)
VALUES ('$name','$email','$place','$age','$gender')";
// $conn->exec($sql);

if(mysqli_query($conn, $sql)){
  echo "Records inserted successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
}
?>



            <h2> FOOTBALL REGISTRATIONS </h2>
<form action="<?php $_php_self ?>" method="post">
NAME:      <input type ="text"> <name ="name"><br>
<span class="error">* <?php echo $nameErr;?></span><br>
EMAIL:     <input type="text"> <name ="email"><br>
<span class="error">* <?php echo $emailErr;?></span><br>
PLACE:     <input type ="text"> <name ="place"><br>
<span class="error">* <?php echo $placeErr;?></span><br>
AGE:       <input type ="text"> <name ="age"><br>
<span class="error">* <?php echo $ageErr;?></span><br>
GENDER:    <input type ="radio"> <name ="gender"> <values ="female">female
           <input type ="radio"> <name ="gender"> <values ="male">male<br>
<span class="error">* <?php echo $genderErr;?></span><br>
<input name ="submit" type ="submit">
</form>
</body>
</html>



