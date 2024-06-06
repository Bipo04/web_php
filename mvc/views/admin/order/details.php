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
</style>
<div class="container">
    <div class="content-container">
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
                <div style="padding:5px">Thông tin người đặt hàng:
                    <span>Anh A</span>
                </div>
                <!-- <table style="width: 100%;">
                    <tr>
                        <td style="width: 57.5%;">Người đặt hàng
                            <p class="userorder1">Anh A</p>
                        </td>
                        <td style="width: 21.25%;text-align:center;">Tổng
                            <p class="sum1">300000 VND</p>
                        </td>
                        <td style="width: 21.25%;text-align:center;">Trạng thái
                            <p class="status1">Đang xử lý</p>
                        </td>
                    </tr>
                </table> -->
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
                <div style="padding:5px">Thông tin người đặt hàng:
                    <span>Anh A</span>
                </div>
            </div>
        </div>
    </div>
</div>