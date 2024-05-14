<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading" style="margin-top: 10px">
            <h2 class="text-center"><?php echo $data['title'] ?></h2>
        </div>
        <div class="panel-body">
            <a href="http://localhost:8088/web/admin/product/add"><button class="btn btn-primary"
                    style="margin-bottom: 15px">Thêm Sản
                    Phẩm</button></a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width=50px>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$index = 1;
if($data['product'])
{
    foreach ($data['product'] as $item)
    {
        $kq =              '<tr>
                                <td>'.$index.'</td>
                                <td>'.$item['title'].'</td>
                                <td>'.$item['inbound_price'].'</td>
                                <td>'.$item['outbound_price'].'</td>
                                <td>'.$item['discount'].'</td>
                                <td>'.$item['quantity'].'</td>
                                <td><a href="http://localhost:8088/web/admin/product/update?id='.$item['id'].'">Sửa</a></td>
                                <td><a href="http://localhost:8088/web/admin/product/delete?id='.$item['id'].'">Xóa</a></td>
                            </tr>';
        echo $kq;
        $index++;
    }
}
?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>

</html>