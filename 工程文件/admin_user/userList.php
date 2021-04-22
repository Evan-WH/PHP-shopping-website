<!doctype html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>User information management</title>
		<link rel="stylesheet" href="../css/mystyle.css" type="text/css"/>
	</head>
	<body>
		
			<h3>User information list</h3>
			<div class="admin_search_bar">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>">
					<ul>
						<li><label>username</label><input type="text" class="txt" name="keyword" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword'];?>"></li>
						<li><button>search</button></li>
					</ul>
				</form>
			</div>
			<table border="1" width="1000" class="frm_table">
				<tr>
					<th>User number</th>
					<th>User name</th>
					<th>Add time</th>
					<th>Operation</th>
				</tr>
				<?php
				
				
				//从数据库中读取信息并输出到浏览器表格中
				//1.导入配置文件 
					require("../dbconfig.php");
					
					// 当前页
					if(!isset($_GET["page"])){
						$page=1;
					}else{
						$page=$_GET["page"];
					}
					
					// 数据从第几行开始
					$temp=($page-1)*$list_num=5;
					
					// 搜索关键字
					if(!isset($_GET['keyword'])){
						$keyword = "";
					}else{
						$keyword = trim($_GET['keyword']);
					}
					
					
				//2. 连接数据库，并选择数据库
					
					$sql_count = "select count(*) as total from user where 1";
					if($keyword){
						$sql_count.= " and username like '%{$keyword}%'";
					}
					$result = mysql_query($sql_count);
					$res = mysql_fetch_array($result);
					$num=$res['total'];
					$p_count=ceil($num/$list_num);					//总页数为总条数除以每页显示数
				
				//3. 执行商品信息查询
					$sql = "select * from user where 1 ";
					if($keyword){
						$sql .=  " and username like '%{$keyword}%'";
					}
					$sql .= " limit {$temp},{$list_num}";
					$result = mysql_query($sql);
					
					
					
					
				//4. 解析商品信息（解析结果集）
					while($row = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['username']}</td>";
						echo "<td>{$row['createtime']}</td>";
						if($row['username'] != "admin"){
							echo "<td class='txt_center'>
							<a href='userAction.php?action=del&id={$row['id']}' class='op_btn'>delete</a>
							<a href='editUser.php?id={$row['id']}' class='op_btn'>update</a>
							<a href='resetUserPwd.php?id={$row['id']}' class='op_btn'>reset password</a>
							</td>";
						}else{
							echo "<td class='txt_center'>
							<a class='op_btn' onclick='cantDel();'>delete</a>
							<a href='editUser.php?id={$row['id']}' class='op_btn'>update</a>
							<a href='resetUserPwd.php?id={$row['id']}' class='op_btn'>reset password</a>
							</td>";
						}
						
						echo "</tr>";
					}
					
				
				
				//5. 释放结果集，关闭数据库
		
				
				?>
			</table>
			<?php 
			// 分页
			if($num > 0){
				$prev_page=$page-1;						//定义上一页为该页减1
				$next_page=$page+1;						//定义下一页为该页加1
				//echo "next_page=".$next_page.",p_count=".$p_count;
				echo "<p align=\"center\"> ";
				if ($page<=1)								//如果当前页小于等于1只有显示
				{
					echo "First Page | ";
				}
				else										//如果当前页大于1显示指向第一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=1&keyword={$keyword}'>First Page</a> | ";
				}
				if ($prev_page<1)							//如果上一页小于1只显示文字
				{
					echo "Previous | ";
				}
				else										//如果大于1显示指向上一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$prev_page&keyword={$keyword}'>Previous</a> | ";
				}
				if ($next_page>$p_count)						//如果下一页大于总页数只显示文字
				{
					echo "Next | ";
				}
				else										//如果小于总页数则显示指向下一页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$next_page&keyword={$keyword}' class='underline'>Next</a> | ";
				}
				if ($page>=$p_count)						//如果当前页大于或者等于总页数只显示文字
				{
					echo "Last Page</p>\n";
				}
				else										//如果当前页小于总页数显示最后页的连接
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?page=$p_count&keyword={$keyword}'>Last Page</a></p>\n";
				}
			}else{
				echo "<P align='center'>No record yet!！</p>";
			}
			?>
			<script>
				function cantDel(){
					alert("Administrator cannot delete");
				}
			</script>
	</body>
</html>