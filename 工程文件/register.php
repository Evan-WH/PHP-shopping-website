<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/mystyle.css" type="text/css"/>
    <script type="text/javascript" src="script/check.js"></script>
</head>

<body class="shop_body">
	<?php 
		include 'front-top.php';
	?>
    <div class="formContain">
    	<form action="registerAction.php?action=add" method="post" onsubmit="return validate_form(this)">
    		<h2 class="frm_title">Register</h2>
    		<p><span>username:</span><input type="text" name="username" autocomplete="off" class="txt-inp"></p>
    		<p><span>password:</span><input type="password" name="password" class="txt-inp"></p>
    		<p><span>Re-enter password:</span><input type="password" name="repassword" style="width: 170px" class="txt-inp"></p>
    		<p class="txt_center"><input type="submit" value="Register" class="frm-btn"></p>
    	</form>
    </div>
    <script type="text/javascript">
    function validate_form(thisform){
    	with (thisform){
	      if (validate_required(username,"Please enter the account number")==false){
		      	username.focus();
		      	return false;
		  }
	      if (validate_required(password,"Please input a password")==false){
	    		 password.focus();
	    		 return false;
	     }
	      if (validate_required(repassword,"Please enter the password again")==false){
	    	  repassword.focus();
	    		 return false;
	     }
		     if(validate_equal(password, repassword, "The two passwords are inconsistent") == false){
		    	 repassword.focus();
	    		 return false;
			 }
	  }
    }
    </script>
</body>

</html>