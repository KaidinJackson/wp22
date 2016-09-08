<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- meta http-equiv="X-Frame-Options" content="deny" -->
<title>Contact | Josh Thomas</title>
<!-- We will cover style later. Skip down to the body tag -->
<style>
<style>
html, body {
	margin: 0px;
	padding: 0px;
}
header {
	font-size: 300%;
	font-weight: bold;
	text-align: center;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	background-image: url("resources/jt.png");
	background-repeat: no-repeat;
	background-size: contain;
	background-color: rgb(173,215,208);
	padding: 50px;
}
header * {
	vertical-align: middle;
	margin-right: 10px;
	margin-left: 10px
}
header img {
	float: right;
	text-align: center
}
main {
	background: white;
	padding-top: 30px;
	padding-right: 100px;
	padding-left: 100px;
	padding-bottom: 30px;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	text-align: center;
	text-shadow: 0px 0px #F2CECE;
}
nav, footer {
	background-color: #F2CECE;
	padding: 20px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight: bold;
	font-colour: white;
	color: #FFFFFF;
	text-align: center
}
footer * {
	vertical-align: middle;
}

#form {
	border: 5px solid #FFEBEC;
	padding: 30px;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size: 100%;
	color: #383838;
	text-align: left;
	margin-top: 30px;
	margin-right: 30px;
	margin-left: 30px;
	margin-bottom: 30px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>


<body>

<header> 
<div>
<a href="https://www.facebook.com/officialjoshthomas">
  <img src="resources/fb.png" alt='FB' style="width:42px;height:42px;border:0;">
</a>
<a href="http://twitter.com/joshthomas87">
  <img src="resources/twit.png" alt="TWIT" style="width:42px;height:42px;border:0;">
</a>
<a href="http://instagram.com/joshthomas87/">
  <img src="resources/insta.png" alt="INSTA" style="width:42px;height:42px;border:0;">
</a>
</div>
  
<a href="index.php"  style="text-decoration: none;"><font color="#F2CECE">Josh Thomas</font>
</a>  
  
</header>

<nav> 

<a href="index.php" style="text-decoration:none;"><font color="white">Home</font>
</a> | 

<a href="contact.php"  style="text-decoration:underline;"><font color="white">Contact</font>
</a> | 

<a href="shop.php" style="text-decoration:none;"><font color="white">Shop</font>
</a> 

</nav>


<main>
  
<p> 

<a href="contact.php"  style="text-decoration: underline;"><font color="#ED8C8E">CONTACT</font></a> 

</p>
 
 <?php
$action = ( array_key_exists( 'action', $_REQUEST) ? $_REQUEST['action'] : "" );
if ($action=="")    /* display the contact form */
    {
    ?>
    
    <form  action="" method="POST" enctype="multipart/form-data" id="form">
   
    <input type="hidden" name="action" value="submit">
    
    First Name:<br>
    <input name="firstname" type="text" value="" size="30"/><br>
    
    Last Name:<br>
    <input name="lastname" type="text" value="" size="30"/><br>
    
    Email Address:<br>
    <input name="email" type="text" value="" size="30"/><br>
    
    Phone Number:<br>
    <input name="phone" type="text" value="" size="30"/><br>
    
    Event Date:<br>
    <input name="date" type="date" value="" size="30"/><br>
    
    Event Time:<br>
    <input name="time" type="datetime" value="" size="30"/><br>
    
    Event Location:<br>
    <input name="location" type="text" value="" size="30"/><br>
    
    Event Description:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    
    <input type="submit" value="Send email"/>
    </form>
   
    <?php
    } 
	
else  
              /* send the submitted data */
    {
		
    $firstname=$_REQUEST['firstname'];
	$lastname=$_REQUEST['lastname'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
	$date=$_REQUEST['date'];
	$time=$_REQUEST['time'];
    $location=$_REQUEST['location'];
    $message=$_REQUEST['message'];
	
    if (($firstname=="")||($lastname=="")||($email=="")||($phone=="")||($date=="")||($time=="")||($location=="")||($message==""))
     
	    {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
		
    else{
				
	    $from="From: $firstname $lastname<$email>\r\nReturn-path: $email";
       
	    $subject="Hello $firstname $lastname";
		
		$message  = ("Hey Josh youve got a new request! ,  
		Email: $email, 
		Phone Number: $phone 
		Date Of Event: $date 
		Time of Event: $time 
		Location of Event: $location 
		Additional Message: $message");
		
		mail("s3601834@student.rmit.edu.au", $subject, $message, $from);
		
		echo "Email sent!";
	    
		}
    }  
?>
 
 
</main>
<footer> &copy; Test
  <script>
        document.write(new Date().getFullYear());
      </script>
  ,
  Test </footer>
</body>
</html>
