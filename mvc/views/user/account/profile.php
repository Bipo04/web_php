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
            <a class="sidebar-item active" href="http://localhost:8088/web/account/profile">Thông tin cá nhân</a>
            <a class="sidebar-item" href="http://localhost:8088/web/account/purchase">Đơn hàng</a>
        </div>

        <div class="col-md-9">
            <div class="profile-content">
                <h3 class="profile-content-title">Thông tin cá nhân</h3>
                <div class="account-info">
                    <label for="fullname">Họ và tên:</label>
                    <input type="text" id="fullname" name="fullname" value="Nguyễn Văn A" readonly>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="nguyenvana@example.com" readonly>

                    <label for="phone">Số điện thoại:</label>
                    <input type="text" id="phone" name="phone" value="0987654321" readonly>

                    <label for="username">Địa chỉ:</label>
                    <input type="text" id="address" name="address" value="quận Hoàng Mai, Hà Nội" readonly>
                </div>
                <button class="btn btn-primary Update">Chỉnh sửa</button>
                <button class="btn btn-primary Save hidden">Lưu thay đổi</button>
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
document.querySelectorAll('.sidebar-item').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelector('.sidebar-item.active').classList.remove('active');
        this.classList.add('active');
    });
});

document.querySelector('.Update').onclick = () => {
    document.querySelector('#fullname').removeAttribute('readonly');
    document.querySelector('#email').removeAttribute('readonly');
    document.querySelector('#phone').removeAttribute('readonly');
    document.querySelector('#address').removeAttribute('readonly');
    document.querySelector('.Update').classList.add('hidden');
    document.querySelector('.Save').classList.remove('hidden');
}
document.querySelector('.Save').onclick = () => {
    document.querySelector('#fullname').setAttribute('readonly', true);
    document.querySelector('#email').setAttribute('readonly', true);
    document.querySelector('#phone').setAttribute('readonly', true);
    document.querySelector('#address').setAttribute('readonly', true);
    document.querySelector('.Save').classList.add('hidden');
    document.querySelector('.Update').classList.remove('hidden');
}
document.getElementById("nav_ac").onclick = function() {
    myFunction()
};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
    document.getElementById("ac_menu").classList.toggle("show");
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>