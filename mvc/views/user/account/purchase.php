<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/clients/css/navbar.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/clients/css/account.css">
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
                <button class="profile-text"><i class="fa-solid fa-user"></i> Profile</button>
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
            <a class="sidebar-item" href="http://localhost:8088/web/account/profile">Thông tin cá nhân</a>
            <a class="sidebar-item active" href="http://localhost:8088/web/account/purchase">Đơn hàng</a>
        </div>
        <div class="content-container">
            <div class="profile-content">
                <h3 style="text-align: center;">Đơn hàng của bạn</h3>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2 d-flex justify-content-center">
                                <p class="name_col" style="display: none;"></p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <p class="name_col">Tên sản phẩm</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <p class="name_col">Số lượng</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <p class="name_col">Giá bán</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <p class="name_col">Thành tiền</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                                    class="img-fluid" alt="Generic placeholder image">
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">iPad Air</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">1</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">$799</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">$799</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                                    class="img-fluid" alt="Generic placeholder image">
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">iPad Air</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">1</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">$799</p>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div>
                                    <p class="content_col">$799</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="float-end">
                            <p class="d-flex align-items-center">
                                <span style="font-size: 17px;padding-right: 5px;">Trạng thái:</span>
                                <span style="font-size: 17px;padding-right: 40px;">Hoàn thành</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="float-end">
                            <p class="d-flex align-items-center">
                                <span style="font-size: 17px;padding-right: 5px;">Tổng: </span>
                                <span style="font-size: 17px;padding-right:80px;">$799</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
    document.getElementById("ac_menu").classList.toggle("show");
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>