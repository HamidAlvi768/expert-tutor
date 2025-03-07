<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Tutors - Tutor Expert</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/tutors.css">
</head>
<body class="tutors-page-wrapper">
    <!-- Set custom logo for header -->
    <?php
    $custom_logo = 'assets/images/profile-logo.png';
    $custom_logo_alt = 'Tutor Expert';
    include 'includes/header.php';
    ?>

    <!-- Hero Section -->
    <div class="tutors-page-hero-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="tutors-page-hero-content">
                        <h1 class="tutors-page-hero-title">
                            <span class="tutors-page-highlight">Tutors</span> <span class="tutors-page-from">from</span> <span class="tutors-page-normal">all</span>
                            <div class="tutors-page-subtitle">Country</div>
                        </h1>
                        <p class="tutors-page-hero-description">Find top talent or open assignments with tools that keep you in control.</p>
                        <div class="tutors-page-search-box">
                            <div class="tutors-page-search-input-wrapper">
                                <i class="fas fa-search tutors-page-search-icon"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button class="btn btn-primary tutors-page-publish-btn">Publish Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tutors Grid Section -->
    <section class="tutors-page-grid">
        <div class="container">
            <div class="tutors-page-grid-wrapper">
                <?php
                // Define the available tutor images
                $tutorImages = [
                    'Zrand-Hobs.jpg' => 'Zrand Hobs',
                    'Riya-Khera.jpg' => 'Riya Khera',
                    'Ritika.jpg' => 'Ritika',
                    'Adam.jpg' => 'Adam'
                ];

                // Create 20 cards (5x4 grid)
                for ($i = 0; $i < 20; $i++) {
                    // Get a random tutor image and name
                    $imageKeys = array_keys($tutorImages);
                    $randomKey = $imageKeys[$i % 4]; // This will cycle through the 4 images
                    $tutorName = $tutorImages[$randomKey];
                    
                    // Randomize location and subjects for variety
                    $locations = ['From India', 'From France', 'From Indonesia', 'From USA', 'From UK'];
                    $allSubjects = ['Economics', 'Mathematics', 'Chemistry', 'Physics', 'English', 'History'];
                    $randomLocation = $locations[array_rand($locations)];
                    $randomSubjects = array_rand(array_flip($allSubjects), 2); // Get 2 random subjects
                    ?>
                    <div class="tutors-page-card">
                        <div class="tutors-page-card-header">
                            <img src="assets/images/tutors/<?php echo $randomKey; ?>" 
                                 alt="<?php echo $tutorName; ?>" 
                                 class="tutors-page-tutor-image">
                            <div class="tutors-page-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <div class="tutors-page-card-info">
                            <h3 class="tutors-page-tutor-name"><?php echo $tutorName; ?></h3>
                            <p class="tutors-page-tutor-location"><?php echo $randomLocation; ?></p>
                            <div class="tutors-page-subjects">
                                <?php foreach ($randomSubjects as $subject): ?>
                                <span class="tutors-page-subject-tag"><?php echo $subject; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/tutors.js"></script>
</body>
</html> 