<?php 
session_start();// 开启session
require("functions.php");// 引入函数
checkLogined();// 判断管理员是否登录
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Admin</title>
		<link rel="stylesheet" href="css/mystyle.css" type="text/css"/>
	</head>
	<body>
		<div class="admin_head">
			<h3>back-stage management</h3>
		</div>
		<div class="admin_content">
			<!--左侧列表-->
        	<div class="menu">
        		<div class="cont">
        			<div class="title">admin</div>
        			<ul class="mList">
        				<li>
	                        <h3><span>+</span>User management</h3>
	                        <dl>
	                        	<dd><a href="admin_user/addUser.php" target="mainFrame">Add user</a></dd>
	                            <dd><a href="admin_user/userList.php" target="mainFrame">User list</a></dd>
	                        </dl>
                    	</li>
        				<li>
	                        <h3><span>+</span>Product management</h3>
	                        <dl>
	                        	<dd><a href="admin_goods/addGoods.php" target="mainFrame">Add product</a></dd>
	                            <dd><a href="admin_goods/goodsList.php" target="mainFrame">Product list</a></dd>
	                        </dl>
                    	</li>
                    	<li>
	                        <h3><span>+</span>Orders management</h3>
	                        <dl>
	                            <dd><a href="admin_order/orderList.php" target="mainFrame">Orders list</a></dd>
	                        </dl>
                    	</li>
                    	<li>
	                        <h3><span>+</span>System management</h3>
	                        <dl>
	                            <dd><a href="index.php">Back to Home</a></dd>
	                        </dl>
	                        <dl>
	                            <dd><a href="loginAction.php?act=logout">Sign Out</a></dd>
	                        </dl>
                    	</li>
        			</ul>
        		</div>
        	</div>
		
			<div class="main">
	            <!--右侧内容-->
	            <div class="cont">
	                <!-- <div class="title">后台管理</div> -->
	      	 		<!-- 嵌套网页开始 -->         
	                <iframe src="adminMain.php"  frameborder="0" name="mainFrame" width="100%" height="800"></iframe>
	                <!-- 嵌套网页结束 -->   
	            </div>
        	</div>
        	
		</div>
			
		
	</body>
</html>