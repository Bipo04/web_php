<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
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
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thao tác</th>
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
                                <td>'.$item['name'].'</td>
                                <td>'.$item['price'].'</td>
                                <td>'.$item['quantity'].'</td>
                                <th><a href="http://localhost:8088/web/admin/product/delete?id='.$item['id'].'">Xóa</a></th>
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