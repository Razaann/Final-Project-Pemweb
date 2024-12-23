<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bucuworks offers various furniture, interior, and exterior products for your home. Visit our website to place your order.">
    <title>Bucuworks</title>
    <link rel="stylesheet" href="bucuworks.css">
    <script src="script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">
                <img src="images/logoBucuWorks.jpg" alt="Bucuworks Logo">
            </div>
            <ul class="nav-links">
                <li><a href="index.html#home-section">Home</a></li>
                <li><a href="index.html#about-section">About</a></li>
                <li><a href="index.html#reference">References</a></li>
                <li><a href="index.html#gallery-section">Gallery</a></li>
                <li><a href="index.html#team-section">Our Team</a></li>
                <li><a href="booking.html">Booking</a></li>
            </ul>
            <button class="hamburger" aria-expanded="false" aria-controls="nav-links" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </nav>
    </header>

    <!-- Product Section -->
    <div class="container" style="background-color: #facbab;">
        <h1 class="poppins-bold section-title black-font">Custom Product</h1>
        <p class="poppins-semibold mid-text black-font reference-size">Explore Our Selection Of Products Available For You To Discover.</p>
        <div class="images">
            <div>
                <img class="img-size mid-text" src="images/furniture10.jpg" alt="Furniture product">
                <p class="poppins-semibold">Furniture</p>
                <button class="poppins-semibold submit-button" aria-label="Pilih Furniture" onclick="showOrderForm('Furniture')">Choose Product</button>
            </div>
            <div>
                <img class="img-size mid-text" src="images/interior10.jpg" alt="Interior product">
                <p class="poppins-semibold">Interior</p>
                <button class="poppins-semibold submit-button" aria-label="Pilih Interior" onclick="showOrderForm('Interior')">Choose Product</button>
            </div>
            <div>
                <img class="img-size mid-text" src="images/eksterior9.jpg" alt="Exterior product">
                <p class="poppins-semibold">Exterior</p>
                <button class="poppins-semibold submit-button" aria-label="Pilih Eksterior" onclick="showOrderForm('Exterior')">Choose Product</button>
            </div>
        </div>
    </div>

    <!-- Payment Section -->
    <section id="order-panel" class="hidden">
        <div class="container">
            <h2 class="section-title poppins-bold">Order Form - <span id="selected-product-name"></span></h2>
            <form method="POST" action="proses.php">
                <input type="hidden" id="selectedProduct" name="selectedProduct">
    
                <!-- Customer Name -->
                <div class="form-group">
                    <label for="customerName" class="poppins-semibold">Your Name:</label>
                    <input type="text" id="customerName" name="customerName" required>
                </div>
    
                <!-- Customer Number -->
                <div class="form-group">
                    <label for="customerNumber" class="poppins-semibold">Your Whatsapp Number:</label>
                    <input type="text" id="customerNumber" name="customerNumber" required>
                </div>
    
                <!-- Dynamic Form Fields -->
                <div class="form-group">
                    <div id="dynamicForm"></div>
                </div>
    
                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="poppins-semibold submit-button">Send Order</button>
                </div>
            </form>
        </div>
    </section>
    

    <!-- Payment Info -->
    <div class="container" style="background-color: #facbab;">
        <section id="payment-info">
            <h1 class="poppins-bold section-title black-font">Payment Method</h1>
            <p class="poppins-semibold black-font reference-size">You Can Choose Between These 2 Payment Method</p>
            <div class="payment-methods">
                <div>
                    <img class="img-size mid-text" src="images/logo_dana.png" alt="Dana payment method">
                    <p class="poppins-bold">081383545643</p>
                </div>
                <div>
                    <img class="img-size mid-text" src="images/logo_mandiri.png" alt="Mandiri payment method">
                    <p class="poppins-bold">0928282992</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Map Section -->
    <div class="container">
        <section id="store-location">
            <h2 class="section-title poppins-bold">Alamat Toko</h2>
            <p class="poppins-semibold mid-text">Jln Mayor Zen Lebak Jaya 3 Lorong Jaya 12 Kalidoni Palembang, Palembang 30119</p>
            <iframe 
                src="https://www.google.com/maps?q=Jln+Mayor+Zen+Lebak+Jaya+3+Lorong+Jaya+12+Kalidoni+Palembang,+Palembang+30119&output=embed" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Google Maps Location"></iframe>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footers-section">
        <h3 class="poppins-bold black-font">Copyright © 2024 Bucuworks</h3>
    </footer>
</body>
</html>
