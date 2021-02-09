<?php

$db_name = "loginsystem";

$table = $_POST['table'];
$email = $_POST['email'];
$field_name = $_POST['field_name'];
$field = $_POST['field'];

echo $table;
echo $email;

$connection = mysqli_connect('localhost', '', '', 'loginsystem');
if (!$connection) {
    die('Could not connect: ' . mysqli_error());
}


$sql = "UPDATE $table SET $field_name = '$field' WHERE email = '$email'";

$result = @mysql_query($connection, $sql) or die(mysqli_error());

echo '<a href="index.html">Go to Main Menu</a>';

?>