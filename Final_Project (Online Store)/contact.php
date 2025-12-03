<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="page-header">
        <h1>CyberCart Store</h1>
        <p>Contact Us</p>
    </div>

    <div class="contact-page">
        <div class="contact-info">
            <h2>We'd love to hear from you</h2>
            <h3>Get in Touch</h3>
            
            <div class="contact-method">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <p><strong>Muntinlupa City, Philippines</strong></p>
                </div>
            </div>
            
            <div class="contact-method">
                <i class="fas fa-phone"></i>
                <div>
                    <p><strong>+63 (555) 9638782564</strong></p>
                </div>
            </div>
            
            <div class="contact-method">
                <i class="fas fa-envelope"></i>
                <div>
                    <p><strong>cybercartstore@gmail.com</strong></p>
                </div>
            </div>
            
            <div class="business-hours">
                <h3>Store Hours</h3>
                <div class="hours">
                    <span>Monday - Friday:</span>
                    <span>9am - 9pm</span>
                </div>
                <div class="hours">
                    <span>Saturday:</span>
                    <span>10am - 8pm</span>
                </div>
                <div class="hours">
                    <span>Sunday:</span>
                    <span>11am - 6pm</span>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
            <h2>Send us a Message</h2>
            <form id="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<style>
.page-header {
    text-align: center;
    margin-bottom: 40px;
}

.page-header h1 {
    font-size: 2.5rem;
    color: var(--dark);
    margin-bottom: 10px;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.page-header p {
    font-size: 1.3rem;
    color: var(--secondary);
    font-weight: 500;
}

.contact-page {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    margin: 40px 0;
    align-items: start;
}

.contact-info {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    height: fit-content;
}

.contact-info h2 {
    font-size: 1.8rem;
    color: var(--dark);
    margin-bottom: 10px;
    text-align: center;
}

.contact-info h3 {
    font-size: 1.3rem;
    color: var(--primary);
    margin-bottom: 30px;
    text-align: center;
    font-weight: 600;
}

.contact-method {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
    padding: 15px;
    background: #f8fafc;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.contact-method:hover {
    transform: translateX(5px);
    background: #f0f9ff;
}

.contact-method i {
    font-size: 1.5rem;
    color: var(--primary);
    width: 30px;
    text-align: center;
}

.contact-method p {
    margin: 0;
    font-size: 1.1rem;
    color: var(--dark);
}

.business-hours {
    margin-top: 40px;
    padding-top: 30px;
    border-top: 2px solid #e2e8f0;
}

.business-hours h3 {
    font-size: 1.3rem;
    color: var(--dark);
    margin-bottom: 20px;
    text-align: left;
}

.hours {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
    padding: 8px 0;
    border-bottom: 1px solid #f1f5f9;
}

.hours span:first-child {
    color: var(--secondary);
    font-weight: 500;
}

.hours span:last-child {
    color: var(--dark);
    font-weight: 600;
}

.contact-form {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.contact-form h2 {
    font-size: 1.8rem;
    color: var(--dark);
    margin-bottom: 30px;
    text-align: center;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--dark);
    font-size: 1rem;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f8fafc;
}

.form-control:focus {
    outline: none;
    border-color: var(--primary);
    background: white;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

.btn-primary {
    width: 100%;
    padding: 15px;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3);
}

@media (max-width: 768px) {
    .contact-page {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .contact-info,
    .contact-form {
        padding: 30px 20px;
    }
}

@media (max-width: 480px) {
    .contact-method {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .hours {
        flex-direction: column;
        text-align: center;
        gap: 5px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };
            
            if (!formData.name || !formData.email || !formData.subject || !formData.message) {
                alert('Please fill in all fields.');
                return;
            }
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(formData.email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            alert('Thank you for your message! We will get back to you within 24 hours.');
            
            contactForm.reset();
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>