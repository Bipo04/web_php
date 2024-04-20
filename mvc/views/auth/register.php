<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/style/log_style.css">

    <script>
        //Xóa dữ liệu khi refresh trang
        window.onload = function() {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    };
    </script>
</head>
<body>
    <div class="container">
        <div class="login form">
            <header>Sign up</header>
            <form action="" method="post">

<?php
if(isset($data['success']))
{
    if($data['success'] == 'true')
    {
        $kq = '<p style="color:red; font-size: 17px">Đăng ký thành công.</p>';
        echo $kq;
    }
    else if($data['success'] == 'false')
    {
        $kq = '<p style="color:red; font-size: 17px">Tài khoản đã tồn tại.</p>';
        echo $kq;
    }
}
?>

                <input required="true" type="text" name="fullname" id="name_reg" placeholder="Enter your fullname">
                <input required="true" type="text" name="username" id="user_reg" placeholder="Enter your username">
                <input required="true" type="text" name="password" id="pass_reg" placeholder="Create a password">
                <input type="submit" name="btn_reg" class="button" value="Sign up">
            </form>
        <div class="signup">
            <span class="signup">Already have an account?
            <a style="text-decoration: none; font-size: 17px" href="login">Đăng nhập</a>
            </span>
        </div>
        </div>
    </div>
</body>
</html>