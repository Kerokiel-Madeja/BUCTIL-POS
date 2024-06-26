        <style>
            .item-wrapper nav {
                display: flex;
                align-items: center;
                padding: 10px;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
                background-color: #c7c8cc;
                justify-content: space-between;
            }

            .item-wrapper nav ul {
                display: flex;
                list-style: none;
                gap: 20px;
            }

            .item-wrapper nav ul li a {
                position: relative;
                text-decoration: none;
                color: black;
            }

            .item-wrapper nav ul li a::before {
                content: "";
                position: absolute;
                width: 100%;
                height: 4px;
                border-radius: 4px;
                background-color: #643a6b;
                bottom: -5px;
                left: 0;
                transform-origin: center;
                transform: scaleX(0);
                transition: transform 0.4s ease-in-out;
            }

            .item-wrapper nav ul li a:hover::before {
                transform: scaleX(1);
            }

            .item-wrapper nav ul li a.underline::before {
                transform: scaleX(1);
            }

            .item-wrapper nav form [type="text"],
            [type="submit"] {
                padding: 5px;
                border-radius: 5px;
                border: 1px solid black;
            }

            .search-form {
                display: flex;
            }

            .search-container {
                position: relative;
            }

            #search {
                padding: 5px 30px 5px 10px;
                /* Adjust padding as needed */
                border-radius: 5px;
                border: 1px solid black;
                width: 200px;
                /* Adjust width as needed */
            }

            .item-wrapper button[type="submit"] {
                position: absolute;
                top: 0;
                right: 0;
                height: 100%;
                padding: 5px;
                border: none;
                background-color: transparent;
                cursor: pointer;
            }

            .item-wrapper button[type="submit"] img {
                width: 18px;
                /* Adjust width as needed */
                height: 18px;
                /* Adjust height as needed */
            }

            .card-wrapper {
                display: grid;
                gap: 20px;
                padding: 2vh 2vw;
                overflow-y: auto;
                max-height: 90%;
                scrollbar-width: none;
                grid-template-columns: repeat(2, 1fr);
            }

            .cards {
                position: relative;
                text-align: center;
                border-radius: 5px;
                padding: 10px;
                background-color: #c7c8cc;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .cards:hover {
                transform: translateY(-3px);
                transition: 0.3s;

            }

            .add-to-cart {
                display: none;
                position: absolute;
                font-weight: bolder;
                color: white;
                font-size: 20px;
                height: 100%;
                width: 100%;
                top: 50%;
                left: 50%;
                z-index: 1;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(-1px);
            }

            .cards:hover .add-to-cart {
                display: block;
            }

            .cards img {
                height: 30vh;
                width: 25vw;
            }

            .card-info{
                display: flex;
                justify-content: space-between;
                padding: 10px 2vw;
                
            }

            .card-info > p{
                background-color: #643a6b;
                padding: 10px;
                border-radius: 5px;
                color: white;
            }


        </style>

        <div class="item-wrapper">
            <nav>
                <ul>
                    <li><a href="#" onclick="toggleUnderline(event)">All Products</a></li>
                    <li><a href="#" onclick="toggleUnderline(event)">Vegetables</a></li>
                    <li><a href="#" onclick="toggleUnderline(event)">Fruits</a></li>
                </ul>
                <form class="search-form">
                    <div class="search-container">
                        <input type="text" id="search" name="search" placeholder="Search...">
                        <button type="submit"><img src="images/search.png" alt="Search"></button>
                    </div>
                </form>
            </nav>
            <div class="card-wrapper">
                <?php
                include 'dbconn.php';
                $sql = "SELECT * FROM `products` ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="cards">
                        <img src="images/<?php echo $row['product_image']; ?>" alt="Product image" class="product-image">
                        <div class="card-info"><p class="name">
                            <?php echo $row["product_name"] ?></p>
                            <p class="price">₱<?php echo $row["product_price"] ?>/<?php echo $row["product_type"] ?></p>
                        </div>   
                        <input type="submit" value="ADD TO CART" name="add_to_cart" class="add-to-cart" id="add-to-cart" add-id="<?php echo $row['id']; ?>">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>