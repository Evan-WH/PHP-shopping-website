<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>User information management</title>
		<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
		<script type="text/javascript" src="../script/check.js"></script>
	</head>
	<body>
			<h3 class="page_title">Add user information</h3>
			<form action="userAction.php?action=add" enctype="multipart/form-data" method="post" onsubmit="return validate_form(this)">
			<table border="0" width="900" class="frm_table">
				<tr>
					<td align="right">username：</td>
					<td><input type="text" name="username" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">password：</td>
					<td><input type="password" name="password" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">Confirm password：</td>
					<td><input type="password" name="repassword" class="frm_txt"/></td>
				</tr>
				
				<tr>
					
					<td colspan="2" align="center">
						<input type="submit" value="Add"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="Reset"/>
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