Use AngelAndBabyShop
go

UPDATE Product 
SET discount = 0
WHERE id > 0;



INSERT INTO dbo.Product (category_id, title, inbound_price, outbound_price, supply_id, description)
VALUES
(1, N'Bộ thô ngắn tay bé gái Rabity', 129000, 229000, 1, N'Chất liệu: 100% cotton spandex co giãn, thấm hút và thoáng mồ hôi'),
(1, N'Bộ thun ngắn tay Gấu dâu Lotso', 199000, 299000, 1, N'Đồ bộ thun bé gái có kiểu dáng thời trang, cá tính, tính ứng dụng cao ngoài mặc ở nhà thì ba mẹ có thể cho bé mặc vào nhiều dịp khác như đi học, đi chơi, xuống phố,...'),
(1, N'Bộ thun Pijama ngắn tay bé gái', 99000, 199000, 1, N'Bộ thun Pijama ngắn tay bé gái với nhiều hoạt tiết hoạt hình ngựa Pony, trái dâu tây đáng yêu. Cổ áo, viền áo được may tỉ mỉ và bo viền nổi bật để trang phục mặc nhà của bé không chỉ thoải mái mà còn thời trang'),
(1, N'Bộ thun dài tay bé gái Minnie', 199000, 299000, 1, N'Đồ bộ bé gái được may từ chất liệu tự nhiên nên vô cùng thoáng mát, thấm hút mồ hôi vượt trội kết hợp form áo và quần vừa vặn thoải mái. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(1, N'Bộ sợi Modal Easy Wear sơ sinh dài tay', 129000, 229000, 1, N'Áo tay dài quần dài ấm áp, thoáng mát'),
(2, N'Đầm váy voan ngắn tay bé gái', 369000, 469000, 4, N'Đầm váy voan ngắn tay được thiết kế kiểu dáng điệu đà, đáng yêu với màu sắc tươi sắc, có lớp vải lưới bên ngoài được đính kim tuyến tạo nên một chiếc đầm vô cùng nổi bật. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(2, N'Đầm váy công chúa sát nách bé gái', 499000, 599000, 3, N' Đầm váy bé gái công chúa thiết kế màu sắc nhẹ nhàng, phần váy tùng bồng nhiều lớp bồng bềnh, phần hoa đính cách điệu và dây nơ thắt eo tăng thêm sự điệu đà cho chiếc váy, khóa kéo sau lưng mượt mà và thoải mái.'),
(2, N'Đầm nơ công chúa', 339000, 439000, 2, N'Đầm váy bé gái được may từ chất liệu tự nhiên nên vô cùng thoáng mát, thấm hút mồ hôi vượt trội kết hợp form váy vừa vặn, công chúa nhỏ có thể mặc đi chơi, đi tiệc hay dạo phố xinh xắn. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(3, N'Áo thun ngắn tay Minnie ', 129000, 229000, 5, N' Áo thun cổ tròn, màu sắc nhẹ nhàng kết hợp với điểm nhấn là họa tiết Minnie bản quyền Disney nghộ nghĩnh, đáng yêu.'),
(3, N'Áo thun cổ bẻ ngắn tay', 149000, 249000, 6, N'Áo thun có cổ bé gái ngắn tay thoải mái dễ phối đồ cho các bé có thể mặc ở nhà, đi chơi hoặc đi tiệc, kiểu dáng đơn giản, dễ dàng cho bé diện đồ đi học, đi chơi cuối tuần. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(3, N'Áo thun dài tay bé gái', 129000, 229000, 7, N'Áo thun dài tay trơn màu sắc đơn giản kết hợp với họa tiết in nhỏ đáng yêu cho trang phục của bé'),
(4, N'Áo khoác nơ dễ thương', 229000, 329000, 8, N'Áo khoác bé gái thiết kế hiện đại,màu sắc cùng họa tiết vô cùng đáng yêu, phù hợp cho bé mặc khoác trong nhiều thời tiết khác nhau'),
(4, N'Áo khoác gió Elsa bé gái', 129000, 229000, 9, N'Thời tiết thay đổi liên tục, những ngày lạnh hay nhiệt độ thất thường mẹ nên chọn ngay cho bé một mẫu áo khoác tránh nắng và gió cho bé. Áo khoác chính là cứu tinh bảo vệ bé trong những ngày chuyển mùa, cũng là một item dễ phối với bất kỳ trang phục nào.'),
(4, N'Áo khoác kaki bé gái', 229000, 399000, 10, N'Áo khoác kaki bé gái chất liệu dày dặn, ấm áp cho thời tiết se lạnh, thiết kế măng tô dáng dài cùng phần dây buộc eo và nút sang trọng, với 3 màu sắc nhẹ nhàng cho bé dễ dàng phối outfit thật điệu đà, xinh xắn vào thu đông.'),
(5, N'Quần thun legging', 99000, 129000, 2, N'Quần legging dài bé gái họa tiết cầu vồng, trái tim dễ thương'),
(5, N'Quần jean dài bé gái', 99000, 161000, 2, N'Quần jean dài bé gái dày dặn, cạp chun co giãn thoải mái, form ống rộng cùng ống quần bo chun thời trang có thể phối đa dạng outfits thật ấn tượng và xinh xắn cho bé, họa tiết nấm đáng yêu'),
(5, N'Quần dài kaki bé gái', 250000, 339000, 3, N'Quần dài kaki bé gái kiểu dáng dáng sành điệu, màu sắc trung tính dễ phối đồ đa dạng outfits cho các bé có thể mặc ở nhà, đi tiệc, đi học hoặc đi chơi cuối tuần. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(6, N'Bộ nỉ bông dài tay bé trai', 199000, 329000, 3, N'Áo tay dài quần dài, có bo tay và bo chân, họa tiết siêu dễ thương và thời trang'),
(6, N'Bộ thun Spider-man dài tay bé trai', 129000, 229000, 4, N'Đồ bộ thun dài tay bé trai thiết kế ấm áp cho thời tiết se lạnh, họa tiết Spider-man siêu chất, ngộ nghĩnh cho bé mê siêu anh hùng.'),
(6, N'Bộ thun họa tiết ô tô', 129000, 250000, 4, N'Áo tay dài quần dài, có bo tay và bo chân, họa tiết siêu dễ thương.'),
(7, N'Áo thun ngắn tay Power Crusher', 69000, 119000, 5, N'Áo thun cổ tròn, họa tiết siêu chất, đáng yêu'),
(7, N'Áo thun Cars Disney', 129000, 169000, 6, N'Áo thun cổ tròn, họa tiết siêu chất, đáng yêu'),
(7, N'Áo thun polo cổ bẻ ngắn tay Spider-man bé trai', 129000, 229000, 6, N'Áo thun ngắn tay in hình Spider - Man bản quyền Disney, hình in sắc nét và màu sắc hài hòa'),
(8, N'Quần short thô bé trai', 129000, 279000, 5, N'Quần short bé trai mang đến phong cách năng động, kiểu dáng basic dễ dàng phối đa dạng outfits cho bé tha hồ diện trong nhiều hoạt động, bối cảnh. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(8, N'Quần dài kaki jogger bé trai', 129000, 229000, 7, N'Quần dài bé trai mang đến phong cách bảnh bao, thời trang, kiểu dáng basic dễ dàng phối đa dạng outfits cho bé tha hồ diện trong nhiều hoạt động, bối cảnh. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(8, N'Quần yếm thêu Sư Tử bé trai', 250000, 399000, 8, N'Quần yếm họa tiết sư tử dễ thương'),
(9, N'Áo khoác nỉ bông bé trai', 129000, 169000, 10, N'Áo khoác bé trai là bạn đồng hành không thể thiếu cho bé khi ra ngoài, với phong cách năng động, kiểu dáng đơn giản, vừa chống nắng, tia UV, tránh gió và chống nước, vừa đồng thời bảo vệ sức khỏe cho bé. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.'),
(9, N'Áo khoác gió Marvel Avengers bé trai', 99000, 129000, 9, N'Áo khoác gió trẻ em với thiết kế có mũ mang phong cách thời trang năng động, kiểu dáng đơn giản, dễ dàng cho bé diện đi học, xuống phố cuối tuần.'),
(9, N'Áo bomber bé trai', 399000, 539000, 7, N'Áo khoác bé trai là bạn đồng hành không thể thiếu cho bé khi ra ngoài, với phong cách năng động, kiểu dáng đơn giản, vừa chống nắng, tia UV, tránh gió và chống nước, vừa đồng thời bảo vệ sức khỏe cho bé. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.');



UPDATE Product SET quantity = 10000;
