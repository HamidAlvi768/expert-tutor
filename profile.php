<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Tutor Expert</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
    <!-- Top Header -->
    <header class="top-header">
        <div class="container">
            <div class="header-content">
                <div class="top-nav">
                    <a href="login.php" class="nav-link">Sign In</a>
                    <a href="support.php" class="nav-link">Support</a>
                    <a href="contact.php" class="nav-link">Contact Sales</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="container">
            <div class="nav-content">
                <div class="nav-left">
                    <a href="index.php" class="logo">
                        <span class="logo-text">Tutor Expert</span>
                    </a>
                    <div class="nav-links">
                        <a href="profile.php" class="active">Profile</a>
                        <a href="messages.php">Messages</a>
                        <a href="delivery.php">Delivery Work</a>
                        <a href="finance.php">Manage Finance</a>
                        <a href="reviews.php">Reviews</a>
                    </div>
                </div>

                <div class="user-profile">
                    <img src="assets/images/profile.jpg" alt="John Smith" class="profile-pic">
                    <span class="user-name">John Smith</span>
                    <i class="fas fa-check-circle verification-icon"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="profile-content">
        <div class="container">
            <form class="profile-form" action="/update-profile" method="POST">
                <!-- Profile Photo Section -->
                <div class="photo-upload">
                    <div class="photo-placeholder">
                        <img src="assets/images/profile-placeholder.jpg" alt="Upload Photo" id="profile-preview">
                        <input type="file" id="photo-upload" accept="image/*" hidden>
                    </div>
                    <label for="photo-upload" class="upload-label">Upload Your Photo</label>
                </div>

                <!-- Form Grid -->
                <div class="form-grid">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full_name" placeholder="Your First Name" class="form-control">
                    </div>

                    <!-- Nick Name -->
                    <div class="form-group">
                        <label for="nick-name">Nick Name</label>
                        <input type="text" id="nick-name" name="nick_name" placeholder="Your Nick Name" class="form-control">
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="">Male/Female</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <!-- Country -->
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" name="country" class="form-control">
                            <option value="">Your Country</option>
                            <!-- Countries will be populated via JavaScript -->
                        </select>
                    </div>

                    <!-- Language -->
                    <div class="form-group">
                        <label for="language">Language</label>
                        <select id="language" name="language" class="form-control">
                            <option value="">Set Language</option>
                            <!-- Languages will be populated via JavaScript -->
                        </select>
                    </div>

                    <!-- Time Zone -->
                    <div class="form-group">
                        <label for="timezone">Time Zone</label>
                        <select id="timezone" name="timezone" class="form-control">
                            <option value="">GMT</option>
                            <!-- Timezones will be populated via JavaScript -->
                        </select>
                    </div>
                </div>

                <!-- Phone Verification -->
                <div class="form-group full-width">
                    <label for="phone">Add Number To Verify</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" class="form-control">
                </div>

                <!-- Submit Button -->
                <div class="form-actions">
                    <button type="submit" class="btn-save">Save</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Custom JavaScript -->
    <script src="assets/js/profile.js"></script>
</body>
</html> 