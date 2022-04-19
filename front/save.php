<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
 
$id=$_GET['identification'];
$result=$_GET['result'];
$time=$_GET['time'];
$extra=$_GET['extra'];
?>
<script type='text/javascript'> 
			var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州" 
		   ,53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"} 		   
			function cidInfo(sId){ 
			var iSum=0 
			var info="" 
			if(!/^\d{17}(\d|x)$/i.test(sId)) return false; 
			sId=sId.replace(/x$/i,"a");
			if(aCity[parseInt(sId.substr(0,2))]==null)return false; 
			sBirthday=sId.substr(6,4)+"-"+Number(sId.substr(10,2))+"-"+Number(sId.substr(12,2)); 
			var d=new Date(sBirthday.replace(/-/g,"/")) 
			if(sBirthday!=(d.getFullYear()+"-"+ (d.getMonth()+1) + "-" + d.getDate()))return false; 
			for(var i = 17;i>=0;i --) iSum += (Math.pow(2,i) % 11) * parseInt(sId.charAt(17 - i),11) 
			if(iSum%11!=1)return false; 
			return true;
			} 
</script>
<script type=text/javascript>
		var userId;
		userId="<?php echo $id?>";
		var legal=cidInfo(userId);
		if(legal==false){
           alert("illegal id ,check first");
		   window.history.back();
		   sleep(1);
		   <?php $legal=false?>
		}
		else{
			<?php $legal=true?>
		}
</script>
<?php
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$success=false; 
$putin="insert into sign(id,time,result,extra) values('$id','$time','$result','$extra')";
if($legal){
mysqli_select_db($conn,'study');//选择数据库
$success=mysqli_query($conn,$putin);
}
if($success){
echo "<script type=text/javascript>
	alert('submit succeed');
</script>";
echo "<script type=text/javascript>
	window.history.back();
</script>";
}
?>
