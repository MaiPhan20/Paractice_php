<?php
require_once 'config.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die(mysqli_connect_error());

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$telephone = $_REQUEST['telephone'];

$query = "Insert into student(name,age,address,telephone) values ('$name',$age,'$address','$telephone')";


$result = mysqli_query($conn,$query);
if(!$result) die ("Failed");

echo " Successfully";

mysqli_close($conn);
require_once 'show.php';
?>