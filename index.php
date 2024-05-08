<?php include 'addtocart.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav>
        <h1>P O S</h1>
        <div class="Toggle-wrapper">
            <h1>Admin</h1>
            <label class="toggle">
                <input id="adminToggle" type="checkbox">
                <span class="slider"></span>
                <span class="labels" data-on="" data-off=""></span>
            </label>
        </div>
    </nav>
    <div class="container">
        <?php include 'cart-wrapper.php'; ?>
        <?php include 'item-wrapper.php'; ?>
    </div>
    <?php include 'admin-wrapper.php'; ?>
    <?php include 'popup-add.php'; ?>
    <?php include 'popup-edit.php'; ?>
    <?php include 'unit-selected.php'; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>