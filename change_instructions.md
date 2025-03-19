# Code Changes for Payment Method Display and Layout Updates

## 1. checkout-details.php
Replace the payment methods section with:
```php
<div class="checkout-section">
    <h2>Payment Method</h2>
    <div class="payment-methods">
        <img src="assets/images/icons/easypaisa.png" alt="Easypaisa">
    </div>
</div>
```

## 2. assets/css/components/base-coin.css
Add/update these media query rules:
```css
@media (max-width: 992px) {
    .main-content-wrapper {
        min-height: calc(95vh - 120px);
    }

    .hero-content-container {
        margin-bottom: 0;
    }
}
```

## 3. includes/templates/hero-contents/buy-coin-hero.php
Update the payment methods section to:
```php
<div class="payment-methods">
    <p class="payment-text">Payment Method Available</p>
    <div class="payment-logos">
        <img src="assets/images/icons/easypaisa.png" alt="Easypaisa">
    </div>
</div>
```

Note: Make sure the `easypaisa.png` image is present in the `assets/images/icons/` directory. 