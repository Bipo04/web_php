<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <a href="http://localhost:8088/web/admin/supply/add"><button class="btn btn-primary"
            style="margin-bottom: 15px">Thêm Nhà Cung Cấp</button></a>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width=40px>STT</th>
                            <th>Tên nhà phân phối</th>
                            <th>Địa chỉ</th>
                            <th>Phone</th>
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
        $kq =              '<tr id="'.$item['id'].'">
                                <td>'.$index.'</td>
                                <td>'.$item['name'].'</td>
                                <td>'.$item['address'].'</td>
                                <td>'.$item['phone'].'</td>
                                <td>'.$item['email'].'</td>
                                <td>
                                <button class="btn btn-primary"
                                    onclick="editBtn(this)">Sửa</button>
                                </td>
                                <td>
                                <button class="btn btn-danger"
                                    onclick="deleteBtn(this)">Xóa</button>
                                </td>
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
<div class="a" style="width=100%; height:100px;"></div>
</div>
</div>

<script>
function editBtn(btn) {
    var row = btn.parentNode.parentNode;
    var deletedId = row.id;
    console.log(deletedId);
    window.location.href = "http://localhost:8088/web/admin/supply/update?id=" + `${deletedId}`;
}

function deleteBtn(btn) {
    var row = btn.parentNode.parentNode;
    var table = row.parentNode;
    var deletedId = row.id; // Get the ID part from 'row-ID'
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                // Remove row from table
                table.removeChild(row);
                // Update row numbers
                var rows = table.getElementsByTagName('tr');
                for (var i = 0; i < rows.length; i++) {
                    var cells = rows[i].getElementsByTagName('td');
                    if (cells.length > 0) {
                        cells[0].innerText = i + 1;
                    }
                }
            }
        }
    };

    xhr.open('POST', 'http://localhost:8088/web/admin/supply/delete', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`id=${deletedId}`);
}
</script>