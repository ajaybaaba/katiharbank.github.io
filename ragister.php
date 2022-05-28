<?php
$name=$_GET['n'];
$pass=$_GET['p'];
mysql_connect('localhost','root','');
mysql_select_db('ragister');
$query=mysql_query("insert into portal values('$name','$pass')");
echo"Welcome u r regis. successfully";
header('refresh:5;url=index.php');

?>
