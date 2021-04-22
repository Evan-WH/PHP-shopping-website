<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Commodity information management</title>
		<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
		<script type="text/javascript" src="../script/check.js"></script>
	</head>
	<body>
			<h3 class="page_title">Publish commodity information</h3>
			<form action="goodsAction.php?action=add" enctype="multipart/form-data" method="post" onsubmit="return validate_form(this)">
			<table border="0" width="1200" class="frm_table">
				<tr>
					<td align="right">name：</td>
					<td><input type="text" name="name" autocomplete="off" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">type：</td>
					<td>
						<select name="typeid">
						<?php 
							include("../dbconfig.php");
							foreach($typelist as $k=>$v){
								echo "<option value='{$k}'>{$v}</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">price：</td>
					<td><input type="text" name="price" autocomplete="off" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">stock：</td>
					<td><input type="text" name="total" autocomplete="off" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right">picture：</td>
					<td><input type="file" name="pic" class="frm_txt"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">describe：</td>
					<td><textarea rows="10" cols="70" name="note"></textarea></td>
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