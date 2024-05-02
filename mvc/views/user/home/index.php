<style>
.product {
    padding: 16px;
    margin: 16px;
    text-align: center;
}

.product img {
    width: 100%;
    height: auto;
    max-width: 300px;
}

.product h2 {
    font-size: 24px;
    margin-bottom: 16px;
}

.product p {
    font-size: 16px;
    color: #555;
}

.product .price {
    font-size: 20px;
    color: #e60000;
    margin: 8px 0;
}

.product .buy-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.product .buy-button:hover {
    background-color: #45a049;
}
</style>
<a href="http://localhost:8088/web/auth/logout">Đăng xuất</a>
<?php
foreach($data['product'] as $val)
echo '<div class="product">
<h2>'.$val['name'].'</h2>
<img src="'._WEB_ROOT.'/public/clients/images/'.$val['thumbnail'].'"
alt="Ảnh sản phẩm">
<p>Mô tả ngắn về sản phẩm. Đây là một sản phẩm tuyệt vời với nhiều tính năng hấp dẫn.</p>
<p class="price">'.$val['price'].' VND</p>
<form action="" method="post">
    <input type="hidden" name="product_id" value="'.$val['id'].'">
    <input type="hidden" name="name" value="'.$val['name'].'">
    <input type="hidden" name="price" value="'.$val['price'].'">
    <input type="hidden" name="quantity" value="1">
    <button type="submit" name="btn_cart" class="buy-button">Mua ngay</button>
</form>
</div>'
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost:8088/web/cart/add', true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        console.log('Sản phẩm đã được thêm vào giỏ hàng.');
                    } else {
                        console.error('Có lỗi xảy ra:', xhr.status, xhr.statusText);
                    }
                }
            };

            xhr.send(formData);
        });
    });
});
</script>