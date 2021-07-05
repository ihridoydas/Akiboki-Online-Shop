<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from adminnote where id='$id'");
if($query1)
{
header('location:show.php');
}
}
?>
</body>
</html>