Use AngelAndBabyShop
GO

--lãi sản phẩm bán theo ngày--
CREATE FUNCTION DayProfit
(
	@date date
)
RETURNS TABLE 
AS
RETURN
	SELECT 
		p.title AS Name,
		p.inbound_price AS Inbound_price,
		p.outbound_price AS Outbound_price,
		SUM(od.num) AS sold,
		dbo.Interest(p.inbound_price, p.outbound_price, SUM(od.num)) AS Profit

	FROM 
		Product AS p
		INNER JOIN Order_Details od ON p.id = od. product_id
		INNER JOIN Orders o ON od.order_id = o.id
	WHERE
		YEAR(o.order_date) = YEAR(@date) AND MONTH(o.order_date) = MONTH(@date) AND DAY(o.order_date) = DAY(@date)
	GROUP BY
		p.title,p.inbound_price,p.outbound_price;

Drop Function DayProfit

--lệnh gọi---		
SELECT *
FROM DayProfit('2024-03-27')
ORDER BY sold;


--lãi sản phẩm bán theo tháng--
CREATE FUNCTION MonthProfit
(
	@year int,
	@month int
)
RETURNS TABLE 
AS
RETURN
	SELECT 
		p.title AS Name,
		p.inbound_price AS Inbound_price,
		p.outbound_price AS Outbound_price,
		SUM(od.num) AS sold,
		dbo.Interest(p.inbound_price, p.outbound_price, SUM(od.num)) AS Profit

	FROM 
		Product AS p
		INNER JOIN Order_Details od ON p.id = od. product_id
		INNER JOIN Orders o ON od.order_id = o.id
	WHERE
		YEAR(o.order_date) = @year AND MONTH(o.order_date) = @month
	GROUP BY
		p.title,p.inbound_price,p.outbound_price;

--lệnh gọi---
SELECT * 
FROM MonthProfit(2024,01)
ORDER BY sold;

--lãi sản phẩm bán theo năm--
CREATE FUNCTION YearProfit
(
	@year int
)
RETURNS TABLE 
AS
RETURN
	SELECT 
		p.title AS Name,
		p.inbound_price AS Inbound_price,
		p.outbound_price AS Outbound_price,
		SUM(od.num) AS sold,
		dbo.Interest(p.inbound_price, p.outbound_price, SUM(od.num)) AS Profit

	FROM 
		Product AS p
		INNER JOIN Order_Details od ON p.id = od. product_id
		INNER JOIN Orders o ON od.order_id = o.id
	WHERE
		YEAR(o.order_date) = @year
	GROUP BY
		p.title,p.inbound_price,p.outbound_price;

--lệnh gọi---
SELECT * 
FROM YearProfit(2023)
ORDER BY sold;
