CREATE DATABASE AngelAndBabyShop

USE AngelAndBabyShop

--ALTER TABLE [User] DROP COLUMN [updated_at],  [deleted] ;

CREATE TABLE [Role] (
  [id] int PRIMARY KEY ,
  [name]  nvarchar(20)
)
GO

--Bảng người dùng
CREATE TABLE [User] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [fullname] nvarchar(50) NOT NULL,
  [username] VARCHAR(50) NOT NULL UNIQUE,
  [password] varchar(32) NOT NULL,
  [email] varchar(150),
  [phone_number] varchar(20),
  [address] nvarchar(200),
  [role_id] int DEFAULT 2,
  [created_at] datetime,

  FOREIGN KEY ([role_id]) REFERENCES [Role] ([id]) ON DELETE CASCADE ON UPDATE CASCADE
)
GO



--Bảng danh mục
CREATE TABLE [Category] (
  [id] int PRIMARY KEY ,
  [name] nvarchar(100) NOT NULL,
  [gender] varchar(50)
)
GO

--Bảng nhà phân phối
CREATE TABLE [Supply](
	[id] INT IDENTITY(1,1) PRIMARY KEY,
	[name] NVARCHAR(100) NOT NULL,
	[address] NVARCHAR(100) NOT NULL,
	[email] VARCHAR(50) NOT NULL,
	[phone] VARCHAR(20) NOT NULL
)
GO


--Bảng sản phẩm
CREATE TABLE [Product] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [category_id] int,
  [title] nvarchar(250),
  [inbound_price] int,
  [outbound_price] int,
  [discount] int,
  [supply_id] INT,
  [thumbnail] varchar(500),
  [description] NVARCHAR(1000),
  [quantity] INT,
  [sold] INT Default 0

  FOREIGN KEY ([category_id]) REFERENCES [Category] ([id]) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY ([supply_id]) REFERENCES dbo.[Supply](id) ON DELETE CASCADE ON UPDATE CASCADE
)
GO



--Bảng đơn hàng
CREATE TABLE [Orders] (
  [id] int PRIMARY KEY NOT NULL,
  [user_id] int,
  [order_date] datetime,
  [status] nvarchar(50),
  [consignee_name] nvarchar(50),
  [address] nvarchar(200),
  [phone_number] varchar(20),
  [total_money] int,
  

  FOREIGN KEY ([user_id]) REFERENCES [User] ([id]) ON DELETE CASCADE ON UPDATE CASCADE
)
GO





--Bảng chi tiết đơn hàng
CREATE TABLE [Order_Details] (
  [order_id] int,
  [product_id] int,
  [num] int,
  [price] int,
  CONSTRAINT PK_Order_Details PRIMARY KEY ([order_id], [product_id]),
  FOREIGN KEY ([product_id]) REFERENCES [Product] ([id]) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY ([order_id]) REFERENCES [Orders] ([id]) ON DELETE CASCADE ON UPDATE CASCADE
)
GO

--Bảng giỏ hàng
CREATE TABLE [Cart] (
  [user_id] int,
  [product_id] int,
  [num] int,
  CONSTRAINT PK_Cart PRIMARY KEY ([user_id], [product_id]),
  FOREIGN KEY ([product_id]) REFERENCES [Product] ([id]) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY ([user_id]) REFERENCES [User] ([id]) ON DELETE CASCADE ON UPDATE CASCADE
)
GO