<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='usr'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
define('DB_NAME','pazaar');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link){
  die('could not connect:'. mysqlerror());
}

$db_selected=mysql_select_db(DB_NAME, $link);

if(!$db_selected){
  die('can\'t use '. DB_NAME .': '. mysqlerror());
}
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','root') or die(mysql_error());
 mysql_select_db('pazaar') or die(mysql_error());
 $name=$_POST['usr'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select lid from regi where usr='".$name."' and pwd='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header("location: index.php");
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>
