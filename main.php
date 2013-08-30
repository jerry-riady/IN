<?

include "config.php";

// Print header
print "<h1>Send a Fake E-mail</h1>";

// Show ad if turned on in config.php
if ($adOn == 1){
  print<<<HERE
  
<script type="text/javascript"><!--
google_ad_client = "pub-$publisherID";
google_ad_width = 250;
google_ad_height = 250;
google_ad_format = "250x250_as";
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

<p>Fill in the form below to send the fake e-mail! 

<form action = "sendMail.php"
      method = "post">

  <table>
	<tr>
	  <td>Your Friend's E-mail* :</td>
	  <td><input type     = "text"
		         name     = "to"
		         tabindex = "1">
	  </td>
	</tr>
	<tr>
	  <td>Subject* :</td>
	  <td><input type     = "text"
		         name     = "subject"
				 tabindex = "2">
	  </td>
	</tr>
	<tr>
	  <td>Contents* :</td>
	  <td><textarea name     = "contents"
			        rows     = "10"
				    cols     = "75"
				    tabindex = "3"></textarea>
	  </td>
	</tr>
	<tr>
	  <td>Fake Name* :</td>
	  <td><input type     = "text"
			     name     = "name"
			     tabindex = "4">
	  </td>
	</tr>
	<tr>
	  <td>Fake Email* :</td>
	  <td><input type     = "text"
		         name     = "email"
				 tabindex = "5">
	  </td>
	</tr>
	<tr>
	  <td>Your Real Name* :</td>
	  <td><input type     = "text"
			     name     = "realName"
			     tabindex = "6">
	  </td>
	</tr>
	<tr>
	  <td>
	  <input type     = "submit"
		     value    = "Send"
		     tabindex = "7">
	  </td>
	  <td align = "right">
	    <p>* Required Field</p>
	  </td>
	</tr>
  </table>

</form>
			
<hr>
            
<!-- By using this free script from SiteToolCenter.com you are agreeing 
to keep the following link active. It is against the terms of use to 
remove this link! -->

<p>Powered By Fake Emailer</a> at <a href = "http://www.sitetoolcenter.com">Webmaster Tools</a></p>

HERE;

?>
