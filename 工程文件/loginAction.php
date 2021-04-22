<?php
header("Content-Type: text/html;charset=utf-8");
//执行商品信息的增、删、改的操作
session_start();
//一、导入配置文件和函数库文件
	require("dbconfig.php");
	require("functions.php");


//二、获取action参数的值，并做对应的操作
	
	switch($_GET["act"]){
		case "login": //登录
			//1. 获取信息
			$username 		= trim($_POST["username"]);
			$password 		= trim($_POST["password"]);
			$md5Pwd 		= md5($password);// 密码加密
			//2. 验证
			if(empty($username)){
				alertMes('User name must have a value', 'login.php');
			}
			if(empty($password)){
				alertMes('Password must have a value', 'login.php');
			}
			
			
			// 判断用户是否存在
			$sql_count = "select * from user where username = '{$username}' and password='{$md5Pwd}'";
			$result = mysql_query($sql_count);
			
			
			if($result && mysql_num_rows($result)>0){
				$item = mysql_fetch_assoc($result);
				if($username == 'admin'){
					$_SESSION['adminName'] = $item['username'];
					$_SESSION['adminId'] = $item['id'];
					$_SESSION['userName'] = $item['username'];
					$_SESSION['userId'] = $item['id'];
					alertMes('Login successful', 'index.php');
				}else{
					$_SESSION['userName'] = $item['username'];
					$_SESSION['userId'] = $item['id'];
					alertMes('Login successful', 'index.php');
				}
			}else{
				alertMes('Login failed, login again', 'login.php');
			}

			
			break;
		
		case "logout": //退出
			//获取要删除的id号并拼装删除sql，执行
			$_SESSION['adminName'] = '';
			$_SESSION['adminId'] = '';
			$_SESSION['userName'] = '';
			$_SESSION['userId'] = '';
			
			//跳转到浏览界面
			header("Location:index.php");
			break;

	}

//四、关闭数据库
mysql_close();


