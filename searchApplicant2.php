<?php

$table = $_POST['table'];
$email = $_POST['email'];


echo $table;
echo $email;

$connection = mysqli_connect('localhost', '', '', 'loginsystem');
if (!$connection) {
    die('Could not connect: ' . mysqli_error());
}

$sql = "SELECT * FROM $table WHERE email = $email";

$result = @mysqli_query($connection, $sql);

$num = mysqli_num_rows($result);

if ($num < 1) {
    echo "Not a valid entry"; ?>
    <a href='index.html'><h3>Return to main</h3></a>
    <?
    exit;
}

if ($num == 1) {
    while ($row = mysqli_fetch_array($result)) {
    
    $email = $row['email'];
        
    
    echo 'Email: ', $email;
    echo '<br>';
    echo 'First Name: ', $fname;
    
    }
}

?>



<html>
<head>
    <title>Search Applicant</title>
</head>
<body>

<form method="post" action="searchApplicant2.php" name="verify">
    

    <label for "email">Enter Email of Applicant:</label>
    <input type="text" name="email" value="" size="30" maxlength="30">
 
    <div class="submit_form" id="Submit">
        <input type="submit" value="Submit" class="button" />
    </div>
    
</form>
</body>
</html>