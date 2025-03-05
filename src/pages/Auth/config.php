<?php

$conn = mysqli_connect("localhost", "root","","student");
if($conn){
    echo"Database Connected";
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
?>