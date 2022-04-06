<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["fn"]==""||$_POST["ln"]==""||$_POST["email"]==""||$_POST["pn"]==""||$_POST["make"]==""||$_POST["model"]==""){
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
$subject = "CUSTOM ORDER";
$name = $_POST['fn'] .' '. $_POST['ln'];
$model = $_POST['model'] ;
$make = $_POST['make'] ;
$phone = $_POST['pn'] ;
$message ="Name:".' '. $name . "\r\n";
$message .="Email".' '. $email . "\r\n";
$message .="Phone".' '. $phone . "\r\n";
$message .="Model".' '. $model . "\r\n";
$message .="Make".' '. $make;


$headers = 'From:'. $email .' '. $name; // Sender's Email

// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("info@automaxgh.com", $subject, $message, $headers);
// echo "Your mail has been sent successfuly ! Thank you for your feedback";

header("Location:https://www.automaxgh.com/co.php?orderSent");

}
}
}
?>