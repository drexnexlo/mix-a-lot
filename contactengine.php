<?php

$EmailFrom = "contact@mixalot.com";
$EmailTo = "kennybeyer37@gmail.com";
$Subject = "Mix-A-Lot Contact Form Submission";
$Name = Trim(stripslashes($_POST['Name']));  
$Email = Trim(stripslashes($_POST['Email']));
$Choice = Trim(stripslashes($_POST['Choice']));  
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Choice: ";
$Body .= $Choice;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>