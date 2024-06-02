<div class="container">
    <div class="sidebar">
        <?php
foreach($data['categories'] as $item) {
    $a = '<a class="sidebar-item';
    if(isset($data['cate']) && $item['name-slug'] == $data['cate']) {
        $a .= ' active';
    }
    $a .= '"href="http://localhost:8088/web/category/boy/'.$item['name-slug'].'">'.$item['name'].'</a>';
    echo $a;
}
?>
    </div>

    <div class="content-container">
        <div class="product-list-container">
            <div class="product-select">
                <h5 class="product-list-title">NEW RELEASES</h5>
                <form action="a.php" method="POST">
                    <select id="sortSelect" class="sort-select">
                        <option value="default"
                            <?php if (isset($_SESSION['sort']) && $_SESSION['sort'] == 'default') echo 'selected'; ?>>
                            Giá
                        </option>
                        <option value="asc"
                            <?php if (isset($_SESSION['sort']) && $_SESSION['sort'] == 'asc') echo 'selected'; ?>>Giá:
                            Tăng dần
                        </option>
                        <option value="desc"
                            <?php if (isset($_SESSION['sort']) && $_SESSION['sort'] == 'desc') echo 'selected'; ?>>Giá:
                            Giảm
                            dần</option>
                    </select>
                </form>
            </div>

            <div class="product-list">
                <?php
foreach($data['products'] as $item) {
    $images = explode(',',$item['thumbnail']);
    echo                    '<a href="http://localhost:8088/web/product?id='.$item['id'].'">
                                <div class="product-list-item">
                                    <img class="product-list-item-img"
                                        src="'._WEB_ROOT.'/public/clients/images/'.$images[0].'.jpg" alt="">
                                    <h6 class="product_name">'.$item['title'].'</h6>
                                    <h6 class="product_price">'.$item['outbound_price'].'$</h6>
                                </div>
                            </a>';
}
                ?>
            </div>
        </div>
    </div>
</div>

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