<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading" style="margin-top: 10px; margin-bottom: 20px">
            <h2 class="text-center"><?php echo $data['title'] ?></h2>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width=40px>STT</th>
                        <th width=220px>Họ và tên</th>
                        <th width=120px>Tên đăng nhập</th>
                        <th width=140px>Số điện thoại</th>
                        <th width=250px>Email</th>
                        <th>Role</th>
                        <th>Ngày tạo</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$index = 1;
if($data['users'])
{
    foreach ($data['users'] as $item)
    {
        $kq =              '<tr>
                                <td>'.$index.'</td>
                                <td>'.$item['fullname'].'</td>
                                <td>'.$item['username'].'</td>
                                <td>'.$item['phone_number'].'</td>
                                <td>'.$item['email'].'</td>
                                <td>'.$item['name'].'</td>
                                <td>'.$item['created_at'].'</td>
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