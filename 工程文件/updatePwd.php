<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/mystyle.css" type="text/css"/>
    <script type="text/javascript" src="script/check.js"></script>
</head>

<body class="shop_body">
	<?php 
		include 'front-top.php';
		include 'functions.php';
		checkUserLogined();// 判断用户是否登录
	?>
    <div class="formContain">
    	<form action="updatePwdAction.php?action=updatePwd" style="margin-left: 10px" method="post" onsubmit="return validate_form(this)">
    		<h2 class="frm_title">Change Password</h2>
    		<p><span>Old password</span><input type="password" name="password" style="width: 350px" class="txt-inp"></p>
    		<p><span>New password</span><input type="password" name="newpassword" style="width: 350px" class="txt-inp"></p>
    		<p><span>Confirm password</span><input type="password" name="repassword" style="width: 350px" class="txt-inp"></p>
    		<p class="txt_center"><input type="submit" value="modify" class="frm-btn"></p>
    	</form>
    </div>
    <script type="text/javascript">
    function validate_form(thisform){
    	with (thisform){
	      if (validate_required(password,"Please enter the old password")==false){
	    	  	password.focus();
		      	return false;
		  }
	      if (validate_required(newpassword,"Please input a password")==false){
	    	  	 newpassword.focus();
	    		 return false;
	     }
	      if (validate_required(repassword,"Please enter the confirmation password")==false){
	    	     repassword.focus();
	    		 return false;
	     }
		     if(validate_equal(newpassword, repassword, "The two passwords are inconsistent") == false){
		    	 repassword.focus();
	    		 return false;
			 }
	  }
    }
    </script>
</body>

</html>