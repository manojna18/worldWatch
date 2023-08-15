<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'inputPassword4');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'inputEmail4');

$host = "localhost";
$dbusername = "root";
$dbpassword="";
$dbname = "login_db";

$sql = "INSERT INTO users (username, password, name, email)
values ('$username' , '$password', '$name', '$email')"

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


?>