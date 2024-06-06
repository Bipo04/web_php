function toggleInfo(card) {
    var infoTable = card.querySelector(".info-table");
    if (infoTable.style.display === "block") {
        infoTable.style.display = "none"; // Ẩn bảng nếu đã hiển thị
    } else {
        infoTable.style.display = "block"; // Hiển thị bảng nếu chưa hiển thị
        infoTable.style.height = infoTable.scrollHeight + "px"; // Thiết lập chiều cao cho hiệu ứng trượt xuống
    }
}
function deleteProduct(event, btn) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của button (tránh reload trang)

    var productRow = btn.closest('.row.align-items-center'); // Tìm hàng chứa nút "Xóa" bằng cách đi lên DOM tree
    var tableBody = productRow.parentNode; // Lấy phần body của bảng chứa sản phẩm

    // Lấy ID của sản phẩm sẽ bị xóa (ở đây lấy từ thẻ <p> trong cột đầu tiên của hàng sản phẩm)
    var deletedProductId = parseInt(productRow.querySelector('.content').innerText);

    // Xóa hàng sản phẩm khỏi danh sách
    tableBody.removeChild(productRow);
}
function deleteProduct(event, btn) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của button (tránh reload trang)

    var productRow = btn.closest('.row.align-items-center'); // Tìm hàng chứa nút "Xóa" bằng cách đi lên DOM tree
    var tableBody = productRow.parentNode; // Lấy phần body của bảng chứa sản phẩm

    var productHeight = productRow.clientHeight; // Lấy chiều cao của hàng sản phẩm sẽ bị xóa

    // Xóa hàng sản phẩm khỏi danh sách
    tableBody.removeChild(productRow);

    // Lấy chiều cao hiện tại của khung sau khi xóa sản phẩm
    var currentHeight = tableBody.clientHeight;

    // Cập nhật lại chiều cao của khung sau khi xóa sản phẩm
    tableBody.style.height = (currentHeight - productHeight) + 'px';
}
function deleteProduct2(event, btn) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của button (tránh reload trang)

    var productRow = btn.closest('.card'); // Tìm hàng chứa nút "Xóa" bằng cách đi lên DOM tree
    if (!productRow) {
        console.error('Không tìm thấy card để xóa.');
        return;
    }

    try {
        // Lấy phần tử cha của card (trong trường hợp này là danh sách các card)
        var cardList = productRow.parentNode;
        // Xóa card khỏi danh sách
        cardList.removeChild(productRow);
        // Cập nhật lại ID của các card còn lại trong danh sách
        var remainingCards = cardList.querySelectorAll('.card');
        remainingCards.forEach((card, index) => {
            card.querySelector('.lead').textContent = (index + 1).toString(); // Cập nhật ID
        });
    } catch (error) {
    }
}
