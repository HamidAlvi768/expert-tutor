<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Requests - Expert Tutor</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        
        .expertTutor_myRequests_container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .expertTutor_myRequests_notification {
            background-color: #FF6B6B;
            color: white;
            border-radius: 8px;
            margin: 20px auto;
            width: 86.5vw;
            margin-top: 0px;
        }
        
        .expertTutor_myRequests_notification .alert-icon {
            width: 24px;
            height: 24px;
        }
        
        .expertTutor_myRequests_card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .expertTutor_myRequests_price {
            font-weight: 600;
            font-size: 1.25rem;
            margin-right: 15px;
        }
        
        .expertTutor_myRequests_currency {
            color: #0891B2;
            font-weight: 600;
        }
        
        .expertTutor_myRequests_location {
            color: #6B7280;
            display: flex;
            align-items: center;
        }
        
        .expertTutor_myRequests_location .location-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            color: #09B31A;
        }
        
        .expertTutor_myRequests_finishButton {
            background-color: #6366F1;
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s;
        }
        
        .expertTutor_myRequests_finishButton:hover {
            background-color: #4F46E5;
            color: white;
            text-decoration: none;
        }

        .expertTutor_myRequests_verifyButton {
            background: white;
            color: black !important;
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .expertTutor_myRequests_verifyButton:hover {
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Include Top Header -->
    <?php include 'includes/components/top-header.php'; ?>

    <!-- Include Main Navigation -->
    <?php include 'includes/components/main-nav.php'; ?>

    <!-- Main Content -->
    <div class="container mt-4 mb-5">
        <!-- Phone Verification Banner -->
        <div class="expertTutor_myRequests_notification p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <svg class="alert-icon me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <p class="mb-0">Please Take A Moment To Verify Your Phone Number To Connect Tutor Easily</p>
                </div>
                <button class="expertTutor_myRequests_verifyButton">Verify Phone Number</button>
            </div>
        </div>

        <!-- Request Card -->
        <div class="expertTutor_myRequests_card">
            <h1 class="fs-2 fw-semibold text-dark mb-3">JAVA assignment help teacher needed in G-10</h1>
            
            <p class="text-secondary mb-4">
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel.
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo
                mattis nunc sem quisque amet. Vel.
            </p>
            
            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="d-flex align-items-center">
                    <span class="expertTutor_myRequests_price"><span class="expertTutor_myRequests_currency">$</span> 345.45</span>
                    <span class="expertTutor_myRequests_location">
                        <svg class="location-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        G-10, Islamabad, Islamabad Capital Territory, Pakistan
                    </span>
                </div>
                <a href="my-requests.php" class="expertTutor_myRequests_finishButton">
                    Finish
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Add click handler for the Finish button
        document.querySelector('.expertTutor_myRequests_finishButton').addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'my-requests.php';
        });
    </script>
</body>
</html> 