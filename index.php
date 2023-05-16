<?php
	session_start();
	if(!isset($_SESSION['user_id'])) {
    	header('Location: login/login.php');
//	header('Location: ./index.php');
    }
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
		<a href="login/logout.php">	로그인이 되었습니다. 로그아웃</a>
	<?php
	}
	else{
	?>
		<a href="login/login.php">로그인</a>
	<?php
	}
	?>
</body>
</html>


