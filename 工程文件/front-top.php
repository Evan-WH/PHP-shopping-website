<?php 
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
?>
<div class="shop_header">
    	<h1 class="shop_title">E-Shop</h1>
    	<div class="search_bar">
    		<form action="<?php echo $_SERVER['PHP_SELF'];?>">
    			<input type="text" name="searchword" autocomplete="off" value="<?php if(isset($_GET['searchword'])) echo $_GET['searchword'];?>"><button>🔍</button>
    		</form>
    	</div>
    	<div class="login_register_bar">
    		<?php 
    			if(isset($_SESSION) && isset($_SESSION['userId']) && $_SESSION['userId']){
    		?>
    		<?php 
    				if($_SESSION['adminId']){
    		?>
    		<a href="admin.php">Admin</a>
    		|
    		<a href="loginAction.php?act=logout"style="margin-right: -10px">Out</a>
    		<?php 
    				}else{
    		?>
    		<a href="myOrderList.php">Orders</a>
    		|
    		<a href="loginAction.php?act=logout">Out</a>
    		<?php 
    				}
    		?>
    		<?php ?>
    			
    		<?php 
    			}else{
    		?>
    			<a href="login.php" style="margin-left: -20px">Sign in</a>
    			|
    			<a href="register.php">Register</a>
    		<?php 
    			}
    		?>
    		
    		
    	</div>
    </div>
    <div class="shop_nav">
    	<ul>
    		<li><a href="index.php">Home</a></li>
    		<li><a href="myOrderList.php">Orders</a></li>
    		<?php 
    			if(isset($_SESSION) && isset($_SESSION['userId']) && $_SESSION['userId']){
    		?>
    		<li><a href="updatePwd.php">Password</a></li>
    		<?php 
    			}
    		?>
    	</ul>
    </div>