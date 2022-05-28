<?php
$email=$_GET['email'];
$pass=$_GET['pass'];
//$gender=$_GET['gender'];
mysql_connect('localhost','root','');
mysql_select_db('regform');
$query=mysql_query("select Name,email from form where email='".$email."'") or die("Unable to select data from database");
while($row=mysql_fetch_array($query))
{
	if($email==$row['email'])
	{
		echo "welcome".$row['Name'];
	}
	else
	{
		echo "Sorry Try next Time";
	}
}
?>