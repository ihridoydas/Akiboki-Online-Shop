<html>
<body>
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from web_deve where id='$id'");
if($query1)
{
header('location:all_member.php');
}
}
?>
</body>
</html>