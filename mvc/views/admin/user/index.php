<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <!-- <a href="http://localhost:8088/web/admin/user/add"><button class="btn btn-primary" style="margin-bottom: 15px">Thêm
            tài khoản</button></a> -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th width=250px>Họ và tên</th>
                            <th width=110px>Tên đăng nhập</th>
                            <th width=140px>Số điện thoại</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Ngày tạo</th>
                            <th colspan="2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $index = 1;
                    if ($data['users']) {
                        foreach ($data['users'] as $item) {
                            $kq = '<tr id="'.$item['id'].'">
                                        <td>' . $index . '</td>
                                        <td>' . $item['fullname'] . '</td>
                                        <td>' . $item['username'] . '</td>
                                        <td>' . $item['phone_number'] . '</td>
                                        <td>' . $item['email'] . '</td>
                                        <td>' . ucfirst($item['name']) . '</td>
                                        <td>' . $item['created_at'] . '</td>
                                        <td>
                                        <button class="btn btn-primary"
                                            onclick="editUser(this)">Sửa</button>
                                        </td>
                                        <td>
                                        <button class="btn btn-danger"
                                            onclick="deleteUser(this)">Xóa</button>
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
function editUser(btn) {
    var row = btn.parentNode.parentNode;
    var roleCell = row.cells[5]; // Cột vai trò của người dùng
    var currentRole = roleCell.innerText.trim(); // Lấy vai trò hiện tại của người dùng

    // Tạo một dropdown để chọn vai trò mới
    var selectRole = document.createElement('select');
    selectRole.classList.add('form-select'); // Thêm lớp để xác định kích thước chữ

    // Tạo các tùy chọn cho dropdown (user và admin)
    var optionUser = document.createElement('option');
    optionUser.value = 'User';
    optionUser.text = 'User';
    var optionAdmin = document.createElement('option');
    optionAdmin.value = 'Admin';
    optionAdmin.text = 'Admin';

    // Chọn tùy chọn hiện tại dựa trên vai trò của người dùng
    if (currentRole === 'User') {
        optionUser.selected = true;
    } else if (currentRole === 'Admin') {
        optionAdmin.selected = true;
    }

    // Thêm các tùy chọn vào dropdown
    selectRole.add(optionUser);
    selectRole.add(optionAdmin);

    // Xóa nội dung hiện tại của ô vai trò
    roleCell.innerHTML = '';

    // Thêm dropdown vào ô vai trò
    roleCell.appendChild(selectRole);

    // Thay đổi nút chỉnh sửa thành "Xác nhận"
    var editButton = row.querySelector('.btn-primary');
    editButton.innerText = 'OK';
    editButton.setAttribute('onclick', 'confirmEdit(this)');
}

function confirmEdit(btn) {
    var row = btn.parentNode.parentNode;
    var roleCell = row.cells[5]; // Cột vai trò của người dùng
    var selectRole = roleCell.querySelector('select');

    // Lấy vai trò mới từ dropdown
    var newRole = selectRole.value;
    var UserId = row.id;

    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Cập nhật vai trò của người dùng
            roleCell.innerText = newRole;
        }
    };

    xhr.open('POST', 'http://localhost:8088/web/admin/user/update', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`id=${UserId}&role=${newRole}`);

    // Thay đổi nút "Xác nhận" thành "Sửa" và gán lại hàm chỉnh sửa
    btn.innerText = 'Sửa';
    btn.setAttribute('onclick', 'editUser(this)');
}


function deleteUser(btn) {
    var row = btn.parentNode.parentNode;
    var table = row.parentNode;

    // Lấy ID của sản phẩm sẽ bị xóa
    var deletedUserId = row.id;

    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Xóa hàng
            table.removeChild(row);

            // Cập nhật ID của các sản phẩm dưới
            var rows = table.rows;
            for (var i = 0; i < rows.length; i++) {
                var currentProductId = parseInt(rows[i].cells[0].innerText);
                if (currentProductId > deletedUserId) {
                    rows[i].cells[0].innerText = currentProductId - 1;
                }
            }
        }
    };

    xhr.open('POST', 'http://localhost:8088/web/admin/user', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`id=${deletedUserId}`); // Corrected the variable name
}
</script>