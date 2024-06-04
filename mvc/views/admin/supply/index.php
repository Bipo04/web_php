<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading" style="margin-top: 10px">
            <h2 class="text-center"><?php echo $data['title'] ?></h2>
        </div>
        <div class="panel-body">
            <a href="http://localhost:8088/web/admin/product/add"><button class="btn btn-primary"
                    style="margin-bottom: 15px">Thêm Nhà Phân Phối</button></a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width=40px>STT</th>
                        <th>Tên nhà phân phối</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$index = 1;
if($data['supplies'])
{
    foreach ($data['supplies'] as $item)
    {
        $kq =              '<tr>
                                <td>'.$index.'</td>
                                <td>'.$item['name'].'</td>
                                <td>'.$item['address'].'</td>
                                <td>'.$item['phone'].'</td>
                                <td>'.$item['email'].'</td>
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
</div>
</div>
</div>