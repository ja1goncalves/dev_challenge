<?php

$link = mysqli_connect('localhost', 'root', 'Ja!76402', 'dev_challenge');

$sql = 'SELECT "products"."id"
        FROM dev_challenge.products
        LEFT JOIN "orders_products" ON "orders_products"."product_id" = "products"."id"
        LEFT JOIN "orders" ON "orders_products"."order_id" = "orders"."id"
        WHERE "orders"."id" = 0
        COUNT;';

$result1 = mysqli_query($sql, $link);

$date = date_create($_POST['date']);

$dql = 'SELECT date_create, price, sum(price) as total
        FROM dev_challenge.orders
        WHERE date_create = '. $date .'
        GROUP BY date_create, price';

$result2 = mysqli_query($sql, $link);

echo $result1;
echo $result2;

mysqli_close($link);