<!DOCTYPE html>
<html>
	<head>
		<title>Contact formulier</title>
	</head>
<body>

<?php 
if(isset($_POST['submit'])){
    $to = "florisjelle@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$phonenumber = $_POST['phonenumber']
    $subject = "Contact formulier";
    $subject2 = "Kopie van je contact formulier";
    $message = $first_name . " " . $last_name . " heeft het volgende geschreven:" . "\n\n" . $_POST['message'];
    $message2 = "Hier is een kopie van je contact aanvraag " . $first_name . "\n\n" . $_POST['message'];

    $headers = "Van:" . $from;
    $headers2 = "Van:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail verzonden! Dankjewel!" . $first_name . ", ik probeer zo spoedig mogelijk contact met je op te nemen!.";
    }
?>
	
	</body>
</html>
