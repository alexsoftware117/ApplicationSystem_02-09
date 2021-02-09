

<!DOCTYPE html>
<html>
<head>
	<title>Add Applicant</title>
    <link rel="stylesheet" href="file.css">
</head>
<body>
    
<?php
    
if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    
    if(empty($_POST['first_name'])){
        
        $data_missing[] = 'First Name';
        
    } else {
        
        $f_name = trim($_POST['first_name']);
        
    }
 
   
    if(empty($_POST['last_name'])){
        
        $data_missing[] = 'Last Name';
        
    } else {
        
        $l_name = trim($_POST['last_name']);

    }   
    
    if(empty($_POST['address'])){
        
        $data_missing[] = 'address';
        
    } else {
        
        $address = trim($_POST['address']);

    }   
    
    if(empty($_POST['phone'])){
        
        $data_missing[] = 'Phone';
        
    } else {
        
        $phone = trim($_POST['phone']);

    }   
    
    if(empty($_POST['email'])){
        
        $data_missing[] = 'Email';
        
    } else {
        
        $email = trim($_POST['email']);

    }   
    
    if(empty($_POST['gender'])){
        
        $data_missing[] = 'Gender';
        
    } else {
        
        $gender = trim($_POST['gender']);

    }   
    
    if(empty($_POST['age'])){
        
        $data_missing[] = 'Age';
        
    } else {
        
        $age = trim($_POST['age']);

    } 
    
    $edu_one_name = $_POST['edu_one_name'];
    $edu_one_start = $_POST['edu_one_start'];
    $edu_one_end = $_POST['edu_one_end'];
    $edu_one_name = $_POST['edu_one_degree'];
    
    $edu_two_name = $_POST['edu_two_name'];
    $edu_two_start = $_POST['edu_two_start'];
    $edu_two_end = $_POST['edu_two_end'];
    $edu_two_name = $_POST['edu_two_degree'];
    
    $job_one_name = $_POST['job_one_name'];
    $job_one_desc = $_POST['job_one_desc'];
    $job_one_start = $_POST['job_one_start'];
    $job_one_end = $_POST['job_one_end'];
    
    $job_two_name = $_POST['job_two_name'];
    $job_two_desc = $_POST['job_two_desc'];
    $job_two_start = $_POST['job_two_start'];
    $job_two_end = $_POST['job_two_end'];
    
    
    
    
    
    
    if(empty($data_missing)){
        
        require_once('includes/dbh.inc.php');
        
        // Contact
        $query = "insert into applicant (first_name, last_name, address,
        phone, email, gender, age) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($conn, $query);
        
        // Tells of mysqli_prepare problems of $stmt
        if($stmt == false) 
        {
		die("<pre>".mysqli_error($conn).PHP_EOL.$query."</pre>");
        }  
        
        // Education
        $edu_query = "insert into education (email, edu_one_name, edu_one_start, edu_one_end, edu_one_degree, edu_two_name, edu_two_start, edu_two_end, edu_two_degree) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $edu_stmt = mysqli_prepare($conn, $edu_query);
        
        // Tells of mysqli_prepare problems of $edu_stmt
        if($edu_stmt == false) 
        {
		die("<pre>".mysqli_error($conn).PHP_EOL.$query."</pre>");
        }  
       
        
        // Experience
        $job_query = "insert into experience (email, job_one_name, job_one_desc, job_one_start, job_one_end, job_two_name, job_two_desc, job_two_start, job_two_end) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $job_stmt = mysqli_prepare($conn, $job_query);
        
        // Tells of mysqli_prepare problems of $job_stmt
        if($job_stmt == false) 
        {
		die("<pre>".mysqli_error($conn).PHP_EOL.$query."</pre>");
        }  
        
        
        
        
        // i Integers
        // d Doubles
        // b Blobs
        // s Everything Else
            
        // Contact
            
        // mysqli_stmt_bind_param($stmt, "sssissi", $f_name, $l_name, 
        // $address, $phone, $email, $gender, $age);
        
        mysqli_stmt_bind_param($stmt, "sssissi", $f_name, $l_name, 
        $address, $phone, $email, $gender, $age);
        
        mysqli_stmt_execute($stmt);
        
        // Education
        
        mysqli_stmt_bind_param($edu_stmt, "sssssssss", $email, $edu_one_name, $edu_one_start, $edu_one_end, $edu_one_degree, $edu_two_name, $edu_two_start, $edu_two_end, $edu_two_degree);
        
        mysqli_stmt_execute($edu_stmt);
        
        
        // Experience
        
        mysqli_stmt_bind_param($job_stmt, "sssssssss", $email, $job_one_name, $job_one_desc, $job_one_start, $job_one_end, $job_two_name,$job_two_desc, $job_two_start, $job_two_end);
        
        mysqli_stmt_execute($job_stmt);
        
        
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            echo 'Applicant Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        } else {
            echo 'Error Occurred<br />';
            echo mysqli_error($conn);
            
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }

}
    
?>
    


<!-- <form action="<?php // echo $_SERVER['PHP_SELF']; ?>" method="post"> -->
     
<form action="http://localhost/FinalProject/ApplicantAdded.php" method="post">
    
<b>Apply here:</b>
    
<br \><br \><br \>


<p>First Name:
    <br />
    <input type="text" name="first_name" size="30" maxlength="20" value="" />
</p>

<p>Last Name:
    <br />
    <input type="text" name="last_name" size="30" maxlength="20" value="" />
</p>

<p>Street Address:
    <br />
    <input type="text" name="address" size="30" maxlength="30" value="" />
</p>
    
<p>Phone:
    <br />
    <input type="text" name="phone" size="30" maxlength="11"value="" />
</p>
   
<p>Email:
    <br />
    <input type="text" name="email" size="30" maxlength="40"value="" />
</p>
    
<p>Gender:
    <br />
    <input type="text" name="gender" size="1" maxlength="1" value="" />
</p>
    
<p>Age:
    <br />
    <input type="text" name="age" size="3" maxlength="3" value="" />
</p>
<br />
    
<b>Education Information:</b>
    
<br />
<br />
<p>First Education Name:
    <br />
    <input type="text" name="edu_one_name" size="30" maxlength="25" value="" />
</p>

<p>First Education Start (Enter like this: MM/DD/YYYY):
    <br />
    <input type="text" name="edu_one_start" size="30" maxlength="15" value="" />
</p>

<p>First Education End (Enter like this: MM/DD/YYYY):
    <br />
    <input type="text" name="edu_one_end" size="30" maxlength="15" value="" />
</p>
    
<p>First Education Degree:
    <br />
    <input type="text" name="edu_one_degree" size="30" maxlength="10" value="" />
</p>

<br />
    
<p>Second Education Name:
    <br />
    <input type="text" name="edu_two_name" size="30" maxlength="25" value="" />
</p>

<p>Second Education Start (Enter like this: MM/DD/YYYY):
    <br />
    <input type="text" name="edu_two_start" size="30" maxlength="15" value="" />
</p>

<p>Second Education End (Enter like this: MM/DD/YYYY):
    <br />
    <input type="text" name="edu_two_end" size="30" maxlength="15" value="" />
</p>
    
<p>Second Education Degree:
    <br />
    <input type="text" name="edu_two_degree" size="30" maxlength="10" value="" />
</p>
    
<br />
    
<b>Job Information:</b>   
    
<br /><br /> 
<p>First Job Name:
    <br />
    <input type="text" name="job_one_name" size="25" maxlength="25" value="" />
</p>
    
<p>First Job Description:
    <br />
    <input type="text" name="job_one_desc" size="150" maxlength="150" value="" />
</p> 

<p>First Job Start (Enter like this: MM/DD/YYYY):
    <br />
    <input type="text" name="job_one_start" size="15" maxlength="15" value="" />
</p>

<p>First Job End (Enter like this: MM/DD/YYYY):
    <br />
    <input type="text" name="job_one_end" size="15" maxlength="15" value="" />
</p>
    
<br />
    
    
<p>Second Job Name:
    <br />
    <input type="text" name="job_two_name" size="25" maxlength="25" value="" />
</p>
    
<p>Second Job Description:
    <br />
    <input type="text" name="job_two_desc" size="150" maxlength="150" value="" />
</p> 

<p>Second Job Start:
    <br />
    <input type="text" name="job_two_start" size="15" maxlength="15" value="" />
</p>

<p>Second Job End:
    <br />
    <input type="text" name="job_two_end" size="15" maxlength="15" value="" />
</p>
    
<p>
    <input type="submit" name="submit" value="Send" />
</p>
    
<br />

<a href="index.html"><button type="button">Return Home</button></a>

</form>
</body>
</html>
    
