<div class="container">
    <div class="image-container">
        <img class="img-cover" src="<?php echo _WEB_ROOT ?>/public/clients/images/banner.png" alt="ảnh baby">
    </div>
    <div class="content-container">
        <?php
$i = 0;
foreach($data['data'] as $val) {
    echo '<div class="product-list-container">
    <h1 class="product-list-title">'.$data['data_title'][$i].'</h1>
    <div class="product-list-wrapper">
    <div class="product-list">';
    foreach($val as $item) {
    $images = explode(',',$item['thumbnail']);
    echo                    '<a href="http://localhost:8088/web/product?id='.$item['id'].'"><div class="product-list-item">
                                <img class="product-list-item-img"
                                    src="'._WEB_ROOT.'/public/clients/images/'.$images[0].'.jpg" alt="">
                            <h6 class="product_name">'.$item['title'].'</h6>
                            <h6 class="product_price">'.$item['outbound_price'].'$</h6>
                        </div></a>';
    }
    echo '</div>
    <i class="fas fa-chevron-right arrow"></i>
    </div>
    </div>';
    $i++;
}
                    ?>
    </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
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

const arrows = document.querySelectorAll(".arrow");
const productLists = document.querySelectorAll(".product-list");

arrows.forEach((arrow, i) => {
    const itemNumber = productLists[i].querySelectorAll("img").length;
    let clickCounter = 0;
    arrow.addEventListener("click", () => {
        const ratio = Math.floor(window.innerWidth / 270);
        clickCounter++;
        if (itemNumber - (3 + clickCounter) + (4 - ratio) >= 0) {
            productLists[i].style.transform = `translateX(${
        productLists[i].computedStyleMap().get("transform")[0].x.value - 286
      }px)`;
        } else {
            productLists[i].style.transform = "translateX(0)";
            clickCounter = 0;
        }
    });;
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>