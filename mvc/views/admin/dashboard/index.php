<div class="body1">
    <div class="container1">
        <div class="main1">
            <div style="display: flex;justify-content: space-between;padding-right: 30px;">
                <h4>Dashboard</h4>

                <div class="date1">
                    <input type="date">
                </div>
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">
                        trending_up
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h5>Doanh thu</h5>
                            <h4>25.000VND</h4>
                        </div>
                    </div>
                    <p>Trong 24 giờ</p>
                </div>
                <div class="orders">
                    <span class="material-symbols-outlined">
                        order_approve
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h5>Số đơn hàng</h5>
                            <h4>13 Đơn hàng</h4>
                        </div>
                    </div>
                    <p>Trong 24 giờ</p>
                </div>
                <!-- end selling -->
                <!-- selling -->
                <div class="income">
                    <span class="material-symbols-outlined">
                        stacked_line_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h5>Lợi nhuận</h5>
                            <h4>25.000VND</h4>
                        </div>
                    </div>
                    <p>Trong 24 giờ</p>
                </div>
                <!-- end selling -->
            </div>
            <!-- recent order -->
            <class class="recent_order">
                <div style="display: flex;justify-content: space-between;padding-right: 30px;">
                    <h4>Đơn hàng gần đây</h4>
                    <div class="page1">
                        <button id="previousButton"><span class="material-symbols-outlined"
                                style="font-size: 13px;">
                                arrow_back_ios
                            </span></button>
                        <span id="pageInfo"></span>
                        <button id="nextButton"><span class="material-symbols-outlined"
                                style="font-size: 13px;">
                                arrow_forward_ios
                            </span></button>
                    </div>
                </div>
                <table id="recentOrderTable">
                    <thead>
                        <tr>
                            <th>Người đặt hàng</th>
                            <th>Giá trị</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà 123</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Trần Thùy Hà</td>
                            <td>456000VND</td>
                            <td>2024-03-18 16:12:50</td>
                            <td class="text-danger">Đang xử lí</td>
                            <td class="text-primary"><a href="">Chi tiết</a></td>
                        </tr>
                    </tbody>
                </table>
            </class>
            <!-- recent order -->
        </div>
        <div class="ThongKe">
            <h3>Đơn hàng theo ngày</h3>
            <div class="card1">
                <div class="card1-body">
                    <canvas id="pieChart" data-status="[50, 30, 201]"
                        data-labels='["Đang xử lý", "Đang giao hàng", "Đã giao hàng"]' width="auto" height="310" >
                    </canvas>
                </div>
            </div>
            <h3>Doanh thu theo tuần</h3>
            <div class="card1" style="margin-bottom:10px">
                <canvas id="combinedChart"
                    data-daily-labels='["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ nhật"]'
                    data-daily-sale="[20, 30, 25, 35, 30,45,23,12]"  width="auto" height="170">
                </canvas>
            </div>
        </div>
    </div>
</div>

<script src="<?=_WEB_ROOT?>/public/admin/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>