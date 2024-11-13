<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn)
{
    echo"not connected";
}

else
{
    echo "connect";
}

//start
$id
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$Age = $_POST["Age"];

$sql = "INSERT INTO `registration`(`id`, `fullname`, `mobileno`, `email`, `gender`, `age`) VALUES ('$id','$name','$phone','$email','$gender','$Age')";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "data submited";
}
else
{
    echo "query failed...!";
}
?>