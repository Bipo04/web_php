<style>
textarea {
    height: 100px;
    width: 100%;
    font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

/* user.css */
#previewImages {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.image-container {
    position: relative;
    width: 200px;
    height: 200px;
    overflow: hidden;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.close-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background: transparent;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
}
</style>
<div class="container" style="width:60%">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="">Tên</label>
            <input type="text" name="title" class="form-control" value="<?=$data['product']['title'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Danh mục</label>
            <input type="text" name="category_name" class="form-control"
                value="<?=$data['product']['category_name'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Giới tính</label>
            <select name="gender" id="gender" class="form-control">
                <option value="boy" <?php if($data['product']['gender'] == 'boy') echo 'selected'; ?>>Nam</option>
                <option value="girl" <?php if($data['product']['gender'] == 'girl') echo 'selected'; ?>>Nữ</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="">Nhà cung cấp</label>
            <input type="text" name="supply" class="form-control" value="<?=$data['product']['supply'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Giá nhập</label>
            <input type="text" name="inbound_price" class="form-control"
                value="<?=$data['product']['inbound_price'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Giá bán</label>
            <input type="text" name="outbound_price" class="form-control"
                value="<?=$data['product']['outbound_price'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Giá discount</label>
            <input type="text" name="discount" class="form-control" value="<?=$data['product']['discount'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Số lượng</label>
            <input type="text" name="quantity" class="form-control" value="<?=$data['product']['quantity'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Mô tả</label>
            <div><textarea name="description" id=""
                    style="height=100%; weight=100%; color: #6e707e;border: 1px solid #d1d3e2; border-radius: .35rem;"><?=$data['product']['description'] ?></textarea>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="imageUpload" class="form-label">Ảnh:</label>
            <input type="file" class="form-control" id="imageUpload" name="imageUpload" multiple
                onchange="previewImages(event)">
        </div>
        <div class="mb-3" id="previewImages">
            <?php
$images = explode(',',$data['product']['thumbnail']);
foreach($images as $item) {
    echo '<div class="image-container">
                <img src="'._WEB_ROOT.'/public/clients/images/'.$item.'.jpg" alt="">
            <button class="close-button">x</button>
        </div>';
        }
        ?>
        </div>
        <input type="hidden" name="id" value="<?=$data['id'] ?>">
        <div class="form-group mb-3">
            <input type="submit" name="btn" class="btn btn-primary" value="Cập nhật">
        </div>
    </form>
</div>
</div>
<div class="a" style="width=100%; height:100px;"></div>
</div>
</div>

<script>
// Lấy vị trí hiển thị ảnh là thẻ div previewImagé
function previewImages(event) {
    var previewContainer = document.getElementById('previewImages');
    var files = event.target.files;
    // Vòng lặp thêm ảnh và các thẻ liên quan
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();
        reader.onload = function(e) {
            // tạo thẻ div có class image-container
            var imageContainer = document.createElement('div');
            imageContainer.classList.add('image-container');
            // tạo img
            var image = document.createElement('img');
            image.src = e.target.result;
            image.alt = file.name;
            // tạo button
            var closeButton = document.createElement('button');
            closeButton.classList.add('close-button');
            closeButton.innerHTML = 'x';
            // Thêm hàm cho btn
            closeButton.addEventListener('click', deleteImage);
            //thêm các thẻ
            imageContainer.appendChild(image);
            imageContainer.appendChild(closeButton);
            previewContainer.appendChild(imageContainer);
        };
        reader.readAsDataURL(file);
    }
}
// Thêm xóa cho class của btn
var closeButtons = document.querySelectorAll('.close-button');
closeButtons.forEach(function(button) {
    button.addEventListener('click', deleteImage);
});
//Xóa ảnh khi nhấn nút "x"
function deleteImage(event) {
    var container = event.target.parentNode;
    container.remove();
}
s
</script>