import pandas as pd
import random
import string

# Hàm để tạo một dòng dữ liệu ngẫu nhiên về thông tin người dùng
def generate_random_user_info():
    # Danh sách họ và tên đệm riêng cho nam và nữ
    last_name = ["Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Võ", "Đặng", "Bùi", "Đỗ"]
    female_last_name = ["Thị", "Thùy","Thúy","Hiền"]
    male_last_name = ["Công", "Đức", "Văn","Nhật"]
    male_first_name = ["Thanh", "Duy", "Minh", "Huy", "Quang","Đại Dương", "Đảng","Dũng", "Nguyên"]
    female_first_name = ["Lý", "Mai", "Hà","Hương", "Nga", "Thủy", "Hoa", "Thi", "Giang"]

  #  male_last_names = ["Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Võ", "Đặng", "Bùi", "Đỗ"]
   # female_first_names = ["Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Võ", "Đặng", "Bùi", "Đỗ",
    #                      "Lý", "Mai", "Hà", "An", "Hương", "Nga", "Thủy", "Hoa", "Thi"]
   # first_names = ["Văn", "Thanh", "Duy", "Minh", "Thị", "Hồng", "Hải", "Hường", "Công", "Quang"]

    # Chọn ngẫu nhiên giới tính và họ tương ứng
    gender = random.choice(["Nam", "Nữ"])
    if gender == "Nam":
        first_name = random.choice(male_first_name)
        last_name2 = random.choice(male_last_name)
    else:
        first_name = random.choice(female_first_name)
        last_name2 = random.choice(female_last_name)

    # Tạo họ và tên đầy đủ
    full_name = "'"+ random.choice(last_name)+ " " + last_name2 +" " + first_name +"'"


    # Tạo số điện thoại ngẫu nhiên
   # phone_number = ''.join(random.choices(string.digits, k=10))
    phone_number = "0" + str(random.randint(124350000, 978659999))

    # Tạo địa chỉ email ngẫu nhiên
    email = ''.join(random.choices(string.ascii_lowercase, k=8)) + \
            ''.join(random.choices(string.digits, k=2)) + \
            '@gmail.com'

    return [full_name, phone_number, email]

# Tạo DataFrame với 50 dòng dữ liệu ngẫu nhiên về thông tin người dùng
data_users = [generate_random_user_info() for _ in range(50)]
df_users = pd.DataFrame(data_users)#, columns=["Họ và tên", "Số điện thoại", "Email"])

for column in df_users.columns[1:]:
    df_users[column] = df_users[column].apply(lambda x: "'" + str(x) + "'")
   

# Ghi vào file txt
df_users.to_csv("D:\\Đại học\\Project\\user_data.txt", index=False, sep=',')

print(df_users.head())