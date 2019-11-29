<?php 
include '../config.php';
include '../lock.php';

$sql="SELECT * FROM forum_comment";
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
				<th>帖子id</th>
				<th>用户id</th>
				<th>留言内容</th>
				<th>留言时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>	
			<?php 
				while($row=mysqli_fetch_assoc($rst)){
					echo "<tr>";
					echo "<td>{$row['comment_id']}</td>";
					echo "<td>{$row['bbs_id']}</td>";
					echo "<td>{$row['uid']}</td>";
					echo "<td>{$row['content']}</td>";
					echo "<td>";
					echo date('Y-m-d H:i',$row['add_time']);
					echo "</td>";
					echo "<td><a href='edit.php?id={$row['comment_id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['comment_id']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>