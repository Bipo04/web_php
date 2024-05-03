use AngelAndBabyShop
go

BULK INSERT Orders
FROM 'D:\\Đại học\\Project\\final\\BabyShop DBMS\\order.txt'
WITH
	(
	FIELDTERMINATOR = ',',
	ROWTERMINATOR = '\n',
	DATAFILETYPE = 'char',
	--CODEPAGE = '65001',
	FIRE_TRIGGERS
	)



--update giá tiền cho bảng Order
UPDATE Orders
SET total_money = od.num * p.outbound_price
FROM Orders o
JOIN Order_Details od ON o.id = od.order_id
JOIN Product p ON od.product_id = p.id;



--DBCC CHECKIDENT (Orders, RESEED, 0);
--ALter table Orders add total_money int;

SELECT od.order_id, SUM(od.price * od.num) AS total_money
FROM Order_Details od
GROUP BY od.order_id
ORDER BY od.order_id;


