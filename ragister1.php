
<?PHP
session_start();
mysql_connect('localhost','root','');
mysql_select_db('ragister');
$query="select*from portal where id='".$_POST['n']."'and
pas='".$_POST['p']."'";
$query1=mysql_query($query)or die("Unable to Execute)");
$row=mysql_fetch_array($query1);
if(is_array($row))
{
if($row['pas']==$_POST['p'])
{
echo"u r loged-in";
}
else
{
echo"u r not authorised";

}

}
?>