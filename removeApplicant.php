<html>
<head>
    <title>Remove Applicant</title>
    
</head>

<body>
    <form method = 'post' action = 'removeApplicant2.php'>
        <label for 'email'>Enter Email of Applicant:</label>
        <input type = "text" name = "email" value = "" size = "30" maxlength="30">
        
        <div class = "submit_form" id = "submit">
            <input type = "submit" value = "Submit" class = "button" />
        </div>
        
</form>
    
<a href='getApplicants.php'><button type="button">Return to Applicants</button></a>
<br />
<a href="index.html"><button type="button">Return Home</button></a>
</body>
    
</html>