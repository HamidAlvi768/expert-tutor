<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Connect - Connect Individuals to Assign</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login-modal.css">
</head>
<body>
    <div class="hero-wrapper">
        <!-- Header Section -->
        <?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <?php include 'includes/sections/hero.php'; ?>

        <!-- Stats Section -->
        <?php
        require_once 'includes/components/stat-item.php';
        
        $stats = [
            ['fas fa-users', '#FF6B6B', '67.1', 'k', 'Students'],
            ['fas fa-certificate', '#564FFD', '26', 'k', 'Certified Instructor'],
            ['fas fa-globe', '#FF6B6B', '72', '', 'Country Language'],
            ['fas fa-check-circle', '#4CD137', '99.9', '%', 'Success Rate']
        ];

        renderStatsSection($stats);
        ?>
    </div>

    <!-- Partners Section -->
    <?php include 'includes/sections/partners.php'; ?>

    <!-- Features Section -->
    <?php include 'includes/sections/features.php'; ?>

    <!-- Subjects Section -->
    <?php
    require_once 'includes/components/subject-card.php';
    
    $subjects = [
        ['✍', 'Mathematics', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'Science', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'Science', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'Content Writing', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'Commerce Stream', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'Humanities', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'For Arts and Design', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.'],
        ['✍', 'Content Writing', 'Proin egestas, nisi vitae hendrerit maximus, mauris nunc facilisis odi.']
    ];

    renderSubjectsSection($subjects);
    ?>

    <!-- CTA Section -->
    <?php include 'includes/sections/cta.php'; ?>

    <!-- Teacher Section -->
    <?php include 'includes/sections/teacher.php'; ?>

    <!-- Reviews Section -->
    <?php
    require_once 'includes/components/review-card.php';
    
    $reviews = [
        [
            'assets/images/reviewers/guy-hawkins.png',
            'Guy Hawkins',
            '1 week ago',
            5,
            'I appreciate the precise short videos (10 mins or less each) because overly long videos tend to make me lose focus. The instructor is very knowledgeable in Web Design and it shows as he shares his knowledge. These were my best 6 months of training. Thanks, Vako.'
        ],
        [
            'assets/images/reviewers/bessie-cooper.png',
            'Bessie Cooper',
            '6 hours ago',
            5,
            'Webflow course was good, it covers design secrets, and to build responsive web pages, blog, and some more tricks and tips about webflow. I enjoyed the course and it helped me to add web development skills related to webflow in my toolbox. Thank you Vako.'
        ],
        [
            'assets/images/reviewers/dianne-russell.png',
            'Dianne Russell',
            '51 mins ago',
            5,
            'This course is just amazing! has great course content, the best practices, and a lot of real-world knowledge. I love the way of giving examples, the best tips by the instructor which are pretty interesting, fun and knowledgable and I was never getting bored throughout the course.'
        ],
        [
            'assets/images/reviewers/eleanor-pena.png',
            'Eleanor Pena',
            '1 days ago',
            5,
            'I appreciate the precise short videos (10 mins or less each) because overly long videos tend to make me lose focus. The instructor is very knowledgeable in Web Design and it shows as he shares his knowledge. These were my best 6 months of training. Thanks, Vako.'
        ]
    ];

    renderReviewsSection($reviews);
    ?>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- Auth Modals -->
    <?php 
    include 'includes/auth-modals.php';
    renderAuthModal('login');
    renderAuthModal('signup');
    renderEmailVerificationScreen();
    ?>

    <!-- Bootstrap JS and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login-modal.js"></script>
</body>
</html> 