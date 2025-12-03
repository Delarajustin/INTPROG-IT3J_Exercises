<script>
    async function placeOrder() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (cart.length === 0) {
            alert('Your cart is empty.');
            return;
        }

        const formData = {
            firstName: document.getElementById('firstName').value,
            lastName: document.getElementById('lastName').value,
            email: document.getElementById('email').value,
            address: document.getElementById('address').value,
            city: document.getElementById('city').value,
            state: document.getElementById('state').value,
            zipCode: document.getElementById('zipCode').value,
            cardNumber: document.getElementById('cardNumber').value,
            expiryDate: document.getElementById('expiryDate').value,
            cvv: document.getElementById('cvv').value,
            cardName: document.getElementById('cardName').value
        };

        const orderData = {
            customer_info: formData,
            items: cart,
            payment_method: 'credit_card',
            notes: ''
        };

        try {
            const response = await fetch('api/save-order.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(orderData)
            });

            const result = await response.json();

            if (result.success) {
                alert(`Order placed successfully! Your order ID is: ${result.order_id}`);

                localStorage.removeItem('cart');
                updateCartCount();
                window.location.href = 'index.php';
            } else {
                alert('Failed to place order: ' + result.message);
            }
        } catch (error) {
            console.error('Error placing order:', error);
            alert('An error occurred while placing your order. Please try again.');
        }
    }

    document.getElementById('checkout-form').addEventListener('submit', function (e) {
        e.preventDefault();
        placeOrder();
    });
</script>