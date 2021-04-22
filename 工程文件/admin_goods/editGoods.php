<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>商品信息管理</title>
		<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
		<script type="text/javascript" src="../script/check.js"></script>
	</head>
	<body>
			<?php  
				//1.导入配置文件 
					require("../dbconfig.php");
				//2. 连接数据库，并选择数据库
				
				//3. 获取要修改的商品信息
					$sql = "select * from goods where id={$_GET['id']}";
					$result = mysql_query($sql);
				
				//4. 判断是否获取到要编辑的商品信息
					if($result && mysql_num_rows($result)>0){
						$shop = mysql_fetch_assoc($result);//解析出要修改的商品信息 
					}else{
						die("No item information found to modify");
					}
			?>
			<h3 class="page_title">Edit product information</h3>
			<form action="goodsAction.php?action=update" enctype="multipart/form-data" method="post" onsubmit="return validate_form(this)">
				<input type="hidden" name="id" value="<?php echo $shop['id']; ?>"/>
				<input type="hidden" name="oldpic" value="<?php echo $shop['pic']; ?>"/>
			<table border="0" width="1200" class="frm_table">
				<tr>
					<td align="right">name：</td>
					<td><input type="text" name="name" value="<?php echo $shop['name']; ?>" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">type：</td>
					<td>
						<select name="typeid">
						<?php 
							require("../dbconfig.php");
							foreach($typelist as $k=>$v){
								$sd = ($shop['typeid']==$k)?"selected":"";//是否是当前的类型
								echo "<option value='{$k}' {$sd}>{$v}</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">price：</td>
					<td><input type="text" name="price"  value="<?php echo $shop['price']; ?>" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">stock：</td>
					<td><input type="text" name="total"  value="<?php echo $shop['total']; ?>" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">picture：</td>
					<td><input type="file" name="pic"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">describe：</td>
					<td><textarea rows="10" cols="70" name="note"><?php echo $shop['note']; ?></textarea></td>
				</tr>
				<tr>
					
					<td colspan="2" align="center">
						<input type="submit" value="update"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="Reset"/>
					</td>
				</tr>
				<tr>
					<td align="right" valign="top">&nbsp;</td>
					<td><img src="../uploads/<?php echo $shop['pic']; ?>" style="max-width: 200px;"/></td>
				</tr>
			</table>
			</form>
		<script type="text/javascript">
		function validate_form(thisform){
			with (thisform){
				if (validate_required(name,"Please fill in the name of the product")==false){
					name.focus();
			      	return false;
			  }
				if (validate_required(price,"Please fill in the unit price")==false){
					price.focus();
			      	return false;
			  }

				if (validate_required(total,"Please fill in the inventory")==false){
					total.focus();
			      	return false;
			  }
				if (validate_required(note,"Please fill in the product description")==false){
					note.focus();
			      	return false;
			  }
			}
		}
    </script>
	</body>
</html>