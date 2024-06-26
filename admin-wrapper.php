    <style>
        .admin-wrapper nav {
            display: flex;
            padding: 20px 20px 0;
            justify-content: space-between;
        }

        .admin-wrapper nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .admin-wrapper nav ul li a {
            position: relative;
            text-decoration: none;
            color: black;
        }

        .admin-wrapper nav form [type="text"],
        [type="submit"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid black;
        }

        .admin-wrapper nav form button {
            background-color: #5f264a;
            color: white;
            cursor: pointer;
        }

        .admin-wrapper nav form button:hover {
            background-color: #712d58;
        }

        .table {
            text-align: center;
            border-radius: 10px;
            margin-top: 10px;
            max-height: 85%;
            overflow-y: auto;
            scrollbar-width: none;
            border: 2px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead {
            position: sticky;
            top: 0;
        }

        tbody tr {
            border-bottom: 1px solid black;
        }

        tbody td img {
            height: 50px;
            width: 100px;
        }

        th,
        td {
            padding: 12px 15px;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        .admin-wrapper .table button {
            margin: 5px;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            background-color: #5f264a;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .admin-wrapper .table button:hover,
        .add-btn:hover {
            background-color: #712d58;
        }

        .add-btn {
            border: none;
            margin-top: 10px;
            padding: 15px 55px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            background-color: #5f264a;
        }

        .delete-btn a {
            text-decoration: none;
            color: white;
        }
    </style>

    <div class="admin-wrapper" id="admin">
        <nav>
            <h1>Item Information</h1>
            <form action="search.php" method="GET">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </nav>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Item Id</th>
                        <th>Item Image</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Item Type</th>
                        <th>Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'dbconn.php';
                    $sql = "SELECT * FROM `products` ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><img src="images/<?php echo $row['product_image']; ?>" alt="Prodduct image" class="product-image table-image"></td>
                            <td><?php echo $row["product_name"] ?></td>
                            <td>₱<?php echo $row["product_price"] ?></td>
                            <td><?php echo $row["product_type"] ?></td>
                            <td><?php echo $row["product_unit"] ?></td>
                            <td>

                                <button class="update-btn" data-id="<?php echo $row['id']; ?>">Update</button>
                                <button class="delete-btn"><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <button class="add-btn">Add Item</button>
    </div>