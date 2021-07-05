<?php
include("includes/panel/connect.php");
if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];

$mobile=$_POST['mobile'];
$address=$_POST['address'];
$nid=$_POST['nid'];
$work=$_POST['work'];
$comment=$_POST['comment'];
$sub_date=date('y-m-d');





if($fname=='' or $uname=='' or $pass=='' or $email=='' or $mobile=='' or

$address=='' or $nid=='' or $work=='' or $comment==''){


echo "<script>alert('Any of the fields is empty')</script>";
exit();

}
else{

$insert_query="insert into web_deve(fname,uname,pass,email,mobile,address,nid,work,comment,sub_date) values(
'$fname','$uname','$pass','$email','$mobile','$address','$nid','$work','$comment','$sub_date')";
if(mysql_query($insert_query)){
echo "<center><h1>SuccessFully Done!<br><a href='index.php'>Home Back</a></h1></center>";
}}}
?>