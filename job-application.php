<?php
session_start();

// Get stored wizard data
$wizardData = isset($_SESSION['wizard_data']) ? $_SESSION['wizard_data'] : [];

// Extract teacher profile data
$fullName = isset($wizardData['teacher-profile']['full_name']) ? $wizardData['teacher-profile']['full_name'] : 'Bryan';
$lastName = isset($fullName) && strpos($fullName, ' ') !== false 
            ? substr($fullName, strpos($fullName, ' ') + 1) 
            : 'Eigensection';
$firstName = isset($fullName) ? explode(' ', $fullName)[0] : 'Bryan';

// Set up props for tutor-hero component
$profile_props = [
    'layout_type' => 'full',
    'background_image' => 'assets/images/tutor-summary-bg.jpg',
    'show_info_panel' => false,
    'show_profile_image' => false,
    'profile' => [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'image' => 'assets/images/profiles/teacher-2.jpg'
    ]
];

// Setup props for tutor-header component - Use the first reference image's navigation
$header_props = [
    'logo_text' => 'Tutor Expert',
    'logo_link' => 'index.php',
    'nav_items' => [
        ['text' => 'Profile', 'url' => 'profile.php', 'has_dropdown' => false],
        ['text' => 'Messages', 'url' => 'messages.php', 'has_dropdown' => false],
        ['text' => 'Delivery Work', 'url' => 'delivery.php', 'has_dropdown' => false],
        ['text' => 'Manage Finance', 'url' => 'finance.php', 'has_dropdown' => true],
        ['text' => 'Notification', 'url' => 'notifications.php', 'has_dropdown' => false],
    ],
    'show_profile' => true,
    'profile_name' => 'Profile',
    'profile_image' => 'assets/images/profiles/teacher-2.png'
];

// Sample jobs data (same as in jobs.php)
$jobs = [
    [
        'title' => 'E-commerce VA for WordPress Product Listings',
        'description' => "I'm looking for a detail-oriented virtual assistant to help with my WordPress e-commerce site. Your primary task will be product uploads for physical goods. Key Responsibilities: - Uploading physical products to the site - Ensuring accurate and appealing product descriptions and images - Maintaining consistency in product listings. Ideal Candidate: - Experience with WordPress e-commerce sites - Strong attention to detail - Good understanding of product listing best practices - Ability to work independently and meet deadlines",
        'amount' => 34,
        'coin_need' => 45
    ],
    [
        'title' => 'E-commerce VA for WordPress Product Listings',
        'description' => "I'm looking for a detail-oriented virtual assistant to help with my WordPress e-commerce site. Your primary task will be product uploads for physical goods. Key Responsibilities: - Uploading physical products to the site - Ensuring accurate and appealing product descriptions and images - Maintaining consistency in product listings. Ideal Candidate: - Experience with WordPress e-commerce sites - Strong attention to detail - Good understanding of product listing best practices - Ability to work independently and meet deadlines",
        'amount' => 34,
        'coin_need' => 45
    ]
];

// Get the job ID from URL parameter
$job_id = isset($_GET['job_id']) ? intval($_GET['job_id']) : 0;

// Make sure we have a valid job
if ($job_id < 0 || $job_id >= count($jobs)) {
    $job_id = 0; // Default to first job if invalid
}

// Get the selected job
$job = $jobs[$job_id];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $job['title']; ?> - Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components/jobs.css">
    <link rel="stylesheet" href="assets/css/components/tutor-hero.css">
    <link rel="stylesheet" href="assets/css/components/tutor-header.css">
    <link rel="stylesheet" href="assets/css/components/job-application.css">
</head>
<body class="job-application-page">
    <style>
        .main-container{
            /* margin-top: 3rem; */
        }
        .tutor-name{
            font-size: 6.5rem !important;
            width: max-content;
        }
        .tutor-name{
            text-align: center;
        }
        .tutor-info{
            display: flex;
            justify-content: center;
        }
        .tutor-profile-section{
            margin-top: 1.5rem;
        }
    </style>

    <!-- Include the tutor-hero component (which includes the header) -->
    <?php include 'includes/components/tutor-hero.php'; ?>
    
    <!-- Jobs Navigation -->
    <section class="jobs-navigation">
        <div class="container">
            <nav class="jobs-tabs">
                <a href="#" class="tab-link active">Best Matches</a>
                <a href="#" class="tab-link">Recent</a>
                <a href="#" class="tab-link">Job Saved</a>
            </nav>
            <p class="jobs-description">Explore job opportunities that align with your experience and the client's hiring criteria, sorted by relevance.</p>
        </div>
    </section>

    <!-- Job Application Section -->
    <section class="job-detail-section">
        <div class="container">
            <div class="job-detail-container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="job-detail">
                            <h1 class="job-detail-title"><?php echo $job['title']; ?></h1>
                            <div class="job-detail-description">
                                <?php 
                                // Format the job description to preserve line breaks and structure
                                $formatted_description = str_replace(
                                    ['Key Responsibilities:', 'Ideal Candidate:'],
                                    ['<strong>Key Responsibilities:</strong>', '<strong>Ideal Candidate:</strong>'],
                                    $job['description']
                                );
                                $formatted_description = nl2br($formatted_description);
                                
                                // Convert dash lists to proper HTML lists
                                $formatted_description = preg_replace(
                                    '/- (.+?)(?=<br|$)/m',
                                    '• $1',
                                    $formatted_description
                                );
                                
                                echo $formatted_description;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="job-actions">
                            <button class="btn-message">
                                Message
                                <div class="coin-info">
                                    Coin Need <?php echo $job['coin_need']; ?>
                                    <img src="assets/images/icons/coin.png" alt="Coin" class="coin-icon">
                                </div>
                            </button>
                            <button class="btn-call">
                                Call
                                <div class="coin-info">
                                    Coin Need <?php echo $job['coin_need']; ?>
                                    <img src="assets/images/icons/coin.png" alt="Coin" class="coin-icon">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> 