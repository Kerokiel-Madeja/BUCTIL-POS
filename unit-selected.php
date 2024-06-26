<style>
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .popup2 {
        text-align: center;
        position: absolute;
        top: 20%;
        left: 55%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px 0px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        max-width: 400px;
        width: 80%;
    }

    .selected {
        padding: 10px 0;

    }

    .selected .s-content {
        display: flex;
        justify-content: space-between;
        padding: 0 25px;

    }

    .selected input[type="number"] {
        width: 90%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .selected button {
        width: 90%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        background-color: #5f264a;
        color: white;
        cursor: pointer;
    }

    .popup2 h2 {
        padding: 10px;
        margin-top: 0;
    }

    .close {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }
</style>

<div class="modal" id="PcsModal">
    <div class="popup2" id="popup2">
        <span class="close">&times;</span>
        <h2>Add to Order</h2>
        <div class="selected">
            <div class="s-content">
                <p class="productName"></p>
                <p class="productPrice"></p>
            </div>
            <input type="number" name="quantity" id="quantity" placeholder="Enter quantity">
            <button type="submit" id="add-to-cart">Submit</button>
        </div>
    </div>
</div>

<div class="modal" id="KiloModal">
    <div class="popup2" id="popup2">
        <span class="close">&times;</span>
        <h2>Add to Order</h2>
        <div class="selected">
            <div class="s-content">
                <p class="productName"></p>
                <p class="productPrice"></p>
            </div>

            <?php
                $pythonFile = "main.py";
                $result = shell_exec("sudo python " . $pythonFile);
                echo $result, " kg";
            ?>

            <br>

            <button type="submit" id="add-to-cart">Submit</button>
        </div>
    </div>