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
            background-color: #ffffff;
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
            margin-top: -0.7rem;
            color: #564FFD;
        }

        .expertTutor_dashboard_currency {
            display: inline-flex;
            align-items: center;
            margin-right: 4px;
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
            background-color: #00AB55;
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
        <div class="expertTutor_dashboard_card">
            <div class="expertTutor_dashboard_header">
                <h1 class="expertTutor_dashboard_title fs-2 fw-semibold text-dark">JAVA assignment help teacher needed in G-10</h1>
                <div class="expertTutor_dashboard_messageIcon">
                    <i class="fas fa-envelope" style="color: #09B31A;"></i>
                    <span class="notification-dot"></span>
                </div>
            </div>
            
            <p class="text-secondary mb-4">
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel.
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo
                mattis nunc sem quisque amet. Vel.
            </p>
            
            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="d-flex align-items-center">
                    <span class="expertTutor_dashboard_price">
                        <span class="expertTutor_dashboard_currency">
                            <svg width="16" height="16" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1992_4317)">
                                    <path d="M19.5898 2.36942V37.5713" stroke-width="3.20017" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M27.5902 8.76971H15.5896C14.1043 8.76971 12.6798 9.35974 11.6295 10.41C10.5793 11.4603 9.98926 12.8847 9.98926 14.37C9.98926 15.8553 10.5793 17.2798 11.6295 18.33C12.6798 19.3803 14.1043 19.9703 15.5896 19.9703H23.59C25.0753 19.9703 26.4997 20.5603 27.55 21.6106C28.6003 22.6609 29.1903 24.0853 29.1903 25.5706C29.1903 27.0559 28.6003 28.4804 27.55 29.5306C26.4997 30.5809 25.0753 31.1709 23.59 31.1709H9.98926" stroke-width="3.20017" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1992_4317">
                                        <rect width="38.402" height="38.402" fill="white" transform="translate(0.389648 0.769287)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
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
        <div class="expertTutor_dashboard_card">
            <div class="expertTutor_dashboard_header">
                <h1 class="expertTutor_dashboard_title fs-2 fw-semibold text-dark">JAVA assignment help teacher needed in G-10</h1>
                <div class="expertTutor_dashboard_messageIcon">
                    <i class="fas fa-envelope"></i>
                    <span class="notification-dot"></span>
                </div>
            </div>
            
            <p class="text-secondary mb-4">
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel.
                Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo
                mattis nunc sem quisque amet. Vel.
            </p>
            
            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="d-flex align-items-center">
                    <span class="expertTutor_dashboard_price">
                        <span class="expertTutor_dashboard_currency">
                            <svg width="16" height="16" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1992_4317)">
                                    <path d="M19.5898 2.36942V37.5713" stroke-width="3.20017" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M27.5902 8.76971H15.5896C14.1043 8.76971 12.6798 9.35974 11.6295 10.41C10.5793 11.4603 9.98926 12.8847 9.98926 14.37C9.98926 15.8553 10.5793 17.2798 11.6295 18.33C12.6798 19.3803 14.1043 19.9703 15.5896 19.9703H23.59C25.0753 19.9703 26.4997 20.5603 27.55 21.6106C28.6003 22.6609 29.1903 24.0853 29.1903 25.5706C29.1903 27.0559 28.6003 28.4804 27.55 29.5306C26.4997 30.5809 25.0753 31.1709 23.59 31.1709H9.98926" stroke-width="3.20017" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1992_4317">
                                        <rect width="38.402" height="38.402" fill="white" transform="translate(0.389648 0.769287)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
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
</body>
</html> 