<div class="container">
    <div class="sidebar">
        <a class="sidebar-item" href="http://localhost:8088/web/account/profile">Thông tin cá nhân</a>
        <a class="sidebar-item active" href="http://localhost:8088/web/account/purchase">Đơn hàng</a>
    </div>
    <div class="content-container">
        <div class="profile-content">
            <h3 style="text-align: center; margin-bottom: 20px">Đơn hàng của bạn</h3>
            <div class="card" style="margin-bottom: 10px; height: 60px; padding: auto;">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 d-flex justify-content-center">
                            <p class="name_col" style="display: none;"></p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
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
                        <div class="col-md-4 d-flex justify-content-center">
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
                        <div class="col-md-4 d-flex justify-content-center">
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
                <div class="row-cols-md-4">
                    <div class="float-end">
                        <p class="">
                            <span style="font-size: 17px;padding-right: 5px;">Tổng: </span>
                            <span style="font-size: 17px;">$799</span>
                        </p>
                    </div>
                </div>
                <div class="row-cols-md-4">
                    <div class="float-end">
                        <p class="d-flex">
                            <span style="font-size: 17px;padding-right: 5px;">Trạng thái:</span>
                            <span style="font-size: 17px;;">Hoàn thành</span>
                        </p>
                    </div>
                </div>

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