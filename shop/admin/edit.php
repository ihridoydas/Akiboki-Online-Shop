<html>
<body>
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{

$admin_comment=$_POST['admin_comment'];

$query3=mysql_query("update web_deve admin_comment='$admin_comment' where id='$id'");
if($query3)
{
header('location:all_member.php');
}
}
$query1=mysql_query("select * from web_deve where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="" enctype="multipart/form-data">

Admin Comment:<input type="text" name="admin_comment" required  value="<?php echo $query2['admin_comment']; ?>" />

<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>