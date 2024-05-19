<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/clients/css/category.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/clients/css/navbar.css">
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
                    <li class="menu-list-item active"><a href="http://localhost:8088/web/category/girl">Nữ</a>
                    </li>
                    <li class="menu-list-item"><a href="">Nam</a></li>
                    <li class="menu-list-item"><a href="">Bán chạy</a></li>
                    <li class="menu-list-item"><a href="">Giảm giá</a></li>
                </ul>
            </div>
            <div class="account-container">
                <button class="cart-text"><i class="fa-solid fa-cart-shopping"></i></button>
                <button class="profile-text"><i class="fa-solid fa-user"></i> Profile</i></button>
                <div class="profile-dropdown dropdown-active">
                    <ul>
                        <li><a href="http://localhost:8088/web/account/profile">Thông tin</a></li>
                        <li><a href="login">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <a class="sidebar-item active" href="#home">Home</a>
            <a class="sidebar-item" href="#news">News</a>
            <a class="sidebar-item" href="#contact">Contact</a>
            <a class="sidebar-item" href="#about">About</a>
        </div>

        <div class="content-container">
            <div class="product-list-container">
                <div class="product-select">
                    <h5 class="product-list-title">NEW RELEASES</h5>
                    <form action="a.php" method="POST">
                        <select id="sortSelect" class="sort-select">
                            <option value="default">Giá</option>
                            <option value="asc">Giá: Tăng dần</option>
                            <option value="desc">Giá: Giảm dần</option>
                        </select>
                    </form>
                </div>

                <div class="product-list-wrapper">
                    <div class="product-list">
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>

                    </div>
                </div>
                <div class="product-list-wrapper">
                    <div class="product-list">
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script>
const profileText = document.querySelector(".profile-text");
const item = document.querySelector(".profile-dropdown");

profileText.addEventListener("click", (event) => {
    item.classList.toggle("dropdown-active");
    event.stopPropagation(); // Ngăn chặn sự kiện click từ việc lan ra ngoài
});

document.addEventListener("click", (event) => {
    const isClickInsideItem = item.contains(event.target);
    const isClickOnProfileText = event.target === profileText;
    if (!isClickInsideItem && !isClickOnProfileText) {
        item.classList.add("dropdown-active");
    }
});
document.querySelectorAll('.sidebar-item').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelector('.sidebar-item.active').classList.remove('active');
        this.classList.add('active');
    });
});

document.getElementById('sortSelect').addEventListener('change', function() {
    // Lấy giá trị của lựa chọn
    var sortValue = this.value;

    // Tạo một yêu cầu POST mới
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost:8088/web/category/girl', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            window.location.reload();
        }
    };
    // Gửi dữ liệu lên server
    xhr.send('sort=' + sortValue);
});
</script>

</html>