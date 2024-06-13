USE AngelAndBabyShop
GO

CREATE TRIGGER UpdateSoldBuy
ON Order_Details 
AFTER INSERT
AS
BEGIN
	
	UPDATE p
	SET	p.sold = p.sold + i.num,
		p.quantity = p.quantity - i.num
	FROM Product p JOIN inserted i ON p.id = i.product_id

END

CREATE TRIGGER UpdateSoldCancel
ON Order_Details 
AFTER DELETE
AS
BEGIN
	
	UPDATE p
	SET	p.sold = p.sold - d.num,
		p.quantity = p.quantity + d.num
	FROM Product p JOIN deleted d ON p.id = d.product_id

END

