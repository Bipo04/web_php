<style>
.old-price {
    font-size: 16px;
    color: gray;
    text-decoration: line-through;
    opacity: 0.6;
    margin-right: 10px;
    font-weight: 400;
}

.product_price {
    width: 150px;
    font-weight: 600;
}
</style>

<div class="container">
    <div class="sidebar">
        <?php
foreach($data['categories'] as $item) {
    $a = '<a class="sidebar-item';
    if(isset($data['cate']) && $item['name-slug'] == $data['cate']) {
        $a .= ' active';
    }
    $a .= '"href="http://localhost:8088/web/category/girl/'.$item['name-slug'].'">'.$item['name'].'</a>';
    echo $a;
}
        ?>
    </div>

    <div class="content-container">
        <div class="product-list-container">
            <div class="product-select">
                <h5 class="product-list-title">NEW RELEASES</h5>
                <select id="sortSelect" class="sort-select">
                    <option value="default" <?php if($data['order'] == 'default') echo 'selected'; ?>>
                        Giá
                    </option>
                    <option value="asc" <?php if ($data['order'] == 'asc') echo 'selected'; ?>>Giá:
                        Tăng dần
                    </option>
                    <option value="desc" <?php if ($data['order'] == 'desc') echo 'selected'; ?>>Giá:
                        Giảm
                        dần</option>
                </select>
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
                                    <div class="price" style="display:flex;">';
    if($item['discount'] != null)
        echo                        '   <h6 class="old-price">'.$item['outbound_price'].'$</h6>
                                        <h6 class="product_price">'.$item['discount'].'$</h6>
                                    </div>
                                </div>
                            </a>';
    else 
        echo            '               <h6 class="product_price">'.$item['outbound_price'].'$</h6>
                                    </div>
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
    const currentUrl = window.location.href;
    const url = currentUrl.split('?')[0];
    const sortValue = this.value;
    window.location.href = `${url}?order=${sortValue}&sortBy=price`;
});
</script>