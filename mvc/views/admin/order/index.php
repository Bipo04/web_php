<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <a href="http://localhost:8088/web/admin/category/add"><button class="btn btn-primary"
            style="margin-bottom: 15px">Thêm Danh Mục</button></a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="font-size: 20px;">
                        <tr>
                            <th>STT</th>
                            <th style="min-width: 100px;">Người nhận</th>
                            <th>Số điện thoại </th>
                            <th style="min-width: 150px;">Địa chỉ</th>
                            <th>Thời gian đặt hàng</th>
                            <th style="min-width: 150px;">Giá trị đơn hàng </th>
                            <th style="min-width: 150px;">Trạng thái </th>
                            <th style="min-width: 150px;">Hành động</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 15px;">
                        <tr>
                            <td>1</td>
                            <td>Nguyễn Văn A</td>
                            <td>0987654321</td>
                            <td>123 Đường ABC, Quận 1</td>
                            <td>2024-06-06 10:30 AM</td>
                            <td>1,000,000 VND</td>
                            <td class="order-status">Đang xử lý</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="editOrder(this)"
                                    style="font-size: 15px;width: 90px;">Chỉnh
                                    sửa</button>
                                <button class="btn btn-outline-dark" onclick="detailsOrder(this)"
                                    style="font-size: 15px">Chi tiết</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Trần Thị B</td>
                            <td>0912345678</td>
                            <td>456 Đường DEF, Quận 3</td>
                            <td>2024-06-06 11:15 AM</td>
                            <td>750,000 VND</td>
                            <td class="order-status">Đã giao hàng</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="editOrder(this)"
                                    style="font-size: 15px;width: 90px;">Chỉnh
                                    sửa</button>
                                <button class="btn btn-outline-dark" onclick="detailsOrder(this)"
                                    style="font-size: 15px">Chi tiết</button>
                            </td>
                        </tr>
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