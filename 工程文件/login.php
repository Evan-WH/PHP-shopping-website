<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/mystyle.css" type="text/css"/>
    <script type="text/javascript" src="script/check.js"></script>
</head>

<body class="shop_body">
	<?php 
		include 'front-top.php';
	?>
    <div class="formContain">
    	<form action="loginAction.php?act=login" method="post" onsubmit="return validate_form(this)">
    		<h2 class="frm_title">Sign-In</h2>
    		<p><span>username:</span><input type="text" name="username" autocomplete="off" class="txt-inp"></p>
    		<p><span>password:</span><input type="password" name="password" class="txt-inp"></p>
    		<p class="txt_center"><input type="submit" value="Login" class="frm-btn"></p>
    	</form>
    </div>
    <script type="text/javascript">
    function validate_form(thisform){
    	with (thisform){
	      if (validate_required(username,"Please enter the account number~")==false){
		      	username.focus();
		      	return false;
		  }
	      if (validate_required(password,"Please input a password~")==false){
	    		 password.focus();
	    		 return false;
	    }
	  }
    }
    </script>
</body>

</html>