<?php

$host="localhost";
$user="root";
$password="";
$db="pdbsms";

$data=mysqli_connect($host, $user, $password, $db);

if(!$data){
    die("Connection Error!");
}
// else{
//     echo "Ok!";
// }
?>