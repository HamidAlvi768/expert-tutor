<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body class="profile-page">
    <!-- Include Top Header -->
    <?php include 'includes/components/top-header.php'; ?>

    <!-- Include Main Navigation -->
    <?php include 'includes/components/main-nav.php'; ?>

    <!-- Main Content -->
    <main class="profile-main-content">
        <div class="profile-container">
            <form class="profile-form-container" action="/update-profile" method="POST">
                <!-- Profile Photo Section -->
                <div class="profile-photo-upload">
                    <div class="profile-photo-placeholder">
                        <img src="assets/images/profile-placeholder.jpg" alt="Upload Photo" id="profile-preview">
                        <input type="file" id="photo-upload" accept="image/*" hidden>
                    </div>
                    <label for="photo-upload" class="profile-upload-label">Upload Your Photo</label>
                </div>

                <!-- Form Grid -->
                <div class="profile-form-grid">
                    <!-- Full Name -->
                    <div class="profile-form-group">
                        <label class="profile-label" for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full_name" placeholder="Your First Name" class="profile-form-control">
                    </div>

                    <!-- Nick Name -->
                    <div class="profile-form-group">
                        <label class="profile-label" for="nick-name">Nick Name</label>
                        <input type="text" id="nick-name" name="nick_name" placeholder="Your Nick Name" class="profile-form-control">
                    </div>

                    <!-- Gender -->
                    <div class="profile-form-group">
                        <label class="profile-label" for="gender">Gender</label>
                        <select id="gender" name="gender" class="profile-form-control profile-select-control">
                            <option value="">Male/Female</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <!-- Country -->
                    <div class="profile-form-group">
                        <label class="profile-label" for="country">Country</label>
                        <select id="country" name="country" class="profile-form-control profile-select-control">
                            <option value="">Your Country</option>
                            <!-- Countries will be populated via JavaScript -->
                        </select>
                    </div>

                    <!-- Language -->
                    <div class="profile-form-group">
                        <label class="profile-label" for="language">Language</label>
                        <select id="language" name="language" class="profile-form-control profile-select-control">
                            <option value="">Set Language</option>
                            <!-- Languages will be populated via JavaScript -->
                        </select>
                    </div>

                    <!-- Time Zone -->
                    <div class="profile-form-group">
                        <label class="profile-label" for="timezone">Time Zone</label>
                        <select id="timezone" name="timezone" class="profile-form-control profile-select-control">
                            <option value="">GMT</option>
                            <!-- Timezones will be populated via JavaScript -->
                        </select>
                    </div>
                </div>

                <!-- Phone Verification -->
                <div class="profile-form-group full-width">
                    <label class="profile-label" for="phone">Add Number To Verify</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" class="profile-form-control">
                </div>

                <!-- Submit Button -->
                <div class="profile-form-actions">
                    <button type="submit" class="profile-btn-save">Save</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/profile.js"></script>
</body>
</html> 