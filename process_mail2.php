<?php
class handleform {
public $nameErr="";
public $emailErr="";
public $phoneErr="";
public $rname="";
public $rphone="";
public $remail="";
public $raddress="";

public function fvalidate() 
{ // begin func
$this->rname=htmlspecialchars($_POST['Text1']);
$this->rphone=htmlspecialchars($_POST['Text2']);
$this->remail=htmlspecialchars($_POST['Text3']);
$this->raddress=htmlspecialchars($_POST['TextArea1']);
 if(isset($_POST['Submit1'])){

if(!empty($_POST['Text1'])&& !empty($_POST['Text2'])&& !filter_var($this->remail, FILTER_VALIDATE_EMAIL) === false &&!empty($_POST['Text3'])){

$name=htmlspecialchars($_POST['Text1']);
$phone=htmlspecialchars($_POST['Text2']);
$email=htmlspecialchars($_POST['Text3']);
$address=htmlspecialchars($_POST['TextArea1']);
$country=htmlspecialchars($_POST['Select1']);
$appt=htmlspecialchars($_POST['Select2']);
$to="mazen_musa2000@yahoo.com";//wadishaloidambo@yahoo.com
$subject="Client Request";
$message="name:$name"."\r\n"."phone:$phone"."\r\n"."email:$email"."\r\n"."address:$address"."\r\n"."country:$country"."\r\n"."appointment:$appt";
mail($to,$subject,$message,"from customer");
header('Location: http://www.hassanlaw.info/process_payment.html');
exit;
}
else
{
if (empty($_POST["Text1"])) {
     $this->nameErr = "Name is required";
  } 
   if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){  $this->emailErr = "  Email Not in the Correct format";}
  if (empty($_POST["Text3"])) {
     $this->emailErr = "Email is required";
  }     
  if (empty($_POST["Text2"])) {
     $this->phoneErr = "Phone is required";

  } 

}
        }
   if(isset($_POST['Submit2'])){
if(!empty($_POST['Text1'])&& !empty($_POST['Text2'])&& !filter_var($this->remail, FILTER_VALIDATE_EMAIL) === false && !empty($_POST['Text3'])){
$name=$_POST['Text1'];
$name=htmlspecialchars($name);
$phone=$_POST['Text2'];
$phone=htmlspecialchars($phone);
$email=$_POST['Text3'];
$email=htmlspecialchars($email);
$address=$_POST['TextArea1'];
$address=htmlspecialchars($address);
$country=$_POST['Select1'];
$country=htmlspecialchars($country);
$appt=$_POST['Select2'];
$appt=htmlspecialchars($appt);
$to="mazen_musa2000@yahoo.com";//wadishaloidambo@yahoo.com
$subject="Client Request";
$message="name:$name"."\r\n"."phone:$phone"."\r\n"."email:$email"."\r\n"."address:$address"."\r\n"."country:$country"."\r\n"."appointment:$appt";
mail($to,$subject,$message,"from customer");
header('Location: http://www.hassanlaw.info/process_payment-ar.html');
exit;
}
else
{
if (empty($_POST["Text1"])) {
     $this->nameErr = "الرجاء ادخال الاسم";
  }   
  if (empty($_POST["Text3"])) {
     $this->emailErr = "الرجاء ادخال البريد الالكتروني";
  } 
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){  $this->emailErr = "  الرجاء ادخال البريد الالكتروني صحيحا";}
  if (empty($_POST["Text2"])) {
     $this->phoneErr = "الرجاء ادخال رقم الهاتف";

  } 

}
        }

}// end func
}//end class

?>