<?php
      if(isset($_POST['Submit1'])){
if(!empty($_POST['Text1'])&& !empty($_POST['Text2'])&& !empty($_POST['Text3'])){
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
$to="wadishaloidambo@yahoo.com";
$subject="Client Request";
$message="name:$name"."\r\n"."phone:$phone"."\r\n"."email:$email"."\r\n"."address:$address"."\r\n"."country:$country"."\r\n"."appointment:$appt";
mail($to,$subject,$message,"from customer");
header('Location: http://www.hassanlaw.info/process_payment.html');
exit;
}
else
{
header('Location: http://www.hassanlaw.dx.am/consult.html');

}
        }
  if(isset($_POST['Submit2'])){
if(!empty($_POST['Text1'])&& !empty($_POST['Text2'])&& !empty($_POST['Text3'])){
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
$to="wadishaloidambo@yahoo.com";
$subject="Client Request";
$message="name:$name"."\r\n"."phone:$phone"."\r\n"."email:$email"."\r\n"."address:$address"."\r\n"."country:$country"."\r\n"."appointment:$appt";
mail($to,$subject,$message,"from customer");
header('Location: http://www.hassanlaw.dx.am/process_payment-ar.html');
exit;

}
else
{
header('Location:http://www.hassanlaw.dx.am/consult-ar.html');

}
        }

?>