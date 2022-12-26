<?php 


$con = mysqli_connect('localhost','u418887185_contact', 'EDIem5^r');

if($con){

	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'u418887185_contactdetails');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$query = "insert into userinfodata (name , email ,phone ,message)
values ('$name' , '$email' , '$phone' , '$message')";

echo "$query";

mysqli_query($con, $query);

header('location:contact.php')


 ?>