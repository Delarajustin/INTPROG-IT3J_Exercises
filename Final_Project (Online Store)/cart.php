<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - CyberCart Store</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            letter-spacing: 1.5px;
        }

        .logo span {
            color: #4cc9f0;
            text-shadow: 0 0 10px rgba(76, 201, 240, 0.5);
        }

        .cart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }

        .cart-items {
            flex: 2;
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .cart-summary {
            flex: 1;
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: fit-content;
        }

        h1 {
            color: #1a1a2e;
            margin-bottom: 25px;
            font-size: 28px;
            border-bottom: 3px solid #4cc9f0;
            padding-bottom: 10px;
        }

        h2 {
            color: #1a1a2e;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .cart-item {
            display: flex;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
            align-items: center;
        }

        .item-image {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #4cc9f0 0%, #4361ee 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .item-price {
            color: #4cc9f0;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .quantity-btn {
            width: 32px;
            height: 32px;
            background: #f0f0f0;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .quantity-btn:hover {
            background: #4cc9f0;
            color: white;
        }

        .quantity-display {
            width: 40px;
            text-align: center;
            font-weight: bold;
        }

        .remove-btn {
            background: none;
            border: none;
            color: #e63946;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: color 0.2s;
        }

        .remove-btn:hover {
            color: #d00000;
        }

        .item-total {
            font-weight: bold;
            font-size: 18px;
            color: #1a1a2e;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 22px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 2px solid #4cc9f0;
        }

        .total-amount {
            color: #4cc9f0;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #4cc9f0 0%, #4361ee 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 25px;
            box-shadow: 0 4px 12px rgba(76, 201, 240, 0.3);
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(76, 201, 240, 0.4);
        }

        .continue-shopping {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #4cc9f0;
            text-decoration: none;
            font-weight: 500;
        }

        .continue-shopping:hover {
            text-decoration: underline;
        }

        .empty-cart {
            text-align: center;
            padding: 40px 0;
            color: #666;
        }

        .empty-cart-icon {
            font-size: 60px;
            margin-bottom: 20px;
            color: #ddd;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            animation: fadeIn 0.5s;
            border: 1px solid #c3e6cb;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .cart-container {
                flex-direction: column;
            }

            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .item-image {
                margin-bottom: 15px;
            }

            .item-total {
                align-self: flex-end;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">Cyber<span>Cart</span> Store</div>
        </div>
    </header>

    <div class="container">
        <h1>Shopping Cart</h1>

        <?php
        $cart_items = array(
            array(
                'id' => 1,
                'name' => 'Wireless Bluetooth Headphones',
                'price' => 99.99,
                'quantity' => 1,
            ),
            array(
                'id' => 2,
                'name' => 'Smart Fitness Watch',
                'price' => 149.99,
                'quantity' => 1,
            ),
            array(
                'id' => 3,
                'name' => 'USB-C Fast Charger',
                'price' => 29.99,
                'quantity' => 1,
            )
        );

        $checkout_success = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
            if (!empty($cart_items)) {
                $checkout_success = true;

            }
        }

        $subtotal = 0;
        foreach ($cart_items as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $shipping = 9.99;
        $tax = $subtotal * 0.08;
        $total = $subtotal + $shipping + $tax;
        ?>

        <?php if ($checkout_success): ?>
            <div class="success-message">
                <h2>Checkout Successful!</h2>
                <p>Thank you for your order. Your payment has been processed successfully.</p>
                <p>Order Total: <strong>$<?php echo number_format($total, 2); ?></strong></p>
                <p>A confirmation email has been sent to your registered email address.</p>
            </div>
        <?php endif; ?>

        <div class="cart-container">
            <div class="cart-items">
                <?php if (empty($cart_items)): ?>
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <h2>Your cart is empty</h2>
                        <p>Add some products to get started!</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($cart_items as $item): ?>
                        <div class="cart-item" data-product-id="<?php echo $item['id']; ?>">
                            <div class="item-image">PRODUCT <?php echo $item['id']; ?></div>
                            <div class="item-details">
                                <div class="item-name"><?php echo htmlspecialchars($item['name']); ?></div>
                                <div class="item-price">$<?php echo number_format($item['price'], 2); ?></div>
                                <div class="quantity-controls">
                                    <button class="quantity-btn"
                                        onclick="updateQuantity(<?php echo $item['id']; ?>, -1)">-</button>
                                    <div class="quantity-display" id="quantity-<?php echo $item['id']; ?>">
                                        <?php echo $item['quantity']; ?></div>
                                    <button class="quantity-btn"
                                        onclick="updateQuantity(<?php echo $item['id']; ?>, 1)">+</button>
                                </div>
                                <button class="remove-btn" onclick="removeItem(<?php echo $item['id']; ?>)">🗑️ Remove</button>
                            </div>
                            <div class="item-total" id="total-<?php echo $item['id']; ?>">
                                $<?php echo number_format($item['price'] * $item['quantity'], 2); ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="cart-summary">
                <h2>Order Summary</h2>

                <div class="summary-row">
                    <div>Subtotal</div>
                    <div id="subtotal">$<?php echo number_format($subtotal, 2); ?></div>
                </div>

                <div class="summary-row">
                    <div>Shipping</div>
                    <div id="shipping">$<?php echo number_format($shipping, 2); ?></div>
                </div>

                <div class="summary-row">
                    <div>Tax</div>
                    <div id="tax">$<?php echo number_format($tax, 2); ?></div>
                </div>

                <div class="total">
                    <div>Total:</div>
                    <div class="total-amount" id="grand-total">$<?php echo number_format($total, 2); ?></div>
                </div>

                <?php if (!$checkout_success): ?>
                    <form method="POST">
                        <button type="submit" name="checkout" class="checkout-btn" <?php echo empty($cart_items) ? 'disabled' : ''; ?>>Proceed to Checkout</button>
                    </form>
                <?php else: ?>
                    <a href="products.php" class="checkout-btn" style="text-decoration: none; text-align: center;">Continue
                        Shopping</a>
                <?php endif; ?>

                <a href="products.php" class="continue-shopping">← Continue Shopping</a>
            </div>
        </div>
    </div>

    <script>
        function updateQuantity(productId, change) {
            const quantityDisplay = document.getElementById('quantity-' + productId);
            let quantity = parseInt(quantityDisplay.textContent);

            quantity += change;
            if (quantity < 1) quantity = 1;

            quantityDisplay.textContent = quantity;
            updateItemTotal(productId);
            updateCartSummary();
        }

        function removeItem(productId) {
            const cartItem = document.querySelector('[data-product-id="' + productId + '"]');
            cartItem.style.opacity = '0';
            setTimeout(() => {
                cartItem.remove();
                updateCartSummary();
                checkEmptyCart();
            }, 300);
        }

        function updateItemTotal(productId) {
            const cartItem = document.querySelector('[data-product-id="' + productId + '"]');
            const price = parseFloat(cartItem.querySelector('.item-price').textContent.replace('$', ''));
            const quantity = parseInt(cartItem.querySelector('.quantity-display').textContent);
            const total = (price * quantity).toFixed(2);
            cartItem.querySelector('.item-total').textContent = '$' + total;
        }

        function updateCartSummary() {
            let subtotal = 0;
            document.querySelectorAll('.item-total').forEach(item => {
                subtotal += parseFloat(item.textContent.replace('$', ''));
            });

            const shipping = 9.99;
            const tax = subtotal * 0.08;
            const total = subtotal + shipping + tax;

            document.getElementById('subtotal').textContent = '$' + subtotal.toFixed(2);
            document.getElementById('tax').textContent = '$' + tax.toFixed(2);
            document.getElementById('grand-total').textContent = '$' + total.toFixed(2);
        }

        function checkEmptyCart() {
            const cartItems = document.querySelectorAll('.cart-item');
            if (cartItems.length === 0) {
                const cartItemsContainer = document.querySelector('.cart-items');
                cartItemsContainer.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <h2>Your cart is empty</h2>
                        <p>Add some products to get started!</p>
                    </div>
                `;
                document.querySelector('.checkout-btn').disabled = true;
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const checkoutForm = document.querySelector('form');
            if (checkoutForm) {
                checkoutForm.addEventListener('submit', function (e) {
                    if (!confirm('Proceed to checkout? This will finalize your order.')) {
                        e.preventDefault();
                    }
                });
            }
        });
    </script>
</body>

</html>