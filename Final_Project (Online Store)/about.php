<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="page-header">
        <h1>About CyberCart Store</h1>
        <p>Your trusted partner in technology</p>
    </div>

    <div class="about-content">
        <div class="about-text">
            <h2>Welcome to CyberCart Store</h2>
            <p>Welcome to CyberCart Store, your number one source for all things tech. We're dedicated to providing you the very best of technology products, with an emphasis on quality, customer service, and uniqueness.</p>
            
            <p>Founded in 2025, CyberCart Store has come a long way from its beginnings. When we first started out, our passion for technology drove us to start our own business. We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>

            <div class="signature">
                <p>Sincerely,</p>
                <p><strong>The CyberCart Store Team</strong></p>
            </div>

            <div class="new-badge">
                <span>NEW</span>
            </div>
        </div>
        
        <div class="about-image">
            <img src="assets/images/banners/about-us.png" alt="About CyberCart Store">
            <div class="image-overlay">
                <h3>Since 2025</h3>
                <p>Pioneering Technology Retail</p>
            </div>
        </div>
    </div>

    <div class="features-section">
        <h2>Why Choose CyberCart Store?</h2>
        <div class="features-grid">
            <div class="feature">
                <i class="fas fa-shipping-fast"></i>
                <h3>Fast Shipping</h3>
                <p>Free shipping on orders over $99. Most items delivered within 2-3 business days.</p>
            </div>
            <div class="feature">
                <i class="fas fa-shield-alt"></i>
                <h3>Quality Guarantee</h3>
                <p>All products come with manufacturer warranty and our quality assurance.</p>
            </div>
            <div class="feature">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Our customer support team is available around the clock to assist you.</p>
            </div>
            <div class="feature">
                <i class="fas fa-undo"></i>
                <h3>Easy Returns</h3>
                <p>30-day return policy with no questions asked.</p>
            </div>
            <div class="feature">
                <i class="fas fa-tags"></i>
                <h3>Best Prices</h3>
                <p>We offer competitive pricing and exclusive deals to ensure you get the best value for your money.</p>
        </div>
        <d class="feature">
            <i class="fas fa-lock"></i>
            <h3>Secure Checkout</h3>
            <p>Your personal information is protected with advanced encryption for worry-free shopping.</>
        </div>
    </div>

    <div class="stats-section">
        <div class="stat">
            <h3>500+</h3>
            <p>Happy Customers</p>
        </div>
        <div class="stat">
            <h3>100+</h3>
            <p>Products</p>
        </div>
        <div class="stat">
            <h3>50+</h3>
            <p>Brands</p>
        </div>
        <div class="stat">
            <h3>24/7</h3>
            <p>Support</p>
        </div>
    </div>
</div>

<style>
.page-header {
    text-align: center;
    margin-bottom: 50px;
}

.page-header h1 {
    font-size: 3rem;
    color: var(--dark);
    margin-bottom: 15px;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.page-header p {
    font-size: 1.2rem;
    color: var(--secondary);
}

.about-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 50px;
    margin-bottom: 50px;
    align-items: start;
}

.about-text h2 {
    font-size: 2rem;
    color: var(--dark);
    margin-bottom: 25px;
    border-left: 4px solid var(--primary);
    padding-left: 15px;
}

.about-text p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: var(--secondary);
}

.signature {
    margin-top: 30px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 10px;
    border-left: 4px solid var(--primary);
}

.signature p {
    margin-bottom: 5px;
    font-style: italic;
}

.new-badge {
    display: inline-block;
    background: linear-gradient(135deg, var(--success), #059669);
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
    margin-top: 20px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.about-image {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.about-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.about-image:hover img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    padding: 30px 20px 20px;
    text-align: center;
}

.image-overlay h3 {
    font-size: 1.5rem;
    margin-bottom: 5px;
}

.image-overlay p {
    font-size: 1rem;
    opacity: 0.9;
}

.features-section {
    background: white;
    padding: 60px 40px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    margin: 50px 0;
    text-align: center;
}

.features-section h2 {
    font-size: 2.2rem;
    color: var(--dark);
    margin-bottom: 40px;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.feature {
    padding: 30px 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.feature:hover {
    transform: translateY(-5px);
}

.feature i {
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: 20px;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.feature h3 {
    font-size: 1.3rem;
    color: var(--dark);
    margin-bottom: 15px;
}

.feature p {
    color: var(--secondary);
    line-height: 1.6;
}

.stats-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 30px;
    text-align: center;
    margin-top: 50px;
    padding: 40px;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    border-radius: 15px;
    color: white;
}

.stat h3 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
}

.stat p {
    font-size: 1rem;
    opacity: 0.9;
}

@media (max-width: 768px) {
    .about-content {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .page-header h1 {
        font-size: 2.2rem;
    }
    
    .features-section {
        padding: 40px 20px;
    }
    
    .stats-section {
        grid-template-columns: repeat(2, 1fr);
        padding: 30px 20px;
    }
    
    .about-image img {
        height: 300px;
    }
}

@media (max-width: 480px) {
    .stats-section {
        grid-template-columns: 1fr;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?>