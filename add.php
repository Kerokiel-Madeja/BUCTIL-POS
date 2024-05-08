<?php
include "dbconn.php";

if (isset($_POST['submit'])) {
    $productName = $_POST['itemName'];
    $productPrice = $_POST['itemPrice'];
    $productType = $_POST['type'];
    $productUnit = $_POST['unit'];
    $picture = $_FILES['itemImage']['name'];
    $tmpname = $_FILES['itemImage']['tmp_name'];
    $newfilename = uniqid() . "_" . $picture;

    move_uploaded_file($tmpname, "images/" . $newfilename);
    $query = "INSERT INTO `products`(`product_name`, `product_price`, `product_type`,`product_unit`,`product_image`) VALUES ('$productName', '$productPrice', '$productType','$productUnit','$newfilename')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $res = [
            'status' => 200,
            'message' => 'Student Created Successfully'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Student Not Created'
        ];
        echo json_encode($res);
        return;
    }
}
