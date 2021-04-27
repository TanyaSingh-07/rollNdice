<?php
$name=$ _POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from ='Kanishksinghh002@gmail.com';

$email_subject ="New Form Submission";

$email_body ="User Name: $name.\n".
               "User Email: $visitor_email.\n";
               "Uesr Message: $message.\n";


$to = "Kanishksinghh002@gmail.com";

$headers ="From: $email_from \r\n";

$headers ="Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

Thank you for contacting us. We will be in touch with you very soon!!.

?>