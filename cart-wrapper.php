<style>
    .cart {
        position: relative;
        background-color: #c7c8cc;
    }

    .cart .total {
        position: relative;
        display: flex;
        justify-content: space-between;
        border-top: 1px solid black;
        padding: 10px;
        top: 90%;
    }

    .cart-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .cart-btn button {
        border: none;
        color: white;
        cursor: pointer;
        padding: 15px 50px;
        border-radius: 5px;
        background-color: #5f264a;
    }

    .cart-btn button:hover {
        font-size: 14px;
        transition: 0.3s all ease-in-out;
    }
</style>

<div class="cart-wrapper">
    <div class="cart">
        <div class="total">
            <h2>Total:</h2>
            <h2>$100</h2>
        </div>
    </div>
    <div class="cart-btn"><button>CHECKOUT</button></div>
</div>