CREATE DATABASE AngelAndBabyShop
USE AngelAndBabyShop


--Bảng role
CREATE TABLE [Role] (
  [id] int IDENTITY(1,1) PRIMARY KEY,
  [name] nvarchar(20)
)
GO

--Bảng người dùng
CREATE TABLE [User] (
  [id] int IDENTITY(1,1) PRIMARY KEY,
  [fullname] nvarchar(50) NOT NULL,
  [username] varchar(50) NOT NULL UNIQUE,
  [password] varchar(70) NOT NULL,
  [email] varchar(150),
  [phone_number] varchar(20),
  [address] nvarchar(200),
  [role_id] int NOT NULL,
  [created_at] datetime,

  FOREIGN KEY ([role_id]) REFERENCES [Role] ([id]) ON DELETE CASCADE ON UPDATE CASCADE
)
GO

--Bảng danh mục
CREATE TABLE [Category] (
  [id] int IDENTITY(1,1) PRIMARY KEY,
  [name] nvarchar(100) NOT NULL,
  [gender] varchar(50) NOT NULL
)
GO

--Bảng nhà phân phối
CREATE TABLE [Supply](
	[id] int IDENTITY(1,1) PRIMARY KEY,
	[name] nvarchar(100) NOT NULL,
	[address] nvarchar(100) NOT NULL,
	[email] nvarchar(50) NOT NULL,
	[phone] nvarchar(20) NOT NULL
)
GO

--Bảng sản phẩm
CREATE TABLE [Product] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [category_id] int,
  [title] nvarchar(250),
  [inbound_price] int,
  [outbound_price] int,
  [discount] DECIMAL (4, 2) NOT NULL DEFAULT 0,
  [supply_id] INT,
  [thumbnail] varchar(500),
  [description] nvarchar(1000),
  [quantity] int,
  [sold] int Default 0,
  [hot] BIT

  FOREIGN KEY ([category_id]) REFERENCES [Category] ([id]) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY ([supply_id]) REFERENCES dbo.[Supply](id) ON DELETE CASCADE ON UPDATE CASCADE
)
GO

--Bảng đơn hàng
CREATE TABLE [Orders] (
  [id] int IDENTITY(1,1) PRIMARY KEY,
  [order_code] varchar(10),
  [user_id] int,
  [consignee_name] nvarchar(50),
  [address] nvarchar(200),
  [phone_number] varchar(20),
  [total_money] int,
  [order_date] datetime,
  [status] nvarchar(50) NOT NULL DEFAULT N'Đang xử lí',

  FOREIGN KEY ([user_id]) REFERENCES [User] ([id]) ON DELETE CASCADE ON UPDATE CASCADE
)
GO

--Bảng chi tiết đơn hàng
CREATE TABLE [Order_Details] (
  [order_id] int,
  [order_code] varchar(10),
  [product_id] int,
  [num] int,
  [price] int,
  [discount] DECIMAL (4, 2) NOT NULL DEFAULT 0
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