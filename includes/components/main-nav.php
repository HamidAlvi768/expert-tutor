<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Get the current page name to highlight active link
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!-- Main Navigation -->
<nav class="profile-main-nav">
    <div class="profile-container">
        <div class="profile-nav-content">
            <div class="profile-nav-left">
                <a href="index.php" class="profile-logo">
                    <img src="assets/images/profile-logo.png" alt="Tutor Expert" class="profile-logo-image">
                </a>
                <div class="profile-nav-links">
                    <a href="profile.php" class="<?php echo $current_page === 'profile' ? 'active' : ''; ?>">Profile</a>
                    <a href="messages.php" class="<?php echo $current_page === 'messages' ? 'active' : ''; ?>">Messages</a>
                    <a href="delivery.php" class="<?php echo $current_page === 'delivery' ? 'active' : ''; ?>">Delivery Work</a>
                    <a href="finance.php" class="<?php echo $current_page === 'finance' ? 'active' : ''; ?>">Manage Finance</a>
                    <a href="reviews.php" class="<?php echo $current_page === 'reviews' ? 'active' : ''; ?>">Reviews</a>
                </div>
            </div>

            <div class="profile-user-info">
                <img src="assets/images/profile.jpg" alt="John Smith" class="profile-user-pic">
                <span class="profile-user-name">John Smith</span>
                <i class="fas fa-user profile-verification-badge"></i>
            </div>
        </div>
    </div>
</nav> 