<style>
textarea {
    height: 100px;
    width: 100%;
    font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
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
            <label for="">Ảnh</label>
            <input type="file" name="img[]" class="form-control" multiple>
        </div>
        <div class="form-group mb-3">
            <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>
</div>
<div class="a" style="width=100%; height:100px;"></div>
</div>
</div>