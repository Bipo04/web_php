<div class="container">
    <div class="content-container">
        <h3 style="text-align: center;">Đơn hàng của bạn</h3>
        <div class="card" style="margin-bottom: 10px;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="name_col" style="display: none;"></div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="name_col">Tên sản phẩm</div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="name_col">Số lượng</div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="name_col">Giá bán</div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="name_col">Thành tiền</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <?php
$totalPrice = 0;
foreach($_SESSION['cart'] as $item) {
    $totalPrice += $item['price']*$item['quantity'];
    echo '
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-md-2">
                <img src="'._WEB_ROOT.'/public/clients/images/'.$item['image'].'.jpg"
                    class="img-fluid" alt="Generic placeholder image">
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="content_col">'.$item['title'].'</div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
                <div class="content_col">1</div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
                <div class="content_col">'.$item['price'].'</div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
                <div class="content_col">'.$item['price']*$item['quantity'].'</div>
            </div>
        </div>
    </div>
    <div class="float-end">
        <p class="sum">
            <span style="font-size: 16px;padding-right: 5px;">Tổng thanh toán: </span>
            <span style="font-size: 16px;padding-right: 40px;"><?=$totalPrice?></span>
            </p>
        </div>';
        }
        ?>
    </div>
    <div class="fixed-box">
        <div class="bottom-box float-end">
            <p class="sum">
                <span style="font-size: 16px;padding-right: 5px;">Tổng thanh toán: </span>
                <span style="font-size: 16px;padding-right: 40px;"><?=$totalPrice?></span>
            </p>
        </div>
    </div>
    <h6>Thông tin nhận hàng</h6>
    <div class="card">
        <!-- <div>
            <div>
                <label for="fullname">Họ tên người nhận:</label>
                <input type="text" id="fullname" name="fullname" value="Nguyễn Văn A" readonly>
            </div>
            <div>
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="phone" value="0987654321" readonly>
            </div>
            <div>
                <label for="username">Địa chỉ nhận hàng:</label>
                <input type="text" id="address" name="address" value="quận Hoàng Mai, Hà Nội" readonly>
            </div>
            <div class="float-end">
                <button class="btn btn-primary Update">Thay đổi thông tin</button>
                <button class="btn btn-primary Save hidden">Lưu thay đổi</button>
                <button class="btn btn-primary Buy">Đặt mua</button>
            </div>
        </div> -->
    </div>
</div>
</div>