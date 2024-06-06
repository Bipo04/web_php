USE AngelAndBabyShop
GO

CREATE TRIGGER UpdateProductSoldQuantity
ON Order_Details 
AFTER INSERT
AS
BEGIN
	
	UPDATE p
	SET	p.sold = p.sold + i.num,
		p.quantity = p.quantity - i.num
	FROM Product p JOIN inserted i ON p.id = i.product_id

END

