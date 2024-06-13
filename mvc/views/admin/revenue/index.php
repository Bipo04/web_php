<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
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

    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
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
                        <tr>
                            <td>1</td>
                            <td>Sản phẩm A</td>
                            <td class="costPrice">10000</td>
                            <td class="sellingPrice">15000</td>
                            <td class="quantitySold">100</td>
                            <td class="revenue"></td>
                            <td class="profit"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sản phẩm B</td>
                            <td class="costPrice">100000</td>
                            <td class="sellingPrice">150000</td>
                            <td class="quantitySold">130</td>
                            <td class="revenue"></td>
                            <td class="profit"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sản phẩm C</td>
                            <td class="costPrice">20000</td>
                            <td class="sellingPrice">35000</td>
                            <td class="quantitySold">180</td>
                            <td class="revenue"></td>
                            <td class="profit"></td>
                        </tr>
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