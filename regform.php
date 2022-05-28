<?php
session_start();
$massage="";
if(count($_POST)>0){
	
	
}
?>
<?php
$name=$_GET['name'];
$fname=$_GET['fname'];
$gender=$_GET['Gender'];
$phone=$_GET['phone'];
$dob=$_GET['dob'];
$city=$_GET['city'];
$reg=$_GET['reg'];
$country=$_GET['country'];
$email=$_GET['email'];
$re_mail=$_GET['re-email'];
$pass=md5($_GET['pass']);
$re_pass=$_GET['re-pass'];

$con=mysql_connect('localhost','root',' ','test');
mysql_select_db('regform',$test);
if($email==$re_mail)
{
$query=mysql_query("insert into form values('$name','$fname','$Gender','$phone','$dob','$city','$reg','$country','$email','$pass')");// or die echo mysql_error($con);
//echo "data insrted";
	?>
<div style="background:#006E39; width:500px; height: 200px; line-height: 200px; margin-left: 400px; border: 1px solid red; font-family: verdana bodld; color: aliceblue; font-size: 30px"><center><h><i>YOUR REGISTER IS SUCESSED</i></h></div>
<?php 
	
header("refresh:5;url=logg.php");
}
else{
	
	echo"Your Mail_id is miss match";
	
}

?>