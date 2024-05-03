CREATE DATABASE AngelAndBabyShop

USE AngelAndBabyShop
GO
--ALTER TABLE [User] DROP COLUMN [updated_at],  [deleted] ;

CREATE TABLE [Role] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [name]  nvarchar(20)
)
GO

--Bảng người dùng
CREATE TABLE [User] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [fullname] nvarchar(50),
  [username] VARCHAR(50) NOT NULL UNIQUE,
  [email] varchar(150),
  [phone_number] varchar(20),
  [address] nvarchar(200),
  [password] varchar(32),
  [role_id] int,
  [created_at] datetime,

  FOREIGN KEY ([role_id]) REFERENCES [Role] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION
)
GO

--sp_rename '[User].[Username]', '[username]', 'COLUMN';

--Bảng danh mục
CREATE TABLE [Category] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [name] nvarchar(100)
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
--sp_rename '[Supply].[Address]', 'address', 'COLUMN';

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

  FOREIGN KEY ([category_id]) REFERENCES [Category] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION,
  FOREIGN KEY ([supply_id]) REFERENCES dbo.[Supply](id) ON DELETE NO ACTION ON UPDATE NO ACTION
)
GO

--ALTER TABLE Product ADD sold int

--USE BabyShop
--GO
--ALTER TABLE [Product] ADD [quantity] int;



--Quản lí đơn hàng

--Bảng đơn hàng
CREATE TABLE [Orders] (
  [id] int PRIMARY KEY IDENTITY(1, 1),
  [user_id] int,
  [order_date] datetime,
  [status] varchar(50),
  [total_money] int,

  FOREIGN KEY ([user_id]) REFERENCES [User] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION
)
GO

--Bảng chi tiết đơn hàng
CREATE TABLE [Order_Details] (
  [id] int IDENTITY(1, 1),
  [order_id] int,
  [product_id] int,
  [num] int,
  --[price] int,
  CONSTRAINT PK_Order_Details PRIMARY KEY ([order_id], [product_id]),
  FOREIGN KEY ([product_id]) REFERENCES [Product] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION,
  FOREIGN KEY ([order_id]) REFERENCES [Orders] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION
)
GO

ALTER TABLE 





