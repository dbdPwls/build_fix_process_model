<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
</head>
<body>
	<?php 
	if(isset($_SESSION['user_id'])){ ?>
		<a href="./login/logout.php">로그아웃</a>
	<?php
	}
	else{
	?>
		<a href="./login/login.php">로그인</a>
	<?php
	}
	?>
</body>
</html>


