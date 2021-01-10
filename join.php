<?php
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$local=$_POST['local'];
	$id=$_POST['ide'];
	$phone=$_POST['phone'];
	
	$to='ankitkumar9839400@gmail.com';
	$subject='Form Submission';
	$message="Name:".$name."\n"."Phone: ".$phone."\n";
	$header="Fromm:".$email.;
	if (mail($to, $subject, $message, $header)) {
		echo "<h1> Sent successfully!"."".$name.",we will contact you shortally</h1>";
		# code...
	}
	else{
		echo "something went worng!";
	}
}
?>
