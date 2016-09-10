<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- meta http-equiv="X-Frame-Options" content="deny" -->
<title>Contact | Josh Thomas</title>
<link href="styles.css" rel="stylesheet">
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
<a href="index.php"  style="text-decoration: none;"><font color="#FF9899">Josh Thomas</font>
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
    <input type="range" name="date" min="date-10" max="date+10"><br>
    
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
