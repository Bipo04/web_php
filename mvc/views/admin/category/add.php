<div class="container" style="width:60%">
    <div class="panel-heading" style="margin-top: 10px">
        <h2 class=" text-center"><?php echo $data['title'] ?></h2>
    </div>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="">Tên</label>
            <input type="text" name="category_name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="gender">Giới tính</label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>
</div>
</div>
</div>