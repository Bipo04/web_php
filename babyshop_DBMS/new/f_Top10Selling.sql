Use AngelAndBabyShop
GO

CREATE FUNCTION Top10SellingByMonth
(
	@year int,
	@month int
)
RETURNS TABLE 
AS
RETURN
	 SELECT TOP 10
        YEAR(o.order_date) AS Year,
        MONTH(o.order_date) AS Month,
        p.id,
        p.title,
        SUM(od.num) AS total_quantity_sold
    FROM
        Product AS p
        INNER JOIN Order_Details AS od ON p.id = od.product_id
        INNER JOIN Orders AS o ON od.order_id = o.id
	WHERE
		YEAR(o.order_date) = @year AND MONTH(o.order_date) = @month

	GROUP BY
        YEAR(o.order_date), MONTH(o.order_date), p.id, p.title

--lệnh gọi---
SELECT * 
FROM Top10SellingByMonth(2024,03)
ORDER BY total_quantity_sold DESC

--Top 10 bán chạy theo năm-----
CREATE FUNCTION Top10SellingByYear
(
	@year int
)
RETURNS TABLE 
AS
RETURN
	 SELECT TOP 10
        YEAR(o.order_date) AS Year,
        p.id,
        p.title,
        SUM(od.num) AS total_quantity_sold
    FROM
        Product AS p
        INNER JOIN Order_Details AS od ON p.id = od.product_id
        INNER JOIN Orders AS o ON od.order_id = o.id
	WHERE
		YEAR(o.order_date) = @year

	GROUP BY
        YEAR(o.order_date), p.id, p.title


--lệnh gọi---
SELECT * 
FROM Top10SellingByYear(2024)
ORDER BY total_quantity_sold DESC
