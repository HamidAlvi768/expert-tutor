<?php
function renderReviewCard($reviewerImage, $reviewerName, $timeAgo, $rating, $content) {
    ?>
    <div class="review-card">
        <div class="review-header">
            <div class="reviewer-info">
                <img src="<?php echo $reviewerImage; ?>" alt="<?php echo $reviewerName; ?>" class="reviewer-image">
                <div class="reviewer-details">
                    <h5 class="reviewer-name"><?php echo $reviewerName; ?></h5>
                    <span class="review-time"><?php echo $timeAgo; ?></span>
                </div>
            </div>
            <div class="review-rating">
                <?php for($i = 0; $i < $rating; $i++): ?>
                    <i class="fas fa-star"></i>
                <?php endfor; ?>
            </div>
        </div>
        <div class="review-content">
            <p><?php echo $content; ?></p>
        </div>
    </div>
    <?php
} 