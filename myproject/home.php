<!DOCTYPE html>
<html>
<body>
<style>
.error {color: #FF0000;}
</style>
<?php


  $server = "localhost";
  $username ="root";
  $password ="";
  $database ="cars_db";
// connection
  $conn = mysqli_connect($server,$username,$password,$database);

 if     ($conn->connect_error)
  {
      die("connection failed:".$conn->connect_error);
  }
  
  echo("connected succesfully\n");


// define variables and set to empty values
$nameErr = $emailErr = $addressErr = $genderErr = $carnumberplateErr = $carcolorErr = "";
$name = $email = $address = $gender = $carnumberplate = $carcolor = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];}
      // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        return false;
    }
    if (empty($_POST["email"])) {
        $emailErr = "email is required";
        return false;
      } else {
        $email =$_POST["email"];}
        // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
      if (empty($_POST["address"])) {
        $addressErr = "address is required";
      } else {
        $address =$_POST["address"];
      }
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
        $addressErr = "Only letters and white space allowed";
      }
      if (empty($_POST["gender"])) {
        $genderErr = "gender is required";
      } else {
        $gender =$_POST["gender"];
      }
      if (empty($_POST["carnumberplate"])) {
        $carnumberplateErr = "carnumberplate is required";
      } else {
        $carnumberplate =$_POST["carnumberplate"];
      }
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$carnumberplate)) {
        $carnumberplateErr = "Only letters and white space allowed";
      }
    if (empty($_POST["carcolor"])) {
      $carcolorErr = "carcolor is required";
    } else {
        $carcolor =$_POST["carcalor"];}
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$carcolor)) {
        $carcolorErr = "Only letters and white space allowed";

      }
}



if(isset($_POST['submit'])) {
        // ($_POST['name'])
        // ($_POST['email'])
        // ($_POST['address'])
        // ($_POST['gender'])
        // ($_POST['carnumberplate'])
        // ($_POST['carcolor'])

        



  $sql = "INSERT INTO info (name, email, address , gender , car_number_plate ,car_color)
  VALUES ('$name','$email','$address','$gender','$carnumberplate','$carcolor')";
  // $conn->exec($sql);

  if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}

?>

    <h1> CAR REGISTRATION </h1>


<form action="<?php $_php_self ?>" method="post">
Name:             <input type="text" name="name"><br>
<span class="error">* <?php echo $nameErr;?></span><br>
E-mail:           <input type="text" name="email"><br>
<span class="error">* <?php echo $emailErr;?></span><br>
Address:          <textarea name="address" rows="5" cols="40"></textarea><br>
<span class="error">* <?php echo $addressErr;?></span><br>
Gender:           <input type="radio" name="gender" value="female">Female
                  <input type="radio" name="gender" value="male">Male<br>
                  <span class="error">* <?php echo $genderErr;?></span><br>
Car number plate: <input type="text" name="carnumberplate"><br>
<span class="error">* <?php echo $carnumberplateErr;?></span><br>
Car color:        <input type="text" name="carcolor"><br>
<span class="error">* <?php echo $carcolorErr;?></span><br>
<input name="submit" type ="submit">
</form>


</body>
</html>