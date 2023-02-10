<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='honey' LIMIT 4");

$stmt->execute();


$honey_products = $stmt->get_result();//[]





?>