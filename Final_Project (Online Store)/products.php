<?php
session_start();
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="page-header">
        <h1>Our Products</h1>
        <p>Explore our wide range of technology products</p>
    </div>

    <div class="products-page">
        <aside class="sidebar">
            <h3>Categories</h3>
            <ul class="categories-list">
                <li><a href="products.php" class="<?php echo $category == 'all' ? 'active' : ''; ?>">All Products</a>
                </li>
                <li><a href="products.php?category=laptops"
                        class="<?php echo $category == 'laptops' ? 'active' : ''; ?>">Laptops</a></li>
                <li><a href="products.php?category=smartphones"
                        class="<?php echo $category == 'smartphones' ? 'active' : ''; ?>">Smartphones</a></li>
                <li><a href="products.php?category=accessories"
                        class="<?php echo $category == 'accessories' ? 'active' : ''; ?>">Accessories</a></li>
                <li><a href="products.php?category=tablets"
                        class="<?php echo $category == 'tablets' ? 'active' : ''; ?>">Tablets</a></li>
            </ul>
        </aside>

        <main class="products-main">
            <div class="products-grid" id="products-grid"></div>
        </main>
    </div>
</div>

<script>
    const category = '<?php echo $category; ?>';

    document.addEventListener('DOMContentLoaded', function () {
        loadProducts(category);
    });

    async function loadProducts(category) {
        try {
            const response = await fetch('data/products.json');
            const data = await response.json();
            let products = data.products;

            if (category !== 'all') {
                products = products.filter(product => product.category === category);
            }

            const productsGrid = document.getElementById('products-grid');
            productsGrid.innerHTML = '';

            products.forEach(product => {
                const productCard = createProductCard(product);
                productsGrid.appendChild(productCard);
            });
        } catch (error) {
            console.error('Error loading products:', error);
        }
    }

    function createProductCard(product) {
        const card = document.createElement('div');
        card.className = 'product-card';
        card.innerHTML = `
            <div class="product-image">
                <img src="assets/images/products/${product.image}" alt="${product.name}">
            </div>
            <div class="product-info">
                <div class="product-category">${product.category}</div>
                <h3 class="product-title">${product.name}</h3>
                <div class="product-price">$${product.price}</div>
                <div class="product-rating">
                    ${generateStarRating(product.rating)}
                </div>
                <button class="add-to-cart" onclick="addToCart(${product.id})">
                    Add to Cart
                </button>
                <a href="product-details.php?id=${product.id}" class="btn-view-details">View Details</a>
            </div>
        `;
        return card;
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