
<?php 
$to = "eswar.leela@gmail.com";
$domainname = $_SERVER['HTTP_HOST'];

  $subject = "Request received from $domainname";
 $message = "<b>From the following user and details.</b><hr>";
	foreach($_GET as $key=>$value){
 $message .= $key. ':' .$value.'<br>';
	}
	
 $header = "From:request@$domainname \r\n";
 $header .= "Cc:eswar.leela@gmail.com \r\n";
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";

 if(mail($to,$subject,$message,$header))
	echo 1;
	else echo 0;
?>
