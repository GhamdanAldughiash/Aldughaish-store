<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='nuts' LIMIT 4");

$stmt->execute();


$nuts = $stmt->get_result();//[]





?>