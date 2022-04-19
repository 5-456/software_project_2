<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
 
$id=$_GET['identification'];
$time=$_GET['time'];
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$putin="insert into date(id,time) values('$id','$time')";
 mysqli_select_db($conn,'study');//选择数据库
$success=mysqli_query($conn,$putin);
if($success){
echo "<script type=text/javascript>
	alert('submit succeed');
</script>";
echo "<script type=text/javascript>
	window.location.href='date.html';
</script>";
}
else{
    echo "<script type=text/javascript>
	alert('submit failed');
</script>";
echo "<script type=text/javascript>
	window.location.href='date.html';
</script>";
}
?>
