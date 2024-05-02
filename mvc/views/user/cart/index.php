<style>
/* Ẩn mũi tên tăng/giảm trên các trình duyệt Webkit (Chrome, Safari, Edge, Opera) */
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    /* Vô hiệu hóa giao diện mặc định */
    margin: 0;
    /* Loại bỏ khoảng cách mặc định */
}

/* Ẩn mũi tên trên Firefox */
input[type="number"] {
    -moz-appearance: textfield;
    /* Hiển thị như trường văn bản thông thường */
}
</style>

<div class="container">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody id="cart-body">
            <?php
            $totalPrice = 0;
            foreach ($_SESSION['cart'] as $index => $item) {

                $itemTotal = $item['price'] * $item['quantity'];
                $totalPrice += $itemTotal;

                echo '<tr data-index="' . $index . '">
                    <td>' . $item['name'] . '</td>
                    <td>
                        <button type="submit" class="decrease" data-index="' . $index . '">-</button>
                        <input type="number" class="quantity-input" data-index="' . $index . '" value="' . $item['quantity'] . '" min="1" style="width: 30px; " />
                        <button type="button" class="increase" data-index="' . $index . '">+</button>
                    </td>
                    <td>' . $item['price'] . '</td>
                    <td class="item-total">' . $itemTotal . '</td>
                    <td><a href="http://localhost:8088/web/cart/delete?index='.$index.'">Xóa</a></td>
                </tr>';
            }

            echo "<tr id='total-row'><td colspan='3'>Tổng Cộng</td>
                <td id='total-price'>{$totalPrice}</td>
                </tr>";
            ?>
        </tbody>
    </table>
</div>

<a href="http://localhost:8088/web/cart/buy">Thanh toán</a>



<script>
document.addEventListener('DOMContentLoaded', function() {
    const decreaseButtons = document.querySelectorAll('.decrease');
    const increaseButtons = document.querySelectorAll('.increase');
    const quantityInputs = document.querySelectorAll('.quantity-input');

    const updateCart = function(index, quantity) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost:8088/web/cart/update', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                window.location.reload();
            }
        };

        xhr.send(`index=${index}&quantity=${quantity}`);

    };

    decreaseButtons.forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            const input = document.querySelector(`input.quantity-input[data-index="${index}"]`);
            const currentValue = parseInt(input.value);
            console.log("Nút giảm được nhấn")
            if (currentValue > 1) {
                input.value = currentValue - 1;

                updateCart(index, input.value);
            }
        });
    });

    increaseButtons.forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            const input = document.querySelector(`input.quantity-input[data-index="${index}"]`);
            const currentValue = parseInt(input.value);
            console.log("Nút tăng được nhấn")
            input.value = currentValue + 1;
            updateCart(index, input.value);
        });
    });

    quantityInputs.forEach(input => {
        input.addEventListener('blur', function() {
            const index = this.getAttribute('data-index');
            const newValue = parseInt(this.value);

            if (newValue >= 1) {
                updateCart(index, newValue);
            } else {
                this.value = 1;
                updateCart(index, 1);
            }
        });
    });
});
</script>