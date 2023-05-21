<?php
    session_start();
    if(!isset($_SESSION["user_id"])){
?>
        <script>
            alert("로그인 후 이용해주세요.");
            location.href='./login/login.php';
        </script>
<?php
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>어쩌다 제주</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
</head>
<body>
	<p><?=$_SESSION['user_id']?>님 환영합니다.</p>
  <a href="./login/logout.php">로그아웃</a>
</body>
</html>