USE AngelAndBabyShop
GO

CREATE FUNCTION Interest
(
	@in_price int,
	@out_price int,
	@num int
)
RETURNS INT
AS
BEGIN 
	DECLARE @interest int;
	SET @interest = (@out_price - @in_price) * @num;
	RETURN @interest;
END
DECLARE @interest int;
SELECT @interest = dbo.Interest(100000, 200000, 5);
SELECT @interest as kq;

