<?php 
include '../lock.php';
include '../config.php';

$sql="select * from forum_bbs";
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
				<th>帖子标题</th>
				<th>审核</th>
				<th>浏览数</th>
				<th>点赞数</th>
				<th>修改</th>
				<th>删除</th>
			</tr>	
			<?php 
				while($row=mysqli_fetch_assoc($rst)){
					echo "<tr>";
					echo "<td>{$row['bbs_id']}</td>";
					echo "<td>{$row['bbs_title']}</td>";
					echo "<td>{$row['status']}</td>";
					echo "<td>{$row['browse']}</td>";
					echo "<td>{$row['agree']}</td>";
					echo "<td><a href='edit.php?id={$row['bbs_id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['bbs_id']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>