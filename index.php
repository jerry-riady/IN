<?

include "config.php";

// Print header
print "<h1>Send Fake E-mails</h1>";

// Show ad if turned on in config.php
if ($adOn == 1){
  print<<<HERE
  
  <script type="text/javascript"><!--
google_ad_client = "pub-$publisherID";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "$channelID";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "0033FF";
google_color_text = "000000";
google_color_url = "000000";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

HERE;
}

// Show main body
print <<<HERE

<p>This tool allows you to send fake e-mails to your friends. 
You can choose the e-mail address and name that the e-mail 
appears to come from.</p>

<center>
<img src="example.jpg" alt="Sending Fake E-mails" height="397" 
width="638"><br><br>
</center>

<p>Click on the following link to start <a href="main.php">sending 
fake e-mails</a>!</p>
			
<p>By using this tool you are agreeing to the <a href="ToS.php">Terms of 
Service</a> of our site.</p>

<hr>
            
<!-- By using this free script from SiteToolCenter.com you are agreeing 
to keep the following link active. It is against the terms of use to 
remove this link! -->

<p>Powered By Fake Emailer</a> at <a href = "http://www.sitetoolcenter.com">Webmaster Tools</a></p>
HERE;

?>
