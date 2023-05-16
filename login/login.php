<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        header('Location: ../aj/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>어쩌다 제주</title>
</head>

<body>
    <div class="page-loader"></div>
    <section class="login_section">
        <div class="login_wrap">
            <form class="login_box" action="login_process.php" method="POST">
                <ul class="login_top">
                    <li>
                        <input type="text" name="id" placeholder="아이디" required>
                    </li>
                    <li>
                        <input type="password" name="pw" placeholder="비밀번호" required>
                    </li>
                </ul>
                <div class="login_bottom">
                    <div class="login_btn">
                        <input type="submit" name="" value="로그인">
                    </div>
                    <div class="login_footer">
                        <p><a href="./join.php">회원가입</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>