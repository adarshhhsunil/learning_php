<?php
    $server = "localhost";
    $username ="root";
    $password ="";
    $database ="peoples";
// connection
    $conn = mysqli_connect($server,$username,$password,$database);

    if($conn->connect_error)
    {
        die("connection failed:".$conn->connect_error);
    }
        echo("connected succesfully\n");

    // $sqlCreateDB = "CREATE DATABASE peoples";
    // if  (!$conn){
    //     echo ("db not connected" .mysql.conn.error();)
    // }

    $sqlCreateTable = "CREATE TABLE rahul (
        height FLOAT(5) , 
        weight_ FLOAT(5),
        dob VARCHAR(10),)";
        if (mysqli_query($conn, $sqlCreateTable)) {
            echo "Table MyGuests created successfully";
          } else {
            echo "Error creating table: " . mysqli_error($conn);
          }
  
    $sqlInsert ="INSERT INTO rahul(12,12.4,10-11-2910)";
        
            
    ?>