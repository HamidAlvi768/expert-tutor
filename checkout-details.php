<?php
session_start();

// Page specific variables
$page_title = 'Checkout Details';
$page_class = 'checkout-details-page';

// Include necessary CSS files
$additional_css = ['assets/css/components/checkout-details.css'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <?php foreach ($additional_css as $css): ?>
        <link rel="stylesheet" href="<?php echo $css; ?>">
    <?php endforeach; ?>
</head>
<body class="<?php echo $page_class; ?>">
    <!-- Header Banner -->
    <div class="checkout-header">
        <h1>Checkout Details</h1>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="checkout-content">
            <div class="row">
                <!-- Left Column -->
                <div class="col-lg-7">
                    <!-- Payment Method Section -->
                    <div class="checkout-section">
                        <h2>Payment Method</h2>
                        <div class="payment-methods">
                            <img src="assets/images/icons/discover.png" alt="Discover">
                            <img src="assets/images/icons/mastercard.png" alt="Mastercard">
                            <img src="assets/images/icons/interac.png" alt="Interac" style="height: 35px;">
                            <img src="assets/images/icons/stripe.png" alt="Stripe">
                            <img src="assets/images/icons/maestro.png" alt="Maestro">
                        </div>
                    </div>

                    <!-- Payment Information Section -->
                    <div class="checkout-section">
                        <h2>Payment information</h2>
                        <div class="payment-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-icon"><i class="fas fa-credit-card"></i></span>
                                    <div class="input-content">
                                        <label>Card</label>
                                        <input type="text" value="************-***" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-icon"><i class="fas fa-credit-card"></i></span>
                                    <div class="input-content">
                                        <label>CVS</label>
                                        <input type="text" value="***3" readonly>
                                    </div>
                                </div>
                            </div>
                            <p class="processing-time">Card payment may take upto 24hours to be processed</p>
                            <div class="save-payment">
                                <input type="checkbox" id="save-payment">
                                <label for="save-payment">Save my payment details for future</label>
                            </div>
                            <button class="btn-confirm">Confirm Your Order</button>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-5">
                    <div class="checkout-section order-details">
                        <h2>Order Details</h2>
                        <div class="order-item">
                            <div class="item-info">
                                <img src="assets/images/icons/coin-stack.png" alt="Coins" class="coin-icon">
                                <span>150 Coin purchase</span>
                            </div>
                            <div class="item-price">PKR 345</div>
                        </div>
                        <div class="discount-code">
                            <input type="text" placeholder="Discount Code">
                        </div>
                        <div class="order-summary">
                            <div class="summary-row">
                                <span>Subtotal</span>
                                <span class="price">$217.57</span>
                            </div>
                            <div class="summary-row total">
                                <span>Total</span>
                                <span class="price">$217.57</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> 