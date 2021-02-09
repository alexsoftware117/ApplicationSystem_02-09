<?php

    echo '<head>
    <link rel="stylesheet" href="file.css">
    </head>';

    require_once 'includes/dbh.inc.php';

    $query = "select first_name, last_name, address, phone, email, gender, age from applicant";
    
    $edu_query = "select email, edu_one_name, edu_one_start, edu_one_end, edu_one_degree, edu_two_name, edu_two_start, edu_two_end, edu_two_degree from education";

    $job_query = "select email, job_one_name, job_one_desc, job_one_start, job_one_end, job_two_name, job_two_desc, job_two_start, job_two_end from experience";
        
        
    $response = @mysqli_query($conn, $query);

    $edu_response = @mysqli_query($conn, $edu_query);

    $job_response = @mysqli_query($conn, $job_query);

    if($response){
        
        echo '<table align="left" cellspacing="5" cellpadding="8">
        
        <tr><td align="left"><b>First Name</b></td>
        <td align="left"><b>Last Name</b></td>
        <td align="left"><b>Address</b></td>
        <td align="left"><b>Phone</b></td>
        <td align="left"><b>Email</b></td>
        <td align="left"><b>Gender</b></td>
        <td align="left"><b>Age</b></td></tr>';
        
        while($row = mysqli_fetch_array($response)){
        
        echo '<tr><td align="left">'.
        $row['first_name'].'</td><td align="left">'.
        $row['last_name'].'</td><td align="left">'.
        $row['address'].'</td><td align="left">'.
        $row['phone'].'</td><td align="left">'.
        $row['email'].'</td><td align="left">'.
        $row['gender'].'</td><td align="left">'.
        $row['age'].'</td><td align="left">';
        
        echo '</tr>';
        }
        
        echo '</table>';
        
        
        
        } else {
        
        echo "Cant Connect";
        
        echo @mysqli_connect_error($conn);
        
       
        
        }

        echo '<br /><br /><br /><br /><br /><br />';
        
        if($edu_response){
            
        echo '<br /><br />';
            
        // EDUCATION TABLE BELOW
        
        echo '<table align="left" cellspacing="5" cellpadding="8">
        
        <tr><td align="left"><b>E-mail</b></td>
        <td align="left"><b>Education One</b></td>
        <td align="left"><b>Education One Start</b></td>
        <td align="left"><b>Education One End</b></td>
        <td align="left"><b>Education One Degree</b></td>
        <td align="left"><b>Education Two</b></td>
        <td align="left"><b>Education Two Start</b></td>
        <td align="left"><b>Education Two End</b></td>
        <td align="left"><b>Education Two Degree</b></td></tr>';
        
        while($row = mysqli_fetch_array($edu_response)){
        
        echo '<tr><td align="left">'.
        $row['email'].'</td><td align="left">'.
        $row['edu_one_name'].'</td><td align="left">'.
        $row['edu_one_start'].'</td><td align="left">'.
        $row['edu_one_end'].'</td><td align="left">'.
        $row['edu_one_degree'].'</td><td align="left">'.
        $row['edu_two_name'].'</td><td align="left">'.
        $row['edu_two_start'].'</td><td align="left">'.
        $row['edu_two_end'].'</td><td align="left">'.
        $row['edu_two_degree'].'</td><td align="left">';
        
        echo '</tr>';
        }
        echo '</table>';
            
        echo '<br /><br /><br /><br /><br /><br />';


        } else {
        
        echo "<br /><br />Cant Connect<br />";
        
        echo @mysqli_connect_error($conn);
        
       
        
        }
        
        if($job_response){
            
        echo '<br /><br />';
            
        // JOB TABLE BELOW
        
        echo '<table align="left" cellspacing="5" cellpadding="8">
        
        <tr><td align="left"><b>E-mail</b></td>
        <td align="left"><b>Job One Title</b></td>
        <td align="left"><b>Job One Description</b></td>
        <td align="left"><b>Job One Start</b></td>
        <td align="left"><b>Job One End</b></td>
        
        <td align="left"><b>Job Two Title</b></td>
        <td align="left"><b>Job Two Description</b></td>
        <td align="left"><b>Job Two Start</b></td>
        <td align="left"><b>Job Two End</b></td></tr>';
        
        while($row = mysqli_fetch_array($job_response)){
        
        echo '<tr><td align="left">'.
        $row['email'].'</td><td align="left">'.
        $row['job_one_name'].'</td><td align="left">'.
        $row['job_one_desc'].'</td><td align="left">'.
        $row['job_one_start'].'</td><td align="left">'.
        $row['job_one_end'].'</td><td align="left">'.
    
        $row['job_two_name'].'</td><td align="left">'.
        $row['job_two_desc'].'</td><td align="left">'.
        $row['job_two_start'].'</td><td align="left">'.
        $row['job_two_end'].'</td><td align="left">';
        
        echo '</tr>';
        }
        echo '</table>';
        
        
        } else {
        
        echo "<br /><br />Cant Connect<br />";
        
        echo @mysqli_connect_error($conn);
        
        }
        
        echo '<br /><br /><br /><br /><br /><br />';
        echo '<br \><br \><a href="removeApplicant.php"><button type="button">Remove Applicant</button></a>';
        
        
        echo '<br \><br \><a href="index.html"><button type="button">Return Home</button></a>';
        $conn->close();

?>

