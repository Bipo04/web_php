<style>
    .card1 {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
        display: flex; 
        align-items: center; 
    }
    .card1-info{
        display: flex;
        width: 100%;
        justify-content: center;
    }
    .card1-info .box1 {
        width: 25%;
        text-align: center;
    }
    .card1child {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 10px; 
        align-items: center; 
    }
    .card1child-img{
        width: 15%;
    }
    .card1child-info{
        display: flex;
        width: 100%;
        justify-content: center;
    }
    .card1child-info .box1child {
        width: 25%;
        text-align: center;
        margin:auto;  
    }
    .user1order{
        margin-left:20px;
        display:flex;
    }
</style>
<div class="container">
    <div class="content-container" style="margin-left:30px;">
        <div style="text-align:center;font-size: 25px;">Thông tin đơn hàng</div>
        <div style="padding:0 20px;">
            <p style="margin-bottom:5px;"><strong>Người nhận: </strong>Bùi Thúy Hương</p>
            <p style="margin-bottom:5px;"><strong>Số điện thoại: </strong>0241620594</p>
            <p style="margin-bottom:5px;"><strong>Địa chỉ: </strong>55 Đường M, Quận Cầu Giấy, Hà Nội</p>
        </div>  
        <div class="card1">
            <div style="width: 15%;"></div>
            <div class="card1-info">
                <div class="box1">Tên sản phẩm </div>
                <div class="box1">Số lượng </div>
                <div class="box1">Giá bán</div>
                <div class="box1">Thành tiền</div>
            </div>
        </div>
        <!-- 1 san pham  -->
        <div class="card1child">
            <div style="display: flex;">
                <div class="card1child-img"><img src="\web\Product_img\ao_ba_lo_trai\ba_lo_1.jpg" alt="Ba lỗ" class="img-fluid"></div>
                <div class="card1child-info">
                    <div class="box1child">Áo ba lỗ</div>
                    <div class="box1child">3</div>
                    <div class="box1child">100000 VND</div>
                    <div class="box1child">300000 VND</div>
                </div>
            </div>
        </div>
        <!-- het 1 san pham  -->
        <div class="card1child">
            <div style="display: flex;">
                <div class="card1child-img"><img src="\web\Product_img\ao_ba_lo_trai\ba_lo_1.jpg" alt="Ba lỗ" class="img-fluid"></div>
                <div class="card1child-info">
                    <div class="box1child">Áo ba lỗ</div>
                    <div class="box1child">3</div>
                    <div class="box1child">100000 VND</div>
                    <div class="box1child">300000 VND</div>
                </div>
            </div>
        </div>
        <div style="display: flex;font-size:20px;margin-bottom:20px">
            <div style="width:80%;"></div>
            <div><strong>Tổng:</strong></div>
            <div style="width:2%"></div>
            <div class="sum1">
                <span>600000 VND</span>
            </div>
        </div>
    </div>
</div>