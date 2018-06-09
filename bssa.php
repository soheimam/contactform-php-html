<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formFirstname']))
	{
		$errorMessage .= "<li>You forgot to enter a first name!</li>";
	}
	if(empty($_POST['formLastname']))
	{
		$errorMessage .= "<li>You forgot to enter a Last name!</li>";
	}
	if(empty($_POST['formEmail']))
	{
		$errorMessage .= "<li>Please enter your email</li>";
    }
    if(empty($_POST['formComments']))
	{
		$errorMessage .= "<li>Please enter your comments</li>";
	}

	if(empty($errorMessage)) 
	{
		header("Location: submit.html");
		exit;
	}
}
?>


<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form BSSA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
        <?php
        if(!empty($errorMessage)) 
        {
            echo("<p>There was an error with your form:</p>\n");
            echo("<ul>" . $errorMessage . "</ul>\n");
        } 
        ?>
        <FORM method="post" action="bssa.php">

            First Name*
            <input type="text" name="formFirstname">
            <br> Last Name*
            <input type="text" name="formLastname">
            <br> Email Address*
            <input type="text" name="formEmail">
            <br> Telephone Number
            <input type="text" name="formPhone">
            <br> Comments:
            <textarea rows="5" cols="30" name="formComments"> </textarea>
            <br>
            <br>

            <input type="submit" name="formSubmit" value="Submit">
        </FORM>


</body>

</html>