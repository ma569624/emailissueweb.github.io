<?php


 extract($_POST);

$to = 'ms569624@gmail.com ';		/*enter ur email address on which u want all mails*/
$subject = 'Contact Form';		/*Enter ur Subject */
$msg = '<html>
<head>
<title>Contact form</title>
</head>

<body>
<h2> Contact Form </h2>
<table cellspacing=\"4\" cellpadding=\"4\" border=\"1\" align=\"center\">
 
 <tr>
 <td align=\"center\">Name</td>
 <td align=\"center\">'.$name.'</td>
  </tr>
  <tr>
 <td align=\"center\">Email</td>
 <td align=\"center\">'.$email.'</td>
 </tr>
  <tr>
 <td align=\"center\">Phone</td>
 <td align=\"center\">'.$phone.'</td>
 </tr>
 
  <tr>
 <td align=\"center\">Message</td>
 <td align=\"center\">'.$message.'</td>
 </tr>
 
</table>
</body>
</html>';

// Make sure to escape quotes

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Sco Email Issue WebSite <ms569624@gmail.com>' . "\r\n";		
	/*domain name and support email enter */

if (mail($to, $subject, $msg, $headers))
{
 ?>
   <script>
 alert("Thanks for Query.  We will get in touch with you shortly");
 window.location.href="index.html" ;		/*return on page which u want*/ 
 </script>
<?php
}else{ ?>

 <script>
 alert("Message not sent, Please try again.");
 window.location.href="index.html" ;		/*return on page which u want*/ 
 </script>

<?php } ?>

