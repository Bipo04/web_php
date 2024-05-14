Use AngelAndBabyShop
go

<<<<<<< HEAD
--cập nhật cột discount
UPDATE Product 
SET discount = 0
WHERE id > 0;

--cập nhật cột số lượng sản phẩm
UPDATE Product SET quantity = 10000;

--cập nhập cột sold sau khi đã nhập hết bảng order_details
UPDATE Product
SET sold = (
    SELECT SUM(num) 
    FROM Order_Details 
    WHERE Order_Details.product_id = Product.id
)

--cập nhật các cột còn lại
=======
>>>>>>> origin
INSERT INTO dbo.Product (category_id, title, inbound_price, outbound_price, supply_id, description, thumbnail)
VALUES
(1, N'Bộ thô ngắn tay bé gái Rabity', 129000, 229000, 1, N'Chất liệu: 100% cotton spandex co giãn, thấm hút và thoáng mồ hôi','bo_ngan_tay_rabity/bo_ngan_tay_be_gai_Rabity_1,bo_ngan_tay_rabity/bo_ngan_tay_be_gai_Rabity_2,bo_ngan_tay_rabity/bo_ngan_tay_be_gai_Rabity_3,bo_ngan_tay_rabity/bo_ngan_tay_be_gai_Rabity_4'),
(1, N'Bộ thun ngắn tay Gấu dâu Lotso', 199000, 299000, 1, N'Đồ bộ thun bé gái có kiểu dáng thời trang, cá tính, tính ứng dụng cao ngoài mặc ở nhà thì ba mẹ có thể cho bé mặc vào nhiều dịp khác như đi học, đi chơi, xuống phố,...','bo_thun_gau_dau/bo_thun_gau_dau_1,bo_thun_gau_dau/bo_thun_gau_dau_2,bo_thun_gau_dau/bo_thun_gau_dau_3,bo_thun_gau_dau/bo_thun_gau_dau_4'),
(1, N'Bộ thun Pijama ngắn tay bé gái', 99000, 199000, 1, N'Bộ thun Pijama ngắn tay bé gái với nhiều hoạt tiết hoạt hình ngựa Pony, trái dâu tây đáng yêu. Cổ áo, viền áo được may tỉ mỉ và bo viền nổi bật để trang phục mặc nhà của bé không chỉ thoải mái mà còn thời trang','pijama_be_gai/pijama_be_gai_1,pijama_be_gai/pijama_be_gai_2,pijama_be_gai/pijama_be_gai_3,pijama_be_gai/pijama_be_gai_4'),
(1, N'Bộ thun dài tay bé gái Minnie', 199000, 299000, 1, N'Đồ bộ bé gái được may từ chất liệu tự nhiên nên vô cùng thoáng mát, thấm hút mồ hôi vượt trội kết hợp form áo và quần vừa vặn thoải mái. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','bo_minie_be_gai/bo_minie_be_gai_1,bo_minie_be_gai/bo_minie_be_gai_2,bo_minie_be_gai/bo_minie_be_gai_3,bo_minie_be_gai/bo_minie_be_gai_4'),
(1, N'Bộ sợi Modal Easy Wear sơ sinh dài tay', 129000, 229000, 1, N'Áo tay dài quần dài ấm áp, thoáng mát','bo_so_sinh/so_sinh_1,bo_so_sinh/so_sinh_2,bo_so_sinh/so_sinh_3'),
(2, N'Đầm váy voan ngắn tay bé gái', 369000, 469000, 4, N'Đầm váy voan ngắn tay được thiết kế kiểu dáng điệu đà, đáng yêu với màu sắc tươi sắc, có lớp vải lưới bên ngoài được đính kim tuyến tạo nên một chiếc đầm vô cùng nổi bật. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','dam_voan_be_gai/dam_voan_be_gai_1,dam_voan_be_gai/dam_voan_be_gai_2,dam_voan_be_gai/dam_voan_be_gai_3'),
(2, N'Đầm váy công chúa sát nách bé gái', 499000, 599000, 3, N' Đầm váy bé gái công chúa thiết kế màu sắc nhẹ nhàng, phần váy tùng bồng nhiều lớp bồng bềnh, phần hoa đính cách điệu và dây nơ thắt eo tăng thêm sự điệu đà cho chiếc váy, khóa kéo sau lưng mượt mà và thoải mái.','dam_sat_nach_be_gai/dam_cong_chua_sat_nach_1,dam_sat_nach_be_gai/dam_cong_chua_sat_nach_2,dam_sat_nach_be_gai/dam_cong_chua_sat_nach_3'),
(2, N'Đầm nơ công chúa', 339000, 439000, 2, N'Đầm váy bé gái được may từ chất liệu tự nhiên nên vô cùng thoáng mát, thấm hút mồ hôi vượt trội kết hợp form váy vừa vặn, công chúa nhỏ có thể mặc đi chơi, đi tiệc hay dạo phố xinh xắn. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','dam_no_cong_chua/dam_no_cong_chua_1,dam_no_cong_chua/dam_no_cong_chua_2,dam_no_cong_chua/dam_no_cong_chua_3'),
(3, N'Áo thun ngắn tay Minnie ', 129000, 229000, 5, N' Áo thun cổ tròn, màu sắc nhẹ nhàng kết hợp với điểm nhấn là họa tiết Minnie bản quyền Disney nghộ nghĩnh, đáng yêu.','ao_thun_minnie/ao_thun_minnie_1,ao_thun_minnie/ao_thun_minnie_2,ao_thun_minnie/ao_thun_minnie_3'),
(3, N'Áo thun cổ bẻ ngắn tay', 149000, 249000, 6, N'Áo thun có cổ bé gái ngắn tay thoải mái dễ phối đồ cho các bé có thể mặc ở nhà, đi chơi hoặc đi tiệc, kiểu dáng đơn giản, dễ dàng cho bé diện đồ đi học, đi chơi cuối tuần. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','ao_thun_co_be/ao_thun_co_be_1,ao_thun_co_be/ao_thun_co_be_2,ao_thun_co_be/ao_thun_co_be_3'),
(3, N'Áo thun dài tay bé gái', 129000, 229000, 7, N'Áo thun dài tay trơn màu sắc đơn giản kết hợp với họa tiết in nhỏ đáng yêu cho trang phục của bé','ao_thun_dai_tay_be_gai/thun_dai_tay_1,ao_thun_dai_tay_be_gai/thun_dai_tay_2,ao_thun_dai_tay_be_gai/thun_dai_tay_3'),
(4, N'Áo khoác nơ dễ thương', 229000, 329000, 8, N'Áo khoác bé gái thiết kế hiện đại,màu sắc cùng họa tiết vô cùng đáng yêu, phù hợp cho bé mặc khoác trong nhiều thời tiết khác nhau','ao_khoac_no/ao_no_1,ao_khoac_no/ao_no_2,ao_khoac_no/ao_no_3'),
(4, N'Áo khoác gió Elsa bé gái', 129000, 229000, 9, N'Thời tiết thay đổi liên tục, những ngày lạnh hay nhiệt độ thất thường mẹ nên chọn ngay cho bé một mẫu áo khoác tránh nắng và gió cho bé. Áo khoác chính là cứu tinh bảo vệ bé trong những ngày chuyển mùa, cũng là một item dễ phối với bất kỳ trang phục nào.','ao_khoac_gio_elsa/ao_khoac_elsa_1,ao_khoac_gio_elsa/ao_khoac_elsa_2,ao_khoac_gio_elsa/ao_khoac_elsa_3'),
(4, N'Áo khoác kaki bé gái', 229000, 399000, 10, N'Áo khoác kaki bé gái chất liệu dày dặn, ấm áp cho thời tiết se lạnh, thiết kế măng tô dáng dài cùng phần dây buộc eo và nút sang trọng, với 3 màu sắc nhẹ nhàng cho bé dễ dàng phối outfit thật điệu đà, xinh xắn vào thu đông.','ao_khoac_kaki_be_gai/ao_khoac_kaki_1,ao_khoac_kaki_be_gai/ao_khoac_kaki_2,ao_khoac_kaki_be_gai/ao_khoac_kaki_3'),
(5, N'Quần thun legging', 99000, 129000, 2, N'Quần legging dài bé gái họa tiết cầu vồng, trái tim dễ thương','quan_thun_legging/legging_1,quan_thun_legging/legging_2,quan_thun_legging/legging_3'),
(5, N'Quần jean dài bé gái', 99000, 161000, 2, N'Quần jean dài bé gái dày dặn, cạp chun co giãn thoải mái, form ống rộng cùng ống quần bo chun thời trang có thể phối đa dạng outfits thật ấn tượng và xinh xắn cho bé, họa tiết nấm đáng yêu','quan_jean_dai_be_gai/jean_gai_1,quan_jean_dai_be_gai/jean_gai_2,quan_jean_dai_be_gai/jean_gai_3'),
(5, N'Quần dài kaki bé gái', 250000, 339000, 3, N'Quần dài kaki bé gái kiểu dáng dáng sành điệu, màu sắc trung tính dễ phối đồ đa dạng outfits cho các bé có thể mặc ở nhà, đi tiệc, đi học hoặc đi chơi cuối tuần. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','quan_dai_kaki_be_gai/quan_kaki_1,quan_dai_kaki_be_gai/quan_kaki_2,quan_dai_kaki_be_gai/quan_kaki_3'),
(6, N'Bộ nỉ bông dài tay bé trai', 199000, 329000, 3, N'Áo tay dài quần dài, có bo tay và bo chân, họa tiết siêu dễ thương và thời trang','bo_ni_bong_dai_tay_be_trai/ni_bong_1,bo_ni_bong_dai_tay_be_trai/ni_bong_2,bo_ni_bong_dai_tay_be_trai/ni_bong_3'),
(6, N'Bộ thun Spider-man dài tay bé trai', 129000, 229000, 4, N'Đồ bộ thun dài tay bé trai thiết kế ấm áp cho thời tiết se lạnh, họa tiết Spider-man siêu chất, ngộ nghĩnh cho bé mê siêu anh hùng.','bo_thun_spiderman_be_trai/spiderman_1,bo_thun_spiderman_be_trai/spiderman_2,bo_thun_spiderman_be_trai/spiderman_3'),
(6, N'Bộ thun họa tiết ô tô', 129000, 250000, 4, N'Áo tay dài quần dài, có bo tay và bo chân, họa tiết siêu dễ thương.','bo_thun_hoa_tiet_o_to/o_to_1,bo_thun_hoa_tiet_o_to/o_to_2,bo_thun_hoa_tiet_o_to/o_to_3'),
(7, N'Áo thun ngắn tay Power Crusher', 69000, 119000, 5, N'Áo thun cổ tròn, họa tiết siêu chất, đáng yêu','bo_thun_power_crusher/power_1,bo_thun_power_crusher/power_2,bo_thun_power_crusher/power_3'),
(7, N'Áo thun Cars Disney', 129000, 169000, 6, N'Áo thun cổ tròn, họa tiết siêu chất, đáng yêu','ao_thun_cars_disney/ao_thun_car_1,ao_thun_cars_disney/ao_thun_car_2,ao_thun_cars_disney/ao_thun_car_3'),
(7, N'Áo thun polo cổ bẻ ngắn tay Spider-man bé trai', 129000, 229000, 6, N'Áo thun ngắn tay in hình Spider - Man bản quyền Disney, hình in sắc nét và màu sắc hài hòa','ao_thun_polo/polo_trai_1,ao_thun_polo/polo_trai_2,ao_thun_polo/polo_trai_3'),
(8, N'Quần short thô bé trai', 129000, 279000, 5, N'Quần short bé trai mang đến phong cách năng động, kiểu dáng basic dễ dàng phối đa dạng outfits cho bé tha hồ diện trong nhiều hoạt động, bối cảnh. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','quan_short_tho_be_trai/short_1,quan_short_tho_be_trai/short_2,quan_short_tho_be_trai/short_3'),
(8, N'Quần dài kaki jogger bé trai', 129000, 229000, 7, N'Quần dài bé trai mang đến phong cách bảnh bao, thời trang, kiểu dáng basic dễ dàng phối đa dạng outfits cho bé tha hồ diện trong nhiều hoạt động, bối cảnh. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','quan_dai_kaki_jogger_be_trai/jogger_1,quan_dai_kaki_jogger_be_trai/jogger_2,quan_dai_kaki_jogger_be_trai/jogger_3'),
(8, N'Quần yếm thêu Sư Tử bé trai', 250000, 399000, 8, N'Quần yếm họa tiết sư tử dễ thương','quan_yem_theu_su_tu/yem_1,quan_yem_theu_su_tu/yem_2,quan_yem_theu_su_tu/yem_3'),
(9, N'Áo khoác nỉ bông bé trai', 129000, 169000, 10, N'Áo khoác bé trai là bạn đồng hành không thể thiếu cho bé khi ra ngoài, với phong cách năng động, kiểu dáng đơn giản, vừa chống nắng, tia UV, tránh gió và chống nước, vừa đồng thời bảo vệ sức khỏe cho bé. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','ao_khoac_ni_bong_be_trai/ao_ni_bong_1,ao_khoac_ni_bong_be_trai/ao_ni_bong_2,ao_khoac_ni_bong_be_trai/ao_ni_bong_3'),
(9, N'Áo khoác gió Marvel Avengers bé trai', 99000, 129000, 9, N'Áo khoác gió trẻ em với thiết kế có mũ mang phong cách thời trang năng động, kiểu dáng đơn giản, dễ dàng cho bé diện đi học, xuống phố cuối tuần.','ao_khoac_gio_marvel_be_trai/ao_khoac_marvel_1,ao_khoac_gio_marvel_be_trai/ao_khoac_marvel_2,ao_khoac_gio_marvel_be_trai/ao_khoac_marvel_3'),
(9, N'Áo bomber bé trai', 399000, 539000, 7, N'Áo khoác bé trai là bạn đồng hành không thể thiếu cho bé khi ra ngoài, với phong cách năng động, kiểu dáng đơn giản, vừa chống nắng, tia UV, tránh gió và chống nước, vừa đồng thời bảo vệ sức khỏe cho bé. Sản phẩm đạt chứng nhận Oeko-Tex 100 an toàn cho da trẻ em.','ao_bomber/ao_bomber_1,ao_bomber/ao_bomber_2,ao_bomber/ao_bomber_3');

