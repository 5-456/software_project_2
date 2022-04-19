<!DOCTYPE html>
<html>

	<head>
		<meta charset='utf-8'>
		<meta http-equiv='x-ua-compatible' content='ie=edge'>
		<title>
			jquery留言表单样式 - www.dedemao.com
		</title>
		<meta name='description' content='Neat'>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' user-scalable='no'>
		<link rel='stylesheet' href='./css/style.css'>
		<link rel="stylesheet" type="text/css" href="css/date.css">
		<script src='./js/jquery.min.js'></script>
		<script src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/date.js"></script>
		<script type="text/javascript" src="js/iscroll_date.js"></script>
		
	</head>
<style>
@keyframes fadein{
    0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-webkit-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-moz-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-o-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
@-ms-keyframes fadein{
        0%{opacity: 0;
         }
    100%{
        opacity: 1;

    }
}
body{
    animation:fadein 1s linear 1;
    -webkit-animation:fadein 1s linear 1;
    -moz-animation:fadein 1s linear 1;
    -o-animation:fadein 1s linear 1;
    -ms-animation:fadein 1s linear 1;
}
</style>
	<body>
		
		<div class='main-group'>
			<div class='box-group'>
							<a href="index.html"><button style="cursor: pointer;
	background: #18354a;
	color: #F7F7F7;
	border: 0;
	padding: 10px 30px;
	font-size: 14px">
				返回
			</button></a>
				<div class='left-group'>
		
					<h3 class='title'>
                        联系我们
                    </h3>
					<div class='icon-group'>
						<ul>
							<li>
								<img src='./imgs/address.png' class='icon' alt=''>
								<p>
									南开大学津南校区
								</p>
							</li>
							<li>
								<img src='./imgs/email.png' class='icon' alt=''>
								<p>
									1982126814@qq.com
								</p>
							</li>
							<li>
								<img src='./imgs/mobile.png' class='icon' alt=''>
								<p>
									18812609234
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class='right-group'>
			        
					<h4 class='title'>
                        检测结果
                    </h4>
					<?php
								$servername = "localhost";
								$username = "root";
								$password = "12345678";
	
									$id=$_GET['identification'];
									// 创建连接
									$conn = new mysqli($servername, $username, $password);
									
									// 检测连接
									if ($conn->connect_error) {
										die("连接失败: " . $conn->connect_error);
									} 
									$query="select * from sign where id='$id' ";
									mysqli_select_db($conn,'study');//选择数据库
									$result=mysqli_query($conn,$query);
									$n=mysqli_num_rows($result);
									if($n==0){
										echo "<br>-----------------------<br>";
										echo "no result";
									    echo "<br>-----------------------<br>";
									}
									while($row=mysqli_fetch_array($result)){
										echo "<br>-----------------------<br>";
										echo "<li>id:&nbsp;".$row['id']."</li><li>time:&nbsp;".$row['time']."</li><li>result:&nbsp;".$row['result']."</li>";
									    echo "<br>-----------------------<br>";
									}
									?>
				</div>
			</div>
		</div>&lt;/);
	</body>

</html>
