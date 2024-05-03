use AngelAndBabyShop
go

BULK INSERT Order_Details
FROM 'D:\\Đại học\\Project\\final\\BabyShop DBMS\\Order_Details.txt'
WITH
	(
	FIELDTERMINATOR = ',',
	ROWTERMINATOR = '\n',
	DATAFILETYPE = 'char',
	FIRE_TRIGGERS
	)

--gán giá trị price từ bảng product sang bảng order_details với product_id tương ứng
UPDATE Order_Details
SET price = (
    SELECT outbound_price
    FROM Product
    WHERE Product.id = Order_Details.product_id
);

use AngelAndBabyShop
go
--ALter table Order_Details drop column price ;
ALter table Order_Details drop column price ;
/*
ALTER TABLE Order_Details
DROP CONSTRAINT PK_Order_Details;
ALTER TABLE Order_Details
ADD CONSTRAINT PK_Order_Details PRIMARY KEY (id);
*/