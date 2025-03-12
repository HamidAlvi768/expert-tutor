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

// Set up props for tutor-hero component with full layout
$profile_props = [
    'layout_type' => 'full',
    'background_image' => 'assets/images/tutor-summary-bg.jpg',
    'show_info_panel' => false,
    'profile' => [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'description' => "Hello,\nMy name is Christopher. I'm a student tutor with a passion for Mathematics and teaching young students. I'm young and vibrant with a passion for teaching and impacting knowledge to students",
        'image' => 'assets/images/profiles/teacher-1.jpg'
    ],
    'actions' => [
        'buttons' => [
            ['text' => 'Message', 'class' => 'btn-message', 'type' => 'button'],
            ['text' => 'Call', 'class' => 'btn-call', 'type' => 'button'],
            ['text' => 'Review(' . number_format(5.0, 1) . ')', 'class' => 'btn-review', 'type' => 'button']
        ]
    ]
];

// Sample reviews data
$reviews = [
    [
        'assets/images/reviewers/guy-hawkins.png',
        'Guy Hawkins',
        '1 week ago',
        5,
        'I appreciate the precise teaching methods and clear explanations. The tutor is very knowledgeable in Mathematics and it shows as they share their knowledge. These were my best months of learning. Thanks!'
    ],
    [
        'assets/images/reviewers/bessie-cooper.png',
        'Bessie Cooper',
        '6 hours ago',
        5,
        'The tutoring sessions were excellent, covering all the topics I needed help with. The tutor\'s approach to explaining complex concepts made them easy to understand. I\'ve seen significant improvement in my grades.'
    ],
    [
        'assets/images/reviewers/dianne-russell.png',
        'Dianne Russell',
        '51 mins ago',
        5,
        'Amazing tutor! They have a great way of breaking down difficult problems into simple steps. The practice exercises were very helpful, and I always felt comfortable asking questions when I didn\'t understand something.'
    ],
    [
        'assets/images/reviewers/eleanor-pena.png',
        'Eleanor Pena',
        '1 day ago',
        5,
        'I highly recommend this tutor. Their patience and dedication to helping students succeed is outstanding. The personalized attention and structured approach to learning has helped me excel in my studies.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Reviews - <?php echo $fullName; ?> | Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components/teacher-reviews.css">
    
    <style>
        /* Page-specific styles */
        .reviews-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .reviews-header h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .reviews-header p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 800px;
            margin: 0 auto;
        }

        .reviews-grid {
            background-color: #F8F9FF;
            padding: 80px 0;
        }

        @media (max-width: 768px) {
            .reviews-header h2 {
                font-size: 2rem;
            }

            .reviews-header p {
                font-size: 1rem;
            }

            .reviews-grid {
                padding: 40px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Include the tutor-hero component -->
    <?php include 'includes/components/tutor-hero.php'; ?>
    
    <!-- Reviews Section -->
    <section class="reviews-grid">
        <div class="container">
            <div class="reviews-header">
                <h2>Students Reviews</h2>
                <p>Read what our students have to say about their learning experience and success stories with our dedicated tutors.</p>
            </div>
            
            <div class="row g-4">
                <?php
                require_once 'includes/components/review-card.php';
                foreach ($reviews as $review) {
                    renderReviewCard($review[0], $review[1], $review[2], $review[3], $review[4]);
                }
                ?> 
                <?php
                require_once 'includes/components/review-card.php';
                foreach ($reviews as $review) {
                    renderReviewCard($review[0], $review[1], $review[2], $review[3], $review[4]);
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> 