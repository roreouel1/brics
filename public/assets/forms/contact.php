<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['subject'];
$name = $_POST['name'];
$message = $_POST['message'];
$headers = 'From:'. $email .' '. $name ; // Sender's Email

// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("info@bricsafricaconsulting.com", $subject, $message, $headers);

header("Location:https://www.bricsafricaconsulting.com/?mailsent");

$session = new Session();
$session->setFlash('Your mail has been sent successfuly!', 'success');
$session->flash();

//  echo "Your mail has been sent successfuly ! Thank you for your feedback";


}
}
}
?>