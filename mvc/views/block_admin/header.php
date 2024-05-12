<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/admin/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="brand-container">
                <h1 class="name-shop">Angel&BB</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="http://localhost:8088/web/admin/category">Danh mục</a>
                    </li>
                    <li class="menu-list-item"><a href="http://localhost:8088/web/admin/product">Sản phẩm</a></li>
                    <li class="menu-list-item"><a href="http://localhost:8088/web/admin/user">Người dùng</a></li>
                    <li class="menu-list-item"><a href="http://localhost:8088/web/admin/supply">Nhà cung cấp</a></li>
                    <li class="menu-list-item"><a href="">Đơn hàng</a></li>
                    <li class="menu-list-item"><a href="">Thống kê</a></li>
                </ul>
            </div>
            <div class="account-container">
                <button class="profile-text"><i class="fa-solid fa-user"></i> Profile</i></button>
                <div class="profile-dropdown dropdown-active">
                    <ul>
                        <li style="margin-top: 10px"><a href="">Thông tin</a></li>
                        <li><a href="login">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
    const profileText = document.querySelector(".profile-text");
    const item = document.querySelector(".profile-dropdown");

    profileText.addEventListener("click", (event) => {
        item.classList.toggle("dropdown-active");
        event.stopPropagation(); // Ngăn chặn sự kiện click từ việc lan ra ngoài
        console.log(1)
    });

    document.addEventListener("click", (event) => {
        const isClickInsideItem = item.contains(event.target);
        const isClickOnProfileText = event.target === profileText;
        if (!isClickInsideItem && !isClickOnProfileText) {
            item.classList.add("dropdown-active");
        }
    });
    </script>