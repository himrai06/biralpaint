<?php include "./includes/class-autoload.inc.php"; 
  
  try{
   $contact = new page();
  
   
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $contact->submitQuery($name,$email,$mobile,$subject,$message);
    
     header("location: thankyou?status=sucess");
   
  }catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
  }



?>