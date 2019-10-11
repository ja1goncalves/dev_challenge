SELECT "products"."id",
        FROM dev_challenge.products
        LEFT JOIN "orders_products" ON "orders_products"."product_id" = "products"."id"
        LEFT JOIN "orders" ON "orders_products"."order_id" = "orders"."id"
        WHERE "orders"."id" = 0
        COUNT;

SELECT date_create, price, sum(price) as total
        FROM dev_challenge.orders
        WHERE date_create = (SELECT CONVERT (date, SYSDATETIME()))
        GROUP BY date_create, price