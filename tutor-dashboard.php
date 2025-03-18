<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Dashboard - Expert Tutor</title>
    
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
            background-color: #F4F5F7;
            font-family: 'Poppins', sans-serif;
        }

        /* Add class to hide background pseudo-elements */
        body.no-bg::before,
        body.no-bg::after {
            opacity: 0 !important;
        }

        .expertTutor_dashboard_container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .expertTutor_dashboard_card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: box-shadow 0.2s ease-in-out;
            width: 100%;
        }

        .expertTutor_dashboard_card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .expertTutor_dashboard_header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .expertTutor_dashboard_title {
            margin: 0;
            padding-right: 1rem;
            flex: 1;
        }

        .expertTutor_dashboard_price {
            font-weight: 600;
            font-size: 1.25rem;
            margin-right: 15px;
            color: var(--text-dark);
        }

        .expertTutor_dashboard_currency {
            display: inline-flex;
            align-items: center;
            margin-right: 4px;
            color: #564FFD;
        }

        .expertTutor_dashboard_currency svg {
            width: auto;
            min-height: 2rem;
            transform: translate(4px, 10px);
        }

        .expertTutor_dashboard_currency svg path {
            stroke: #564FFD;
        }

        .expertTutor_dashboard_location {
            color: #6B7280;
            display: flex;
            align-items: center;
        }

        .expertTutor_dashboard_location .location-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            color: #09B31A;
        }

        .expertTutor_dashboard_status {
            background: #F3F4F6;
            color: #6B7280;
            padding: 10px 25px;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-right: 12px;
            display: inline-block;
        }

        .expertTutor_dashboard_messageIcon {
            position: relative;
            color: #6B7280;
            font-size: 1.25rem;
            padding: 0.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .expertTutor_dashboard_messageIcon .notification-dot {
            position: absolute;
            top: -3px;
            right: -3px;
            width: 8px;
            height: 8px;
            background: #FF4842;
            border-radius: 50%;
        }

        .expertTutor_dashboard_createPost {
            background-color: #09B31A;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 0.9375rem;
            line-height: 1.5;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 171, 85, 0.08);
            flex-direction: row-reverse;
        }

        .expertTutor_dashboard_createPost:hover {
            background-color: #007B55;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 171, 85, 0.15);
        }

        .expertTutor_dashboard_createPost i {
            margin-top: -1px;
        }

        .expertTutor_dashboard_finishButton {
            background-color: #564FFD;
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s;
            min-width: 100px;
            text-align: center;
        }

        .expertTutor_dashboard_finishButton:hover {
            background-color: #4F46E5;
            color: white;
            text-decoration: none;
        }

        .expertTutor_dashboard_info {
            flex-direction: row;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .expertTutor_dashboard_info {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body class="no-bg">
    <!-- Include Top Header -->
    <?php include 'includes/components/top-header.php'; ?>

    <!-- Include Main Navigation -->
    <?php include 'includes/components/main-nav.php'; ?>

    <!-- Main Content -->
    <div class="container mt-4 mb-5">
        <div class="d-flex justify-content-end mb-4" style="align-self: end;">
            <button class="expertTutor_dashboard_createPost">
                <i class="fas fa-plus" style="font-size: 0.85em;"></i>
                Create New Post
            </button>
        </div>

        <!-- Post Cards -->
        <div class="expertTutor_dashboard_card" onclick="window.location.href='job-detail.php?id=1'">
            <div class="expertTutor_dashboard_header">
                <h1 class="expertTutor_dashboard_title fs-2 fw-semibold text-dark">JAVA assignment help teacher needed in G-10</h1>
                <div class="expertTutor_dashboard_messageIcon">
                    <i class="far fa-envelope" style="color: #09B31A;"></i>
                    <span class="notification-dot"></span>
                </div>
            </div>
            
            <p class="text-secondary mb-4">
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel.
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo
                mattis nunc sem quisque amet. Vel.
            </p>
            
            <div class="d-flex align-items-center justify-content-between mt-4 flex-wrap">
                <div class="d-flex align-items-center expertTutor_dashboard_info">
                    <span class="expertTutor_dashboard_price">
                        <span class="expertTutor_dashboard_currency">PKR</span>
                        345.45
                    </span>
                    <span class="expertTutor_dashboard_location">
                        <svg class="location-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        G-10, Islamabad, Islamabad Capital Territory, Pakistan
                    </span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="expertTutor_dashboard_status">Post Closed</span>
                    <a href="#" class="expertTutor_dashboard_finishButton">
                        Finish
                    </a>
                </div>
            </div>
        </div>

        <!-- Duplicate Post Card -->
        <div class="expertTutor_dashboard_card" onclick="window.location.href='job-detail.php?id=2'">
            <div class="expertTutor_dashboard_header">
                <h1 class="expertTutor_dashboard_title fs-2 fw-semibold text-dark">JAVA assignment help teacher needed in G-10</h1>
                <div class="expertTutor_dashboard_messageIcon">
                    <i class="far fa-envelope" style="color: #09B31A;"></i>
                    <span class="notification-dot"></span>
                </div>
            </div>
            
            <p class="text-secondary mb-4">
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel.
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo
                mattis nunc sem quisque amet. Vel.
            </p>
            
            <div class="d-flex align-items-center justify-content-between mt-4 flex-wrap">
                <div class="d-flex align-items-center expertTutor_dashboard_info">
                    <span class="expertTutor_dashboard_price">
                        <span class="expertTutor_dashboard_currency">PKR</span>
                        345.45
                    </span>
                    <span class="expertTutor_dashboard_location">
                        <svg class="location-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        G-10, Islamabad, Islamabad Capital Territory, Pakistan
                    </span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="expertTutor_dashboard_status">Post Closed</span>
                    <a href="#" class="expertTutor_dashboard_finishButton">
                        Finish
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Navigation JS -->
    <script src="assets/js/profile-nav.js"></script>
</body>
</html> 