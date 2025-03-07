<?php
// Initialize any required session/authentication logic here
session_start();

// Get email from query parameter or session
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : (isset($_SESSION['verify_email']) ? $_SESSION['verify_email'] : 'example@domain.com');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - Assignment Connect</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/verification.css">
</head>
<body>
    <main class="verification-page">
        <div class="verification-container">
            <img src="../assets/images/learning-college.jpg" alt="Background decoration" class="background-image" />
            <section class="verification-card">
                <div class="verification-content">
                    <header class="verification-header">
                        <div class="verification-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="header-text">
                            <h1 class="title">Check your email</h1>
                            <p class="subtitle">open mail app to verify</p>
                        </div>
                    </header>

                    <button class="primary-button">
                        <span class="button-text">Open email app</span>
                    </button>

                    <div class="resend-section">
                        <p class="resend-text">Didn't receive the email?</p>
                        <button class="link-button">
                            <span class="link-text">Click to resend</span>
                        </button>
                    </div>

                    <button class="back-button" onclick="window.location.href='../index.php?modal=login'">
                        <i class="fas fa-arrow-left back-icon"></i>
                        <span class="back-text">Back to log in</span>
                    </button>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Handle viewport height for mobile browsers
        function setVH() {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }

        // Set initial viewport height
        setVH();

        // Update viewport height on resize and orientation change
        ['resize', 'orientationchange'].forEach(evt => 
            window.addEventListener(evt, () => {
                setVH();
            })
        );

        document.querySelector('.primary-button').addEventListener('click', function() {
            window.location.href = 'mailto:';
        });

        document.querySelector('.link-button').addEventListener('click', function() {
            // Add resend logic here
            alert('Verification email resent!');
        });
    </script>
</body>
</html> 