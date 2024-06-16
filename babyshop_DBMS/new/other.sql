ALTER FUNCTION getProduct (@id INT) 
RETURNS @product TABLE (
  [id] INT,
  [title] NVARCHAR(250),
  [category_name] NVARCHAR(50),
  [gender] NVARCHAR(10),
  [inbound_price] INT,
  [outbound_price] INT,
  [discount] INT,
  [supply] NVARCHAR(100),
  [thumbnail] VARCHAR(500),
  [description] NVARCHAR(1000),
  [quantity] INT,
  [sold] INT DEFAULT 0,
  [onsale] BIT
)
AS
BEGIN
    INSERT INTO @product
    SELECT p.id, p.title, c.name, c.gender, p.inbound_price,
    p.outbound_price,p.discount, s.name, p.thumbnail,p.description,
    p.quantity, p.sold, p.onsale
    FROM Product p JOIN Category c ON p.category_id = c.id
    JOIN Supply s ON s.id = p.supply_id
    WHERE p.id = @id;
	RETURN;
END

CREATE PROC updateUser
@id int,
@role nvarchar(20)
AS 
BEGIN
	UPDATE Users
	SET role_id = (SELECT id FROM Roles
				   WHERE name = @role)
	WHERE id = @id
END

EXEC updateUser 2, 'Admin'


ALTER FUNCTION getSumOrderByDate(
	@date DATE
)
RETURNS INT
AS
BEGIN
	DECLARE @sum INT
	SELECT @sum = COUNT(*)
	FROM Orders o
	WHERE CAST(o.order_date AS DATE) = @date
	RETURN @sum
END
GO

DECLARE @result INT
SET @result = dbo.getSumOrderByDate('2024-06-14')
SELECT @result


