<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Coins - Expert Tutor</title>
    <!-- Include necessary CSS files -->
    <link rel="stylesheet" href="assets/css/components/top-header.css">
    <link rel="stylesheet" href="assets/css/components/tutor-header.css">
    <link rel="stylesheet" href="assets/css/components/footer.css">
    <link rel="stylesheet" href="assets/css/components/coin-purchase.css">
</head>
<body>
    <!-- Include top header -->
    <?php include 'components/top-header.php'; ?>
    
    <!-- Include tutor header -->
    <?php include 'components/tutor-header.php'; ?>
    
    <!-- Main Content -->
    <main class="coin-purchase-page">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="coin-purchase-content">
                <h1>Purchase Coins</h1>
                <p class="subtitle">Choose your preferred coin package to continue learning</p>
                
                <div class="coin-packages">
                    <!-- Coin Package 1 -->
                    <div class="coin-package">
                        <div class="package-header">
                            <img src="assets/images/icons/coin-stack.png" alt="Coin Stack">
                            <h3>Starter Pack</h3>
                        </div>
                        <div class="package-price">
                            <span class="amount">PKR 25</span>
                            <span class="coins">500 Coins</span>
                        </div>
                        <ul class="package-benefits">
                            <li>Access to basic tutorials</li>
                            <li>24/7 support</li>
                            <li>Valid for 30 days</li>
                        </ul>
                        <button class="purchase-btn">Purchase Now</button>
                    </div>

                    <!-- Coin Package 2 -->
                    <div class="coin-package featured">
                        <div class="package-header">
                            <img src="assets/images/icons/coin-stack.png" alt="Coin Stack">
                            <h3>Popular Pack</h3>
                            <span class="featured-tag">Most Popular</span>
                        </div>
                        <div class="package-price">
                            <span class="amount">PKR 50</span>
                            <span class="coins">1200 Coins</span>
                        </div>
                        <ul class="package-benefits">
                            <li>Access to premium tutorials</li>
                            <li>Priority support</li>
                            <li>Valid for 60 days</li>
                            <li>Bonus 200 coins</li>
                        </ul>
                        <button class="purchase-btn">Purchase Now</button>
                    </div>

                    <!-- Coin Package 3 -->
                    <div class="coin-package">
                        <div class="package-header">
                            <img src="assets/images/icons/coin-stack.png" alt="Coin Stack">
                            <h3>Pro Pack</h3>
                        </div>
                        <div class="package-price">
                            <span class="amount">$100</span>
                            <span class="coins">2500 Coins</span>
                        </div>
                        <ul class="package-benefits">
                            <li>Access to all tutorials</li>
                            <li>VIP support</li>
                            <li>Valid for 90 days</li>
                            <li>Bonus 500 coins</li>
                            <li>Exclusive workshops</li>
                        </ul>
                        <button class="purchase-btn">Purchase Now</button>
                    </div>
                </div>

                <div class="payment-section">
                    <h2>Payment Methods</h2>
                    <div class="payment-methods">
                        <div class="payment-method">
                            <input type="radio" name="payment" id="credit-card" checked>
                            <label for="credit-card">
                                <img src="assets/images/icons/credit-card.png" alt="Credit Card">
                                Credit Card
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" name="payment" id="paypal">
                            <label for="paypal">
                                <img src="assets/images/icons/paypal.png" alt="PayPal">
                                PayPal
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" name="payment" id="bank-transfer">
                            <label for="bank-transfer">
                                <img src="assets/images/icons/bank.png" alt="Bank Transfer">
                                Bank Transfer
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Include footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Include necessary JavaScript files -->
    <script src="assets/js/coin-purchase.js"></script>
</body>
</html> 