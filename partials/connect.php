<?php

$host= "localhost:8889";
$user="root";
$password="root";
$dbname="phpstore";

$connect=mysqli_connect($host, $user, $password, $dbname);

if($connect ->mysqli_error) {
    echo "No Connection";
}else{
    echo "";

    }


?>