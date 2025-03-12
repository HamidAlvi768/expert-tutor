<?php
session_start();

// Get stored wizard data
$wizardData = isset($_SESSION['wizard_data']) ? $_SESSION['wizard_data'] : [];

// Extract teacher profile data
$fullName = isset($wizardData['teacher-profile']['full_name']) ? $wizardData['teacher-profile']['full_name'] : 'Bryan';
$nickName = isset($wizardData['teacher-profile']['nick_name']) ? $wizardData['teacher-profile']['nick_name'] : 'Eigensection';
$teacherDescription = isset($wizardData['description']['teacher_description']) ? $wizardData['description']['teacher_description'] : 'Passionate Mathematics Tutor Committed to Student Success';
$shortBio = isset($wizardData['description']['short_bio']) ? $wizardData['description']['short_bio'] : "Hello,\nMy name is Christopher, I'm a student tutor with a passion for Mathematics and teaching young students. I'm young and vibrant with a passion for teaching and imparting knowledge to students.";

// Extract subjects
$subjects = isset($wizardData['subject-teach']) ? $wizardData['subject-teach'] : [];

// Rating - in a real app, this would come from a database
$rating = 5.0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($fullName) ? $fullName : 'Tutor Expert'; ?> - Tutor Expert</title>
    
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
        /* Description Section Styles */
        .tutor-description {
            padding: 40px 0;
            text-align: justify;
            display: flex;
            flex-direction: column;
        }

        .description-text {
            margin-bottom: 30px;
            line-height: 1.8;
            color: #1B1B3F;
        }

        .description-text p {
            margin-bottom: 20px;
        }

        .btn-more-info {
            background-color: #564FFD;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 auto;
        }

        .btn-more-info:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .tutor-description {
                padding: 30px 15px;
            }
        }
    </style>
</head>
<body>
    <?php
    // Get name parts for the updated component
    $firstName = isset($fullName) ? explode(' ', $fullName)[0] : 'Bryan';
    $lastName = isset($fullName) && strpos($fullName, ' ') !== false 
                ? substr($fullName, strpos($fullName, ' ') + 1) 
                : 'Eigensection';

    // Set up props for tutor-hero component
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
                ['text' => 'Review(' . (isset($rating) ? number_format($rating, 1) : '4.9') . ')', 'class' => 'btn-review', 'type' => 'button']
            ]
        ],
        'info_panel' => [
            [
                'icon' => 'fas fa-map-marker-alt',
                'label' => 'Location',
                'value' => 'Prince and Princess Estate, Kaura, Abuja'
            ],
            [
                'icon' => 'fas fa-car',
                'label' => 'Can travel',
                'value' => isset($wizardData['teaching-details']['willing_to_travel']) ? 
                    ($wizardData['teaching-details']['willing_to_travel'] === 'yes' ? 'Yes' : 'No') : 'No'
            ]
        ]
    ];

    // Include the tutor-hero component
    include 'includes/components/tutor-hero.php';
    ?>
    
    <div class="main-container container">
        <!-- Tutor Description Section -->
        <section class="tutor-description">
            <div class="description-text">
                <p>Hello Christopher! It's great to meet you, and it sounds like you have an incredible passion for teaching and a strong commitment to helping students succeed in Mathematics. Based on what you've shared, here's a more detailed description you could use to showcase your skills and experience:</p>
                
                <p>Christopher: Passionate Mathematics Tutor Committed to Student Success</p>
                
                <p>Hello! My name is Christopher, and I am a dedicated and enthusiastic student tutor with a deep passion for Mathematics and a genuine desire to help young learners excel. With a strong focus on building a solid foundation in mathematical concepts, I aim to make learning not only effective but also engaging and enjoyable for students at all levels.</p>
                
                <p>As an up-to-date tutor, I stay current with the latest high school and elementary school curriculums to ensure I provide students with the most relevant and accurate content. I specialize in preparing students for common entrance exams and work extensively with students preparing for entrance exams at institutions such as Loyola Jesuit College, Gidan Mangoro, Abuja. My approach to tutoring is both comprehensive and tailored, taking into consideration the individual learning style and pace of each student.</p>
                
                <p>With a high coaching success rate, I am proud of my ability to break down complex mathematical concepts into understandable steps, helping my students not only to grasp challenging topics but also to develop a true appreciation for the subject. I believe that patience, clear explanations, and constant encouragement are key to student success, and I go the extra mile to ensure that every student has the support they need to succeed.</p>
                
                <p>Whether it's helping students master foundational math skills or preparing them for critical exams, my focus is on creating a positive learning environment where students feel confident, capable, and motivated to achieve their academic goals.</p>
                
                <p>How does that sound? Feel free to let me know if you'd like to add or change anything!</p>
            </div>
            
            <button class="btn-more-info">More Information</button>
        </section>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html> 