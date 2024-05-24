Use AngelAndBabyShop
GO

--view doanh thu bán hàng theo tháng
CREATE VIEW MonthlyRevenue 
AS
SELECT 
    YEAR(order_date) AS Year, 
    MONTH(order_date) AS Month, 
    SUM(total_money) AS MonthlyRevenue
FROM 
    Orders
GROUP BY 
    YEAR(order_date), 
    MONTH(order_date);

--view giá nhập, giá bán và số lượng bán của từng sản phẩm
CREATE VIEW Sale 
AS
SELECT 
	p.title AS Name,
	p.inbound_price AS Inbound_price,
	p.outbound_price AS Outbound_price,
	SUM(od.num) AS sold,
	dbo.Interest(p.inbound_price, p.outbound_price, SUM(od.num)) AS Interest

FROM 
	Product AS p
	INNER JOIN Order_Details od ON p.id = od. product_id
	INNER JOIN Orders o ON od.order_id = o.id
GROUP BY
	p.title,p.inbound_price,p.outbound_price;


--gọi view
SELECT * FROM Sale
ORDER BY sold

--gọi view 
SELECT * FROM MonthlyRevenue
ORDER BY YEAR, MONTH;

--cập nhật lại status của đơn hàng
UPDATE Orders 
SET status = N'Đã giao'
WHERE YEAR(order_date) < 2024;

UPDATE Orders 
SET status = N'Đã giao'
WHERE YEAR(order_date) = 2024 AND MONTH(order_date) < 3;

UPDATE Orders 
SET status = N'Đang giao'
WHERE YEAR(order_date) = 2024 AND MONTH(order_date) = 3;

UPDATE Orders 
SET status = N'Đang xử lí'
WHERE YEAR(order_date) = 2024 AND MONTH(order_date) > 3;