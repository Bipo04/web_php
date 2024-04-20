<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center"><?php echo $data['title'] ?></h2>
			</div>
            <div class="panel-body">
                <a href="view.php?act=cate_add"><button class="btn btn-success" style="margin-bottom: 15px">Thêm Danh Mục</button></a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width=50px>STT</th>
                            <th>Tên sản phẩm</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
$index = 1;
foreach ($data['category'] as $item)
{
    $kq =              '<tr>
                            <td>'.$index.'</td>
                            <td>'.$item['Category_name'].'</td>
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