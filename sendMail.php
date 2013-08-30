<?

include "config.php";

$name     = $_POST["to"];
$subject  = $_POST["subject"];
$contents = $_POST["contents"];
$name     = $_POST["name"];
$email    = $_POST["email"];
$realName = $_POST["realName"];

if ((!empty($to)) && (!empty($subject)) && (!empty($contents)) &&
    (!empty($name)) && (!empty($realName)) && (!empty($email))){

$contents = str_replace ("\'", "'", $contents);

$contents .= "\r\n\r\n" . $name . "\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n" 
	   . "This is a prank e-mail sent to you by '" . $realName . "' using the services provided by " . $siteURL;

$headers .= 'From: ' . $name . ' <' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";

mail($to , $subject, $contents, $headers);

print <<<HERE

<h1>Message Sent Successfully</h1>

<p>Your message has been successfully sent!!</p>

<ul>
  <li><a href="main.php">Send Another Prank Message</a></li>
  <li><a href="$siteURL">Back to Homepage</a></li>
</ul>

<hr>
            
<!-- By using this free script from SiteToolCenter.com you are agreeing 
to keep the following link active. It is against the terms of use to 
remove this link! -->

<p>Powered By Fake Emailer</a> at <a href = "http://www.sitetoolcenter.com">Webmaster Tools</a></p>

HERE;
}

else {

print <<<HERE

<h1>Message Not Sent</h1>

<p>The message was not sent as there was an error which was either 
due to the fact that you did not fill in the form correctly or 
there was a problem with our script.</p>

<p>Please <a href="main.php">go back</a> and try again.</p>

<hr>
            
<!-- By using this free script from SiteToolCenter.com you are agreeing 
to keep the following link active. It is against the terms of use to 
remove this link! -->

<p>Powered By Fake Emailer</a> at <a href = "http://www.sitetoolcenter.com">Webmaster Tools</a></p>

HERE;

}

?>
