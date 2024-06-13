<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center">Bảng tổng hợp</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tổng số lượng sản phẩm bán ra</th>
                            <th>Tổng giá trị sản phẩm bán ra</th>
                            <th>Tổng doanh thu</th>
                            <th>Lợi nhuận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="totalProductsSold"></td>
                            <td class="totalSalesValue"></td>
                            <td class="totalRevenue"></td>
                            <td class="totalProfit"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-2 text-gray-800 text-center">Thống kê theo sản phẩm</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá vốn</th>
                            <th>Giá bán</th>
                            <th>Số lượng bán</th>
                            <th>Doanh thu</th>
                            <th>Lợi nhuận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$index = 1;
foreach($data['revenue'] as $item) {
    echo '              <tr>
                            <td>'.$index++.'</td>
                            <td>'.$item['Name'].'</td>
                            <td class="costPrice">'.$item['Inbound_price'].'</td>
                            <td class="sellingPrice">'.$item['Outbound_price'].'</td>
                            <td class="quantitySold">'.$item['sold'].'</td>
                            <td class="revenue"></td>
                            <td class="profit"></td>
                        </tr>';
}
?>
                        <!-- Thêm các dòng khác tương tự cho các sản phẩm khác -->
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


<script>

</script>