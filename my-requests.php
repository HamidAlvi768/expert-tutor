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
            width: 87vw;
            margin-top: -1rem;
            border: 1px solid #fc1d1d;
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
            margin-top: -0.7rem;
        }
        
        .expertTutor_myRequests_currency {
            display: inline-flex;
            align-items: center;
            margin-right: 4px;
        }
        
        .expertTutor_myRequests_currency svg {
            width: auto;
            min-height: 2rem;
            transform: translate(4px, 10px);
        }
        
        .expertTutor_myRequests_currency svg path {
            stroke: #0891B2;
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
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .expertTutor_myRequests_verifyButton:hover {
            background: #f8f9fa;
        }

        /* Phone Verification Modal Styles */
        .phone-verification-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .phone-verification-modal.active {
            display: flex;
        }

        .phone-verification-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .phone-verification-content {
            position: relative;
            background: white;
            border-radius: 24px;
            padding: 40px 50px;
            width: 100%;
            max-width: 460px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            z-index: 1001;
        }

        .phone-icon-container {
            width: 84px;
            height: 84px;
            background-color: rgba(86, 79, 253, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .phone-icon-container svg {
            width: 32px;
            height: 32px;
        }

        .verification-title {
            font-size: 24px;
            font-weight: 600;
            color: #1B1B3F;
            margin-bottom: 8px;
        }

        .verification-text {
            font-size: 16px;
            color: #6F6F6F;
            margin-bottom: 24px;
        }

        .verification-code-inputs {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .code-input {
            width: 54px;
            height: 54px;
            border: 1px solid #E7E7E7;
            border-radius: 8px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            color: #1B1B3F;
            background: #FFFFFF;
        }

        .code-input:focus {
            outline: none;
            border-color: #564FFD;
            box-shadow: 0 0 0 2px rgba(86, 79, 253, 0.1);
        }

        .verification-help {
            margin-bottom: 20px;
            font-size: 14px;
            color: #6F6F6F;
        }

        .resend-link {
            color: #564FFD;
            font-weight: 500;
            text-decoration: none;
            margin-left: 4px;
        }

        .change-phone-link {
            color: #FF6B6B;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
        }

        .resend-link:hover, .change-phone-link:hover {
            text-decoration: underline;
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
        <div class="expertTutor_myRequests_notification p-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center" style="margin-left: 1rem;">
                    <svg class="alert-icon me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <p class="mb-0" style="font-size: 0.9rem;">Please Take A Moment To Verify Your Phone Number To Connect Tutor Easily</p>
                </div>
                <button id="verifyPhoneBtn" class="expertTutor_myRequests_verifyButton">Verify Phone Number</button>
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
                    <span class="expertTutor_myRequests_price">
                        <span class="expertTutor_myRequests_currency">
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

    <!-- Phone Verification Modal -->
    <div id="phoneVerificationModal" class="phone-verification-modal">
        <div class="phone-verification-overlay"></div>
        <div class="phone-verification-content">
            <div class="phone-icon-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 16.92V19.92C22 20.4704 21.7893 20.9996 21.4142 21.3747C21.0391 21.7498 20.5099 21.9605 19.96 21.96C17.4624 21.7383 15.0441 20.9364 12.9 19.6C10.9056 18.3775 9.17974 16.652 7.96 14.66C6.62253 12.5087 5.82063 10.0838 5.6 7.57997C5.59958 7.03132 5.80961 6.50286 6.18355 6.12710C6.5575 5.75134 7.08484 5.53873 7.633 5.53997H10.633C11.07 5.53535 11.493 5.70906 11.8223 6.02658C12.1516 6.34411 12.3615 6.78278 12.413 7.25997C12.5293 8.25251 12.7711 9.22747 13.133 10.16C13.2774 10.5195 13.3063 10.916 13.216 11.291C13.1257 11.666 12.9203 12.003 12.633 12.26L11.273 13.62C12.4003 15.6892 14.0709 17.3598 16.14 18.49L17.5 17.13C17.7569 16.8428 18.0935 16.6374 18.4686 16.5471C18.8436 16.4568 19.2401 16.4856 19.6 16.63C20.5325 16.9918 21.5074 17.2337 22.5 17.35C22.9772 17.4014 23.4158 17.6113 23.7334 17.9407C24.0509 18.27 24.2246 18.693 24.22 19.13C24.22 19.92 24.22 20.71 24.22 21.5C24.22 21.5 23.32 21.94 21.95 21.94" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h2 class="verification-title">Check your Phone</h2>
            <p class="verification-text">Verification Code Sent on +92-343***56</p>
            
            <div class="verification-code-inputs">
                <input type="text" maxlength="1" class="code-input" autocomplete="off">
                <input type="text" maxlength="1" class="code-input" autocomplete="off">
                <input type="text" maxlength="1" class="code-input" autocomplete="off">
                <input type="text" maxlength="1" class="code-input" autocomplete="off">
                <input type="text" maxlength="1" class="code-input" autocomplete="off">
            </div>
            
            <div class="verification-help">
                <span>Didn't receive the Code?</span>
                <a href="#" class="resend-link">Code Resend</a>
            </div>
            
            <div class="change-phone">
                <a href="#" class="change-phone-link">Change Phone Number</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verification Modal Functionality
            const verifyPhoneBtn = document.getElementById('verifyPhoneBtn');
            const phoneVerificationModal = document.getElementById('phoneVerificationModal');
            const phoneVerificationOverlay = document.querySelector('.phone-verification-overlay');
            const codeInputs = document.querySelectorAll('.code-input');
            const resendLink = document.querySelector('.resend-link');
            const changePhoneLink = document.querySelector('.change-phone-link');
            
            // Open modal when verify button is clicked
            verifyPhoneBtn.addEventListener('click', function() {
                phoneVerificationModal.classList.add('active');
                codeInputs[0].focus();
            });
            
            // Close modal when clicking outside
            phoneVerificationOverlay.addEventListener('click', function() {
                phoneVerificationModal.classList.remove('active');
            });
            
            // Handle code input fields
            codeInputs.forEach((input, index) => {
                // Auto-focus next input when a digit is entered
                input.addEventListener('input', function() {
                    if (this.value.length === 1) {
                        if (index < codeInputs.length - 1) {
                            codeInputs[index + 1].focus();
                        }
                    }
                });
                
                // Handle backspace to go to previous input
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace') {
                        if (this.value.length === 0 && index > 0) {
                            codeInputs[index - 1].focus();
                        }
                    }
                });
            });
            
            // Handle Code Resend
            resendLink.addEventListener('click', function(e) {
                e.preventDefault();
                // Clear existing inputs
                codeInputs.forEach(input => {
                    input.value = '';
                });
                codeInputs[0].focus();
                
                // You would typically call your resend API here
                console.log('Resending verification code...');
            });
            
            // Handle Change Phone Number
            changePhoneLink.addEventListener('click', function(e) {
                e.preventDefault();
                // This would typically open another modal or redirect to a page to change phone number
                console.log('Change phone number requested');
            });

            // Add click handler for the Finish button
            document.querySelector('.expertTutor_myRequests_finishButton').addEventListener('click', function(e) {
                e.preventDefault();
                window.location.href = 'my-requests.php';
            });
        });
    </script>
</body>
</html> 