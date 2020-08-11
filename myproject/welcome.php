<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
welcome
<?php
echo "<h1>Your Input:</h1>";
echo $_POST["name"];
?>
<div class="yes">
    <?php
        echo $_POST["name"];
    ?>
</div>
<?php

echo "<br>";
echo $_POST["email"];
?>
<div class="no">
    <?php
        echo $_POST["email"];
        ?>
        </div>
<?php

echo "<br>";
echo $_POST["address"];
echo "<br>";
echo $_POST["gender"];
echo "<br>";
echo $_POST["carnumberplate"];
echo "<br>";
echo $_POST["carcolor"];
?>
</body>
</html>