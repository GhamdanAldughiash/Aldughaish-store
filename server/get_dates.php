<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='dates' LIMIT 4");

$stmt->execute();


$dates = $stmt->get_result();//[]





?>