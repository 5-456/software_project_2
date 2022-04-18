<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
 
$id=$_GET['identification'];
$result=$_GET['result'];
$time=$_GET['time'];
$extra=$_GET['extra'];
echo $id;
echo $result;
echo $extra;
echo $time;
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$putin="insert into sign(id,time,result,extra) values('$id','$time','$result','$extra')";
 mysqli_select_db($conn,'study');//选择数据库
$success=mysqli_query($conn,$putin);
if($success){
echo "<script type=text/javascript>
	alert('submit succeed');
</script>";
echo "<script type=text/javascript>
	window.location.href='list.html';
</script>";
}
?>