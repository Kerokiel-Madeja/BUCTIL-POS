<?php
include 'dbconn.php';

$searchText = $_GET['search'];

$sql = "SELECT * FROM `products` WHERE `product_name` LIKE '%$searchText%' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="cards">
        <img src="images/<?php echo $row['product_image']; ?>" alt="Product image" class="product-image">
        <h2><?php echo $row["product_name"] ?></h2>
        <p class="price">₱<?php echo $row["product_price"] ?>/<?php echo $row["product_type"] ?></p>
        <input type="submit" value="ADD TO CART" name="add_to_cart" class="add-to-cart" id="add-to-cart">
    </div>
    <!-- div class="PcsModal1" id="PcsModal1">
        <div class="popup2" id="popup2">
            <span class="close" id="close-btn2">&times;</span>
            <h2>Add to Order</h2>
            <div class="selected">
                <div class="s-content">
                    <p id="productName"><?php echo $row["product_name"] ?></p>
                    <p id="productPrice"><?php echo $row["product_price"] ?></p>
                </div>
                <input type="number" name="quantity" id="quantity" placeholder="Enter quantity">
                <button type="submit" id="add-to-cart">Submit</button>
            </div>
        </div> -->
<?php
}
?>