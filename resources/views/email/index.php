<?php

/**
 * Created by PhpStorm.
 * User: fred
 * Date: 4/12/17
 * Time: 8:52 AM
 */


 if(isset($_POST['submit']))
 {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['SUBJECT'];
     $company = $_POST['company'];
     $query = $_POST['message'];
     $email_from = $name.'<'.$email.'>';

     $to="fred.oluoch@blaqueyard.com";
     $subject="Revolution Technologies Enquiry!";
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= "From: ".$email_from."\r\n";
     $message="	   
 	  <br></p> 
 		<b>Name :</b>
		$name 	
		    
         <br></p>
 		<b>Email-Id :</b>
		$email         
       	<br></p>
 		<b>Subject :</b>
		$subject
       	<br></p>
 		<b>Company :</b>
		$company		
      	<br></p>
       		 <b>Message:</b>
		 $query       
   ";
     if(mail($to,$subject,$message,$headers))
         header("Location:./contact.php?msg=Successful Submission! Thank you for contacting us. Revolution Team");
     else
         header("Location:./contact.php?msg=Error To send Email !");
     echo "contact:fred.oluoch@blaqueyard.com";
 }
?>