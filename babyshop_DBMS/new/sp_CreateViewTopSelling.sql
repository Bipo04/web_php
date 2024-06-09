USE AngelAndBabyShop
GO

CREATE PROCEDURE CreateTopSellingProductsView

AS
BEGIN
    -- Drop the view if it already exists
    IF OBJECT_ID('TopSellingProducts', 'V') IS NOT NULL
    BEGIN
        DROP VIEW TopSellingProductsByMonth;
    END;

    -- Create the view to display top selling products by month
     EXEC ('
    CREATE VIEW TopSellingProducts AS
    SELECT TOP 10
        YEAR(o.order_date) AS Year,
        MONTH(o.order_date) AS Month,
        p.id,
        p.title,
        SUM(od.num) AS total_quantity_sold
    FROM
        Product AS p
        INNER JOIN Order_Details AS od ON p.id = od.product_id
        INNER JOIN Orders AS o ON od.order_id = o.id

	GROUP BY
        YEAR(o.order_date), MONTH(o.order_date), p.id, p.title
    ORDER BY
        Year DESC, Month DESC, total_quantity_sold DESC;
    ');

END;

DROP Procedure CreateTopSellingProductsView
DROP TopSellingProductsByMonth
EXEC CreateTopSellingProductsView;

SELECT * FROM TopSellingProducts