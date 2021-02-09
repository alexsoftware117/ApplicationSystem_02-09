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
    
    }
}

?>

<html>
<head>
    <title>Modify Applicant</title>
</head>
<body>

<form method="post" action="modifyApplicant3.php" name="verify">

    <label for "email">Enter Email of Applicant:</label>
    <input type="text" name="email" value="<?php echo $email ?>" size="30" maxlength="30">
    
    <label for "table">Enter Table Name:</label>
    <input type="text" name="table" value="<?php echo $table ?>" size="15" maxlength="15">
    
    <label for "field_name">Enter Name of Field:</label>
    <input type="text" name="field_name" value="<?php echo $field_name ?>" size="15" maxlength="15">
    
    <label for "field">Enter New Field Value:</label>
    <input type="text" name="field" value="<?php echo $field ?>" size="15" maxlength="15">
    
    <div class="submit_form" id="Submit">
        <input type="submit" value="Submit" class="button" />
    </div>
    
    
    
</form>
</body>
</html>