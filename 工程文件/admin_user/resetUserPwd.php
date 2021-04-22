<?php 
	//1.导入配置文件
	require("../dbconfig.php");
	//2. 连接数据库，并选择数据库
	
	//3. 获取要修改的用户信息
	$sql = "select * from user where id={$_GET['id']}";
	$result = mysql_query($sql);
	
	//4. 判断是否获取到要编辑的用户信息
	if($result && mysql_num_rows($result)>0){
		$item = mysql_fetch_assoc($result);//解析出要修改的信息
	}else{
		die("没有找到要修改的信息");
	}
?>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>User information management</title>
		<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
		<script type="text/javascript" src="../script/check.js"></script>
	</head>
	<body>
			<h3 class="page_title">Reset user password</h3>
			<form action="userAction.php?action=resetPwd" enctype="multipart/form-data" method="post" onsubmit="return validate_form(this)">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			<table border="0" width="900" class="frm_table">
				<tr>
					<td align="right">username：</td>
					<td><input type="text" name="username" class="frm_txt" value="<?php echo $item['username'];?>" disabled="disabled"/></td>
				</tr>
				
				<tr>
					<td align="right">new password：</td>
					<td><input type="text" name="password" class="frm_txt"/></td>
				</tr>
				
				<tr>
					<td align="right">Confirm password：</td>
					<td><input type="text" name="repassword" class="frm_txt"/></td>
				</tr>
				
				<tr>
					
					<td colspan="2" align="center">
						<input type="submit" value="upadate"/>&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			</form>
	<script type="text/javascript">
		function validate_form(thisform){
			with (thisform){
				if (validate_required(username,"Please fill in the user name")==false){
					username.focus();
			      	return false;
			  }
				if (validate_required(password,"Please fill in the password")==false){
					password.focus();
			      	return false;
			  }

				if (validate_required(repassword,"Please fill in the confirmation password")==false){
					repassword.focus();
			      	return false;
			  }
			}
		}
    </script>
	</body>
</html>