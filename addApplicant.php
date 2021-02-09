<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Applicant</title>
</head>
<body>
    
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
    
