import pandas as pd
import random
from datetime import datetime, timedelta

# Hàm để tạo một dòng dữ liệu ngẫu nhiên về thông tin đơn hàng
def generate_random_order_info():
    # Tạo order_id ngẫu nhiên từ 1 đến 999
    order_id = random.randint(1, 999)

    # Tạo product_id ngẫu nhiên từ 1 đến 29
    product_id = random.randint(1, 29)
    
# Tạo num ngẫu nhiên từ 1 đến 20
    num = random.randint(1, 10)

    
    return [order_id, product_id, num]

# Tạo DataFrame với 1000 dòng dữ liệu ngẫu nhiên về thông tin đơn hàng
data_orders = [generate_random_order_info() for _ in range(10000)]
df_orders = pd.DataFrame(data_orders)

# Thêm cột số thứ tự (index)
df_orders_with_index = df_orders.reset_index()

# Ghi vào file txt
df_orders_with_index.to_csv("D:\\Đại học\\Project\\final\\BabyShop DBMS\\Order_details.txt", index=False, sep=',')

print(df_orders_with_index.head())
