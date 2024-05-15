<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/clients/css/main.css">
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
                    <li class="menu-list-item active"><a href="">Girl</a>
                    </li>
                    <li class="menu-list-item"><a href="">Boy</a></li>
                    <li class="menu-list-item"><a href="">Top Sale</a></li>
                    <li class="menu-list-item"><a href="">On Sale</a></li>
                </ul>
            </div>
            <div class="account-container">
                <i class="fa-solid fa-cart-shopping"></i>
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

    <div class="container">
        <!-- <div class="content-container">
            <div class="product-list-container">
                <h1 class="product-list-title">Sản phẩm mới</h1>
                <div class="product-list-wrapper">
                    <div class="product-list">
                        <?php
// $images = explode(',',$data['product'][0]['thumbnail']);
// echo $images[0];
// echo                    '<div class="product-list-item">
//                             <img class="product-list-item-img"
//                                 src="http://localhost:8088/web/public/clients/images/bo_ngan_tay_rabity/bo_tho_ngan_tay_be_gai_Rabity_1.png" alt="">
//                         <h6 class="product_name">'.$data['product'][0]['title'].'</h6>
//                         <h6 class="product_price">'.$data['product'][0]['outbound_price'].'$</h6>
//                     </div>'
                    ?>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div> -->
        <div class="image-container">
            <img class="img-cover" src="<?php echo _WEB_ROOT ?>/public/clients/images/banner.png" alt="ảnh baby">
        </div>
        <div class="content-container">
            <div class="product-list-container">
                <h1 class="product-list-title">NEW RELEASES</h1>
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
                        <div class="product-list-item">
                            <img class="product-list-item-img"
                                src="<?php echo _WEB_ROOT ?>/public/clients/images/ao_bomber_2.png" alt="">
                            <h6 class="product_name">áo 1</h6>
                            <h6 class="product_price">100$</h6>

                        </div>

                    </div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>
    </div>
    <script>
    const arrows = document.querySelectorAll(".arrow");
    const productLists = document.querySelectorAll(".product-list");

    arrows.forEach((arrow, i) => {
        const itemNumber = productLists[i].querySelectorAll("img").length;
        let clickCounter = 0;
        arrow.addEventListener("click", () => {
            const ratio = Math.floor(window.innerWidth / 270);
            clickCounter++;
            if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
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




    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link text-body-secondary" style="font-size: 14px;">Home</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link text-body-secondary" style="font-size: 14px;">Features</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link text-body-secondary" style="font-size: 14px;">Pricing</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link text-body-secondary" style="font-size: 14px;">FAQs</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link text-body-secondary" style="font-size: 14px;">About</a>
            </li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
    </footer>
    </div>
</body>
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
</script>

</html>