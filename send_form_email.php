<!DOCTYPE html>
<html lang="en">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Holland Magic Studio</title>
				<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
				<link rel="stylesheet" href="main.css">
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
				<style>
                    * {
                        text-align: center;
                    }
                </style>
</head>

<body>
				<div style="margin-bottom: 50px;" id="header-logo">					
                    <a href="index.php"><img id="logo" src="Images/HMSLogo.png" alt="logo"></a>
				</div>
	
				<div id="banner1">
                        
                        
				</div>
				
                <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "j.reijnier4@upcmail.nl";
    $email_subject = "Vraag Holland Magic Studio";
 
    function died($error) {
        // your error code can go here
        echo "Sorry, maar er zitten fouten in het formulier. ";
        echo "Ze verschijnen hier onder.<br /><br />";
        echo $error."<br /><br />";
        echo "Verander het alstublieft!<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Sorry, maar er zitten fouten in het formulier.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Het email adres is niet geldig.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Je naam is niet geldig.<br />';
  }
 
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Details:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Naam: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Bericht: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Bedankt voor uw bericht. We zullen zo snel mogelijk contact met u opnemen.


<?php
 
}
?>
               
               
                
</body>
</html>

