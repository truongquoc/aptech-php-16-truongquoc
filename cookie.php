<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- COOKIE ---
 *
 * setcookie(name,value,expire,path,domain,secure,httponly);
 *
 * setcookie must be set in top of file.
 *
 * NOTE : after setcookie, should be refresh page
 */

echo "<h1>1. COOKIE</h1>";


echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$cookie_name="user";
$cookie_value="Nguyen Hai Nam";
setcookie($cookie_name,$cookie_value,time()+(24*3600));
if(isset($_COOKIE[$cookie_name]))
{
	echo "your cookie is set up<Br>";
	echo "your cookie is $_COOKIE[$cookie_name]";
	echo "<br>";
}
else
	echo "your cookie is not set up yet";
setcookie($cookie_name,"",time()-3600);
if(!isset($_COOKIE[$cookie_value]))
{
	echo "cookie is empty";
}


?>
