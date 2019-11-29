<?php 
include '../lock.php';

include '../config.php';

$sql="select * from forum_user where is_admin=0";
$rst=mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<table>
			<tr>
				<th>编号</th>
				<th>昵称</th>
				<th>账号</th>
				<th>邮箱</th>
				<th>积分</th>
				<th>是否管理</th>
				<th>修改</th>
				<th>删除</th>
			</tr>	
			<?php 
				while($row=mysqli_fetch_assoc($rst)){
					echo "<tr>";
					echo "<td>{$row['uid']}</td>";
					echo "<td>{$row['nickname']}</td>";
					echo "<td>{$row['account']}</td>";
					echo "<td>{$row['email']}</td>";
					echo "<td>{$row['jifen']}</td>";
					echo "<td>{$row['is_admin']}</td>";
					echo "<td><a href='edit.php?id={$row['uid']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['uid']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	
</body>
</html>