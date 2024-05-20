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