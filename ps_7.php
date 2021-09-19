<?php
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $mobile = $_POST['number'];
 $docname = $_POST['message'];

 $adminmail = "souvikdebnath215@gmail.com";

 $custsubject = "Conformation of Appoinment";
 $custTxt = "Thanks for Appointing Us";
 $customerHeaders = "From: souvikdebnath778@gmail.com";

 $adminsubject = "New Appoinment";
 $adminTxt = "A new Appoinment From name = ".$name."email".$email."number".$mobile."& message".$docname;

 mail($email,$custsubject,$custTxt,$customerHeaders);
 mail($adminmail,$adminsubject,$adminTxt,$customerHeaders);


?>