<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading" style="margin-top: 10px">
            <h2 class="text-center"><?php echo $data['title'] ?></h2>
        </div>
        <div class="panel-body">
            <a href="http://localhost:8088/web/admin/category/add"><button class="btn btn-primary"
                    style="margin-bottom: 15px">Thêm Danh Mục</button></a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width=50px>STT</th>
                        <th>Tên danh mục</th>
                        <th>Giới tính</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$index = 1;
foreach ($data['category'] as $item)
{
    $kq =              '<tr>
                            <td>'.$index.'</td>
                            <td>'.$item['name'].'</td>
                            <td>'.ucfirst($item['gender']).'</td>
                            <td><a href="http://localhost:8088/web/admin/category/update?id='.$item['id'].'">Sửa</a></td>
                            <td><a href="http://localhost:8088/web/admin/category/delete?id='.$item['id'].'">Xóa</a></td>
                        </tr>';
    echo $kq;
    $index++;
}
?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>

</html>