<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile Wizard - Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile-navigation.css">
    <style>
        /* Teacher Profile Wizard Specific Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        
        .wizard-container {
            display: flex;
            min-height: calc(100vh - 150px);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        /* Sidebar Styles */
        .wizard-sidebar {
            width: 300px;
            background-color: transparent;
            border-radius: 10px;
            padding: 0;
            margin-right: 20px;
            font-size: large;
        }
        
        .wizard-steps {
            list-style: none;
            padding: 30px 0;
            margin: 0;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            height: 80%;
        }
        
        .wizard-step-item {
            padding: 22px 30px;
            display: flex;
            align-items: center;
            color: #6c757d;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .wizard-step-item.active {
            color: #6366F1;
            font-weight: 600;
        }
        
        .wizard-step-item:hover:not(.active) {
            background-color: #f8f9fa;
            cursor: pointer;
        }
        
        .wizard-step-item::before {
            content: '•';
            margin-right: 10px;
            font-size: 20px;
        }
        
        /* Main Content Area */
        .wizard-content {
            flex: 1;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }
        
        /* Form Styles */
        .wizard-form-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .wizard-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        
        .wizard-form-group {
            margin-bottom: 20px;
        }
        
        .wizard-form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
            background-color: #F3F3F3;
            color: #140489;
        }
        
        .wizard-form-control:focus {
            border-color: #6366F1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.1);
            outline: none;
        }
        
        .wizard-select-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236c757d' viewBox='0 0 16 16'%3E%3Cpath d='M8 10.5a.5.5 0 0 1-.354-.146l-4-4a.5.5 0 0 1 .708-.708L8 9.293l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.354.146z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 12px;
            padding-right: 40px;
        }
        
        /* Photo Upload Styles */
        .profile-photo-upload {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 30px;
            gap: 0.8rem;
        }
        
        .profile-photo-placeholder {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
            position: relative;
            background-color: #f0f1ff;
            cursor: pointer;
            background: linear-gradient(135deg, #c471ed, #8a3cda);
        }
        
        .profile-photo-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }
        
        .upload-your-photo {
            font-size: 15px;
            color: black;
            margin-top: 10px;
        }
        
        /* Button Styles */
        .wizard-form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
            gap: 15px;
        }
        
        .btn-save {
            background-color: white;
            color: #6c757d;
            border: 1px solid #ddd;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-save:hover {
            background-color: #f8f9fa;
        }
        
        .btn-next {
            background-color: #6366F1;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-next:hover {
            background-color: #5152e2;
        }
    </style>
</head>
<body>
    <!-- Include Top Header -->
    <?php include 'includes/components/top-header.php'; ?>

    <!-- Include Main Navigation -->
    <?php include 'includes/components/main-nav.php'; ?>

    <!-- Wizard Container -->
    <div class="container">
        <div class="wizard-container">
            <!-- Sidebar -->
            <div class="wizard-sidebar">
                <ul class="wizard-steps">
                    <li class="wizard-step-item active">Teacher Profile</li>
                    <li class="wizard-step-item">Subject Teach</li>
                    <li class="wizard-step-item">Education /Experience</li>
                    <li class="wizard-step-item">Professional Experience</li>
                    <li class="wizard-step-item">Teaching Details</li>
                    <li class="wizard-step-item">Description</li>
                </ul>
            </div>
            
            <!-- Main Content -->
            <div class="wizard-content">
                <form class="wizard-form-container" id="teacher-profile-form">
                    <!-- Profile Photo Upload -->
                    <div class="profile-photo-upload">
                        <div class="profile-photo-placeholder">
                            <img src="assets/images/profiles/teacher-avatar.jpg" alt="Profile Photo" id="profile-preview">
                            <input type="file" id="profile-upload" hidden>
                        </div>
                        <div class="upload-your-photo">Upload Your Photo</div>
                    </div>
                    
                    <!-- Form Fields -->
                    <div class="wizard-form-grid">
                        <!-- Full Name -->
                        <div class="wizard-form-group">
                            <input type="text" class="wizard-form-control" id="full-name" name="full_name" placeholder="Full Name" value="Ali">
                        </div>
                        
                        <!-- Nick Name -->
                        <div class="wizard-form-group">
                            <input type="text" class="wizard-form-control" id="nick-name" name="nick_name" placeholder="Nick Name" value="Khan">
                        </div>
                        
                        <!-- Gender -->
                        <div class="wizard-form-group">
                            <select class="wizard-form-control wizard-select-control" id="gender" name="gender">
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <!-- Country -->
                        <div class="wizard-form-group">
                            <select class="wizard-form-control wizard-select-control" id="country" name="country">
                                <option value="pakistan" selected>Pakistan</option>
                                <option value="united_states">United States</option>
                                <option value="united_kingdom">United Kingdom</option>
                                <option value="canada">Canada</option>
                                <option value="australia">Australia</option>
                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                        
                        <!-- Language -->
                        <div class="wizard-form-group">
                            <select class="wizard-form-control wizard-select-control" id="language" name="language">
                                <option value="english" selected>English</option>
                                <option value="urdu">Urdu</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <!-- Add more languages as needed -->
                            </select>
                        </div>
                        
                        <!-- Address -->
                        <div class="wizard-form-group">
                            <input type="text" class="wizard-form-control" id="address" name="address" placeholder="Address" value="Executive Center I8 islamabad">
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="wizard-form-actions">
                        <button type="button" class="btn-save">Save</button>
                        <button type="button" class="btn-next">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Profile Image Preview
        document.addEventListener('DOMContentLoaded', function() {
            const profilePlaceholder = document.querySelector('.profile-photo-placeholder');
            const profileInput = document.getElementById('profile-upload');
            const profilePreview = document.getElementById('profile-preview');
            
            // Open file dialog when clicking on the profile placeholder
            profilePlaceholder.addEventListener('click', function() {
                profileInput.click();
            });
            
            // Update preview when image is selected
            profileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        profilePreview.src = e.target.result;
                    }
                    
                    reader.readAsDataURL(this.files[0]);
                }
            });
            
            // Form Navigation
            document.querySelector('.btn-next').addEventListener('click', function() {
                // Save form data and proceed to next step
                // For now, just console log
                console.log('Form submitted, proceed to next step');
                // You would typically save the form data to session/localStorage and redirect to the next step
                // window.location.href = 'subject-teach.php';
            });
            
            document.querySelector('.btn-save').addEventListener('click', function() {
                // Save form data without proceeding
                console.log('Form data saved');
                // You would typically save the form data via AJAX
            });
        });
    </script>
</body>
</html> 