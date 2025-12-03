<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Welcome to CyberCart Store</h1>
            <p>Discover the latest technology products at amazing prices</p>
            <a href="products.php" class="btn btn-primary">Shop Now</a>
        </div>
    </div>
</section>

<section class="featured-products">
    <div class="container">
        <h2 class="section-title">Featured Products</h2>
        <div class="products-grid" id="featured-products">
        </div>
    </div>
</section>

<section class="categories">
    <div class="container">
        <h2 class="section-title">Shop by Category</h2>
        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <h3>Laptops</h3>
                <a href="products.php?category=laptops">Browse</a>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Smartphones</h3>
                <a href="products.php?category=smartphones">Browse</a>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-headphones"></i>
                </div>
                <h3>Accessories</h3>
                <a href="products.php?category=accessories">Browse</a>
            </div>
        </div>
</section>

<?php include 'includes/footer.php'; ?>