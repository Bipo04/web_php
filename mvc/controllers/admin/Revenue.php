<?php
class Revenue extends Controller {
    public $OrdersModel;

    public function __construct() {
        $this->OrdersModel = $this->model('OrdersModels');
    }

    public function index() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $kind = 'day';
            $currentMonth = date('m') /10*10;
            $currentYear = date('Y');
            if(isset($_GET['type'])) {
                $kind = $_GET['type'];
                if($_GET['type'] == 'day') {
                    $start = $_GET['date-start'];
                    $end = $_GET['date-end'];
                    $a = ['start' => $start,
                        'end' => $end,
                        'currentMonth' => $currentMonth,
                        'currentYear' => $currentYear];
                    $data = $this->OrdersModel->queryExecute("SELECT Id, Name, Inbound_price, sold, Revenue,  
                                                            (Revenue - Inbound_price * sold) as Profit
                                                            FROM DayRevenue('".$start."','".$end."')
                                                            ORDER BY Id"
                                                            );
                    $data1 = $this->OrdersModel->queryExecute("SELECT
                                                            SUM(sold) AS Sold,
                                                            SUM(Revenue) AS TotalRevenue, 
                                                            SUM(Revenue - Inbound_price * sold) AS Profit
                                                            FROM DayRevenue('".$start."','".$end."');"
                                                            );
                }
                if($_GET['type'] == 'month') {
                    $month = $_GET['month'];
                    $year = $_GET['year'];
                    $a = ['month' => $month,
                        'year' => $year,
                        'currentMonth' => $currentMonth,
                        'currentYear' => $currentYear];
                    $data = $this->OrdersModel->queryExecute("SELECT Id, Name, Inbound_price, sold, Revenue,  
                                                            (Revenue - Inbound_price * sold) as Profit
                                                            FROM MonthRevenue(".$year.",".$month.")
                                                            ORDER BY Id"
                                                            );
                    $data1 = $this->OrdersModel->queryExecute("SELECT
                                                            SUM(sold) AS Sold,
                                                            SUM(Revenue) AS TotalRevenue, 
                                                            SUM(Revenue - Inbound_price * sold) AS Profit
                                                            FROM MonthRevenue(".$year.",".$month.")"
                                                            );
                }
                if($_GET['type'] == 'year') {
                    $year = $_GET['year'];
                    $a = ['year' => $year,
                        'currentMonth' => $currentMonth,
                        'currentYear' => $currentYear];
                    $data = $this->OrdersModel->queryExecute("SELECT Id, Name, Inbound_price, sold, Revenue,  
                                                            (Revenue - Inbound_price * sold) as Profit
                                                            FROM YearRevenue(".$year.")
                                                            ORDER BY Id"
                                                            );
                    $data1 = $this->OrdersModel->queryExecute("SELECT
                                                            SUM(sold) AS Sold,
                                                            SUM(Revenue) AS TotalRevenue, 
                                                            SUM(Revenue - Inbound_price * sold) AS Profit
                                                            FROM YearRevenue(".$year.")"
                                                            );
                }
            }
            else {
                $date = date('Y-m-d');
                $a = ['start' => $date,
                        'end' => $date];
                $data = $this->OrdersModel->queryExecute("SELECT Id, Name, Inbound_price, sold, SUM(Revenue) as Revenue,  
                                                        SUM((Revenue - Inbound_price * sold)) as Profit
                                                        FROM DayRevenue('".$date."','".$date."')
                                                        GROUP BY Id, Name, Inbound_price, sold"
                                                        );
                $data1 = $this->OrdersModel->queryExecute("SELECT
                                                        SUM(sold) AS Sold,
                                                        SUM(Revenue) AS TotalRevenue, 
                                                        SUM(Revenue - Inbound_price * sold) AS Profit
                                                        FROM DayRevenue('".$date."','".$date."');"
                                                        );
            }
            $this->view('layouts/admin_layout', [
                'page' => 'revenue/index',
                'type' => 'bcao',
                'revenue' => $data,
                'tongquat'=> $data1[0],
                'kind' => $kind,
                'a' => $a,
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }
}
?>