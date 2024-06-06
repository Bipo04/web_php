<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                    <thead style="font-size: 20px;">
                        <tr>
                            <th>Mã đơn</th>
                            <th>Người nhận</th>
                            <th>Số điện thoại </th>
                            <th>Giá trị</th>
                            <th>Thời gian</th>
                            <th width=190px>Trạng thái</th>
                            <th style="width: 160px;">Hành động</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 15px;">
                        <?php
$index = 1;
foreach($data['orders'] as $item) {
    echo '              <tr>
                            <td>'.$index++.'</td>
                            <td>'.$item['consignee_name'].'</td>
                            <td>'.$item['phone_number'].'</td>
                            <td>'.$item['total_money'].'</td>
                            <td>'.$item['order_date'].'</td>
                            <td class="order-status">'.$item['status'].'</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="editOrder(this)"
                                    style="font-size: 15px;">Sửa</button>
                                <a href="http://localhost:8088/web/admin/order/detail?id='.$item['id'].'">
                                <button class="btn btn-outline-dark"
                                    style="font-size: 15px">Chi tiết</button></a>
                            </td>
                        </tr>';
}
?>
                        <!-- Thêm các hàng khác nếu cần -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="a" style="width=100%; height:100px;"></div>
</div>
</div>

<script src="<?php echo _WEB_ROOT ?>/public/admin/js/order.js"></script>