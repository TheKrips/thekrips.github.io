<?php 
var_dump($_POST);



$name = $_POST["name"];
$telnumber = $_POST["email"];
 
$EmailTo = "xkrips@gmail.com";
$Subject = "ЗАЯВКА НА ТУР";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Номер телефона: ";
$Body .= $telnumber;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>
