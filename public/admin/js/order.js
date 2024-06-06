function editOrder(button) {
    const orderRow = button.closest('tr');
    const statusCell = orderRow.querySelector('.order-status');
    const editButton = button;
    console.log(editButton.textContent);
    if (editButton.textContent === "Sửa") {
        // Lưu trạng thái hiện tại
        const currentStatus = statusCell.textContent;
        // Tạo dropdown
        statusCell.innerHTML = `
            <select class="form-control">
                <option ${currentStatus === 'Đang xử lý' ? 'selected' : ''}>Đang xử lý</option>
                <option ${currentStatus === 'Đang giao hàng' ? 'selected' : ''}>Đang giao hàng</option>
                <option ${currentStatus === 'Đã giao hàng' ? 'selected' : ''}>Đã giao hàng</option>
            </select>
        `;
        // Đổi nút thành "Lưu"
        editButton.textContent = "Lưu";
        editButton.classList.remove('btn-outline-primary');
        editButton.classList.add('btn-outline-success');
    } else {
        // Lấy trạng thái mới từ dropdown
        const newStatus = statusCell.querySelector('select').value;
        // Cập nhật trạng thái trong bảng
        statusCell.textContent = newStatus;

        // Đổi nút lại thành "Chỉnh sửa"
        editButton.textContent = "Sửa";
        editButton.classList.remove('btn-outline-success');
        editButton.classList.add('btn-outline-primary');
    }
}
