<?php
$serverName = "127.0.0.1";
$user = "root";
$password = "";
$conn = mysqli_connect($serverName, $user, $password,);

if ($conn) {
    echo "db connected";
} else {
    echo "somethig Wrong  ";
}
