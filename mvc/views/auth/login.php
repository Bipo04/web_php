<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/style/log_style.css">
    <?php
    ?>
    <script>
        //Xóa dữ liệu khi refresh trang
        window.onload = function() {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="login form">
        <header>Login</header>
        <form action="" method="post">
<?php
if(isset($data['succes']))
{
    $kq = '<p style="color:red; font-size: 17px">Sai tài khoản hoặc mật khẩu</p>';
    echo $kq;
}
?>
            <input required="true" type="text" name="username" id="user_log" placeholder="Enter your username">
            <input required="true" type="password" name="password" id="pass_log" placeholder="Enter your password">
            <input required="true" type="submit" name="btn_log" class="button" value="Login">
        </form>
        <div class="signup">
            <span class="signup">Don't have an account?
            <a style="text-decoration: none; font-size: 17px" href="register">Đăng ký</a>
            </span>
        </div>
        </div>
    </div>
</body>
</html>