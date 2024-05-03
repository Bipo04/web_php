import pandas as pd
import random
from datetime import datetime, timedelta

# Function to generate random order data
def generate_random_order_data(num_orders):
    orders_data = []
    for i in range(num_orders):
        order_id = i + 1
        user_id = random.randint(1, 49)  # Assuming user IDs are integers between 1 and 1000
        current_time = datetime.now().replace(microsecond=0)
        current_time -= timedelta(seconds=current_time.second % 2)
        order_date = current_time - timedelta(days=random.randint(1, 365), hours=random.randint(0, 23), minutes=random.randint(0, 59), seconds=random.randint(0, 59)) # Random date within the last year
        status = random.choice(['dang xu li', 'dang giao', 'da giao'])  # Random status
        orders_data.append([order_id, user_id, order_date, status])
    return orders_data

# Generate 1000 random orders
num_orders = 1000
orders_data = generate_random_order_data(num_orders)

# Create DataFrame
df_orders = pd.DataFrame(orders_data)

# Display DataFrame
print(df_orders.head())

# Ghi vào file txt
df_orders.to_csv("D:\\Đại học\\Project\\final\\BabyShop DBMS\\order.txt", index=False, sep=',')
