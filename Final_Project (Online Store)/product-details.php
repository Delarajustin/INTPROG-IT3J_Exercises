<?php
$productId = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <div id="product-details">
    </div>
</div>

<script>
    const productId = <?php echo $productId; ?>;

    document.addEventListener('DOMContentLoaded', function() {
        loadProductDetails(productId);
    });

    async function loadProductDetails(productId) {
        if (!productId) {
            document.getElementById('product-details').innerHTML = '<p>Product not found.</p>';
            return;
        }

        try {
            const response = await fetch('data/products.json');
            const data = await response.json();
            const product = data.products.find(p => p.id === productId);

            if (!product) {
                document.getElementById('product-details').innerHTML = '<p>Product not found.</p>';
                return;
            }

            displayProductDetails(product);
        } catch (error) {
            console.error('Error loading product details:', error);
        }
    }

    function displayProductDetails(product) {
        const productDetails = document.getElementById('product-details');
        productDetails.innerHTML = `
            <div class="breadcrumb">
                <a href="index.php">Home</a> &gt; 
                <a href="products.php?category=${product.category}">${product.category}</a> &gt; 
                <span>${product.name}</span>
            </div>
            <div class="product-details-container">
                <div class="product-image-large">
                    <img src="assets/images/products/${product.image}" alt="${product.name}">
                </div>
                <div class="product-info-details">
                    <h1>${product.name}</h1>
                    <div class="product-price">$${product.price}</div>
                    <div class="product-rating">
                        ${generateStarRating(product.rating)}
                        <span class="rating-value">${product.rating}</span>
                    </div>
                    <p class="product-description">${product.description}</p>
                    <div class="product-actions">
                        <button class="add-to-cart" onclick="addToCart(${product.id})">Add to Cart</button>
                    </div>
                </div>
            </div>
        `;
    }

    function generateStarRating(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= Math.floor(rating)) {
                stars += '<i class="fas fa-star"></i>';
            } else if (i === Math.ceil(rating) && !Number.isInteger(rating)) {
                stars += '<i class="fas fa-star-half-alt"></i>';
            } else {
                stars += '<i class="far fa-star"></i>';
            }
        }
        return stars;
    }
</script>

<?php include 'includes/footer.php'; ?>