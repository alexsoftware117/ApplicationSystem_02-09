<?php



$email = $_POST['email'];
echo $email;
echo '<br />';

$db_name = "loginsystem";
    
$connection = @mysqli_connect('localhost','root','','loginsystem');

if(!connection){
    die('Could not connect: ' . @mysqli_error());
}
else
{
    echo 'Connection established';
    echo '<br />';
}
// $rem_sql1 = "\nDELETE FROM '$table1' WHERE email = '".$email."' ";
// $rem_sql2 = "\nDELETE FROM '$table2' WHERE email = '".$email."' ";
// $rem_sql3 = "\nDELETE FROM '$table3' WHERE email = '".$email."' ";

$rem_sql1 = "\nDELETE FROM applicant WHERE email = '".$email."' ";
$rem_sql2 = "\nDELETE FROM education WHERE email = '".$email."' ";
$rem_sql3 = "\nDELETE FROM experience WHERE email = '".$email."' ";

if ($connection->query($rem_sql1) === TRUE){
    echo "<br /><br />Record has been deleted <br /><br />";
} else {
    echo "Problem with record deletion: ". $connection->error;
}

if ($connection->query($rem_sql2) === TRUE){
    echo "Record has been deleted <br /><br />";
} else {
    echo "Problem with record deletion: ". $connection->error;
}

if ($connection->query($rem_sql3) === TRUE){
    echo "Record has been deleted <br /><br />";
} else {
    echo "Problem with record deletion: ". $connection->error;
}



?>
<br />
<br \><br \><a href="getApplicants.php"><button type="button">Return to Applicants</button></a>
<br />
<br \><br \><a href="index.html"><button type="button">Return Home</button></a>
