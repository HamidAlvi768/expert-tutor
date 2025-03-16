<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request A Tutor - Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/request-tutor.css">
</head>
<body class="request-tutor-page">
    <!-- Top Header -->
    <header class="profile-top-header">
        <div class="profile-container">
            <div class="profile-header-content">
                <div class="profile-top-nav">
                    <a href="login.php" class="profile-nav-link">Sign In</a>
                    <a href="support.php" class="profile-nav-link">Support</a>
                    <a href="contact.php" class="profile-nav-link">Contact Sales</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="profile-main-nav">
        <div class="profile-container">
            <div class="profile-nav-content">
                <div class="profile-nav-left">
                    <a href="index.php" class="profile-logo">
                        <img src="assets/images/profile-logo.png" alt="Tutor Expert" class="profile-logo-image">
                    </a>
                    <div class="profile-nav-links">
                        <a href="profile.php">Profile</a>
                        <a href="messages.php">Messages</a>
                        <a href="delivery.php">Delivery Work</a>
                        <a href="finance.php">Manage Finance</a>
                        <a href="teacher-reviews.php">Reviews</a>
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

    <!-- Main Content -->
    <main class="request-tutor-main">
        <div class="container">
            <h1 class="request-tutor-title">Request A Tutor</h1>
            
            <form class="request-tutor-form" action="/submit-request" method="POST">
                <!-- Job Details Section -->
                <div class="form-section">
                    <label class="form-label">Job Details</label>
                    <textarea class="form-control request-tutor-textarea" rows="8"></textarea>
                </div>

                <!-- Two Column Layout -->
                <div class="form-row">
                    <div class="form-section">
                        <label class="form-label">Set Location</label>
                        <input type="text" class="form-control" placeholder="Enter location">
                    </div>
                    <div class="form-section">
                        <label class="form-label">Phone No</label>
                        <input type="tel" class="form-control" placeholder="Enter phone number">
                    </div>
                </div>

                <!-- Full Width Fields -->
                <div class="form-section">
                    <label class="form-label">Your level</label>
                    <input type="text" class="form-control" placeholder="Enter your level">
                </div>

                <div class="form-row">
                    <div class="form-section">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="Select subject">
                    </div>
                    <div class="form-section">
                        <label class="form-label">I want</label>
                        <input type="text" class="form-control" placeholder="What do you want?">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-section">
                        <label class="form-label">Meeting option</label>
                        <input type="text" class="form-control" placeholder="Select meeting option">
                    </div>
                    <div class="form-section">
                        <label class="form-label">Post Code</label>
                        <input type="text" class="form-control" placeholder="Enter post code">
                    </div>
                </div>

                <!-- Budget Section -->
                <div class="form-section">
                    <label class="form-label">Budget</label>
                    <select class="form-select">
                        <option value="" selected>Pkr</option>
                        <!-- Add more options here -->
                    </select>
                </div>

                <!-- Advanced Options -->
                <div class="form-row three-columns">
                    <div class="form-section">
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                            <option value="" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-section with-connector">
                        <label class="form-label">I need Some</label>
                        <div class="connected-inputs">
                            <input type="text" class="form-control" placeholder="Enter value">
                            <span class="connector">to</span>
                            <select class="form-select">
                                <option value="" selected>Enter</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                    </div>
                    <div class="form-section">
                        <label class="form-label">Get tutors from</label>
                        <select class="form-select">
                            <option value="" selected>Per Month</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                </div>

                <!-- File Upload -->
                <div class="form-section">
                    <label class="form-label">Upload Files</label>
                    <div class="file-upload">
                        <input type="file" id="fileUpload" class="file-input" hidden>
                        <div class="file-input-container">
                            <input type="text" class="form-control file-name" placeholder="File" readonly>
                            <button type="button" class="btn btn-primary attach-btn" onclick="document.getElementById('fileUpload').click()">
                                Attach
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" class="btn btn-outline-primary preview-btn">Preview</button>
                    <button type="submit" class="btn btn-primary finish-btn">Finish</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // File Upload Handling
            const fileUpload = document.getElementById('fileUpload');
            const fileName = document.querySelector('.file-name');

            if (fileUpload && fileName) {
                fileUpload.addEventListener('change', function(e) {
                    if (this.files.length > 0) {
                        fileName.value = this.files[0].name;
                    }
                });
            }

            // Form Preview
            const previewBtn = document.querySelector('.preview-btn');
            if (previewBtn) {
                previewBtn.addEventListener('click', function() {
                    // Collect form data
                    const formData = new FormData(document.querySelector('.request-tutor-form'));
                    console.log('Preview Data:', Object.fromEntries(formData));
                });
            }

            // Form Submission
            const requestForm = document.querySelector('.request-tutor-form');
            if (requestForm) {
                requestForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    window.location.href = 'my-requests.php';
                });
            }
        });
    </script>
</body>
</html> 