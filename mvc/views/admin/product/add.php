<div class="container" style="width:60%">
    <div class="panel-heading">
        <h2 class="text-center"><?php echo $data['title'] ?></h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Giá</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Số lượng</label>
            <input type="text" name="quantity" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Product Category</label>
            <input type="text" name="product_category_id" class="form-control">
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
</div>
</div>