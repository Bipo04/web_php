<style>
:root {
    --clr-primary: #7380ec;
    --clr-danger: #ff7782;
    --clr-success: #41f1b6;
    --clr-white: #fff;
    --clr-info-dark: #7d8da1;
    --clr-info-light: #dce1eb;
    --clr-dark: #363949;
    --clr-warnig: #ff4edc;
    --clr-light: rgba(132, 139, 200, 0.18);
    --clr-primary-variant: #111e88;
    --clr-dark-variant: #677483;
    --clr-color-background: #f6f6f9;

    --card-border-radius: 2rem;
    --border-radius-1: 0.4rem;
    --border-radius-2: 0.8rem;
    --border-radius-3: 1.2rem;

    --card-padding: 1.8rem;
    --padding-1: 1.2rem;
    --box-shadow: 0rem 0rem 3rem var(--clr-light);
}

.container1 {
    display: grid;
    width: 96%;
    gap: 1.8rem;
    grid-template-columns: auto 40rem;
    margin: 0 auto;
}

.main1 {
    width: auto;
}

.content-table,
.tableTSP {
    border-collapse: collapse;
    margin: 25px 0 0 0;
    font-size: 0.9em;
    width: 100%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    font-size: 13px;
}

.content-table thead tr {
    background-color: #0759f190;
    color: #fff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
}

.content-table tr .img-tb1-name {
    min-width: 350px;
}

.content-table tbody tr {
    border-bottom: 1px solid #ddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:hover {
    font-weight: bold;
    color: #0759f190;
}

.TopSellingProduct {
    margin-left: 5px;
    transition: all .3s ease;
}

.TopSellingProduct>h2 {
    padding: auto;
}

.tableTSP thead tr {
    background-color: #0759f190;
    color: #fff;
    text-align: left;
    font-weight: bold;
}

.tableTSP th,
.tableTSP td {
    padding: 12px 15px;
    text-align: center;
}

.tableTSP tbody tr {
    border-bottom: 1px solid #ddd;
}

/* .tableTSP tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
} */

.tableTSP .imgTSP {
    width: 50px;
}

.page1 {
    font-size: 13px;
    display: flex;
}

.page1 button {
    background-color: var(--clr-white);
    width: 100%;
    border-radius: var(--card-border-radius);
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: all .3s ease;
    color: var(--clr-dark);
    width: 25px;
    height: 24.7px;
    border: 0.2px;
}
</style>

<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center"><?php echo $data['title'] ?></h1>
    <div class="container1">
        <div class="main1">
            <div class="table1">
                <!-- Thống kê sản phẩm  -->
                <h2>Thống kê sản phẩm</h2>
                <div style="display: flex;justify-content: space-between;padding-right: 30px;">
                    <div style="display: flex;">
                        <div style="min-width: 90px;font-size: 14px;padding: auto;">Sap xep theo:</div>
                        <select id="selectOption" class=" form-select" aria-label="Default select example"
                            style="font-size: 13px;">
                            <option value="1">Tất cả</option>
                            <option value="2">Ngày</option>
                            <option value="3">Tháng</option>
                            <option value="4">Năm</option>
                        </select>
                    </div>
                    <div class="page1">
                        <button id="previousButton"><span class="material-symbols-outlined" style="font-size: 13px;">
                                arrow_back_ios
                            </span></button>
                        <span id="pageInfo"></span>
                        <button id="nextButton"><span class="material-symbols-outlined" style="font-size: 13px;">
                                arrow_forward_ios
                            </span></button>
                    </div>
                </div>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>In_bound</th>
                            <th>Out_bound</th>
                            <th>Sold</th>
                            <th>Interest</th>
                        </tr>
                    </thead>
                    <!-- Thong ke theo tat ca -->
                    <tbody id="data1">
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                    </tbody>
                    <!-- Thong ke theo Ngay -->
                    <tbody id="data2" class="hidden">
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                    </tbody>
                    <!-- Thong ke theo Thang -->
                    <tbody id="data3" class="hidden">
                        <tr>
                            <td>3</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                    </tbody>
                    <!-- Thong ke theo Nam -->
                    <tbody id="data4" class="hidden">
                        <tr>
                            <td>4</td>
                            <td class="img-tb1-name">Bộ thô ngắn tay bé gái Rabity</td>
                            <td>129000</td>
                            <td>229000</td>
                            <td>4</td>
                            <td>400000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Top Sale -->
        <div class="TopSellingProduct">
            <h2>Top 20 sản phẩm bán chạy</h2>
            <div>
                <table class="tableTSP">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ao ba lo</td>
                            <td><img class="imgTSP" src="/Product_img/ao_ba_lo_trai/ba_lo_1.jpg" alt=""></td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_gio_elsa/ao_khoac_elsa_1.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_ni_bong_be_trai/ao_ni_bong_3.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_thun_polo/polo_trai_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_thun_co_be/ao_thun_co_be_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_gio_marvel_be_trai/ao_khoac_marvel_2.jpg"
                                    alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_thun_co_be/ao_thun_co_be_3.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ao elsa</td>
                            <td><img class="imgTSP" src="/Product_img/ao_khoac_kaki_be_gai/ao_khoac_kaki_2.jpg" alt="">
                            </td>
                            <td>13</td>
                        </tr>
                    </tbody>
                </table>
                <div class="page1" style="font-size: 13px;padding-left: 250px;padding-top: 5px;">
                    <button id="previousButton1"><span class="material-symbols-outlined" style="font-size: 13px;">
                            arrow_back_ios
                        </span></button>
                    <span id="pageInfo1"></span>
                    <button id="nextButton1"><span class="material-symbols-outlined" style="font-size: 13px;">
                            arrow_forward_ios
                        </span></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="a" style="width=100%; height:100px;"></div>
</div>
</div>