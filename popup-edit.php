<style>
    .popup-container1 {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .popup1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        max-width: 400px;
        width: 80%;
    }

    .popup1 h2 {
        margin-top: 0;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    .popup1 form {
        margin-top: 20px;
    }

    .popup1 label {
        display: block;
        margin-bottom: 5px;
    }

    .popup1 input[type="file"],
    .popup1 input[type="text"],
    .popup1 input[type="number"],
    .popup1 input[type="radio"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .popup1 input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #5f264a;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .radio-buttons input[type="radio"] {
        display: none;
    }

    .radio-buttons label {
        display: inline-block;
        cursor: pointer;
        margin-right: 10px;
    }

    .radio-buttons input[type="radio"]+label:before {
        content: "";
        display: inline-block;
        width: 16px;
        height: 16px;
        margin-right: 5px;
        border: 1px solid #adb5bd;
        border-radius: 50%;
        vertical-align: middle;
    }

    .radio-buttons input[type="radio"]:checked+label:before {
        background-color: #5f264a;
    }

    .popup1 input:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="popup-container1" id="popupContainer1">
    <div class="popup1" id="popup1">
        <span class="close" id="close-btn1">&times;</span>
        <h2>Edit Item</h2>
        <form action="edit.php" method="POST" enctype="multipart/form-data" id="editForm">
            <input type="hidden" id="editItemId" name="editItemId">
            <label for="editItemImage">Item Image:</label>
            <input type="file" id="editItemImage" name="editItemImage" accept="image/*">

            <label for="editItemName">Item Name:</label>
            <input type="text" id="editItemName" name="editItemName" required autocomplete="off">

            <label for="editItemPrice">Item Price:</label>
            <input type="number" id="editItemPrice" name="editItemPrice" required autocomplete="off">

            <div class="form-group mb-3">
                <div class="radio-buttons">
                    <label for="editType">Product Type:</label>
                    <input type="radio" name="editType" id="editKilo" value="kilo">
                    <label for="editKilo">Kilo</label>
                    <input type="radio" name="editType" id="editPcs" value="pcs">
                    <label for="editPcs">Pcs</label>
                </div>

                <div class="radio-buttons">
                    <label for="editUnit">Product Unit:</label>
                    <input type="radio" name="editUnit" id="editVegs" value="vegetable">
                    <label for="editVegs">Vegetables</label>
                    <input type="radio" name="editUnit" id="editFruit" value="fruit">
                    <label for="editFruit">Fruits</label>
                </div>
            </div>
            <input type="submit" name="submit1" value="Update">
        </form>
    </div>
</div>