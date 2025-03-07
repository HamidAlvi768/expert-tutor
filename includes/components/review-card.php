<?php
function renderReviewCard($reviewerImage, $reviewerName, $timeAgo, $rating, $content) {
    if (empty($reviewerName) || empty($content)) {
        return;
    }
    ?>
    <div class="col-lg-6 mb-4">
        <div class="review-card">
            <div class="review-header">
                <div class="reviewer-info">
                    <img src="<?php echo htmlspecialchars($reviewerImage); ?>" 
                         alt="<?php echo htmlspecialchars($reviewerName); ?>" 
                         class="reviewer-image">
                    <div class="reviewer-details">
                        <h5 class="reviewer-name"><?php echo htmlspecialchars($reviewerName); ?></h5>
                        <span class="review-time"><?php echo htmlspecialchars($timeAgo); ?></span>
                    </div>
                </div>
                <div class="review-rating">
                    <?php for($i = 0; $i < $rating; $i++): ?>
                        <i class="fas fa-star"></i>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="review-content">
                <p><?php echo htmlspecialchars($content); ?></p>
            </div>
        </div>
    </div>
    <?php
}

function renderReviewsSection($reviews) {
    if (!is_array($reviews) || empty($reviews)) {
        return;
    }
    ?>
    <section class="reviews-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">What Our Students Say</h2>
                <p class="section-subtitle">Real stories from our students who have experienced the quality of our education system and achieved their goals.</p>
            </div>
            
            <div class="reviews-slider">
                <div class="row g-4">
                    <?php
                    foreach ($reviews as $review) {
                        if (is_array($review) && count($review) >= 5) {
                            renderReviewCard($review[0], $review[1], $review[2], $review[3], $review[4]);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
} 