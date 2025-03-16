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
            background-color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }

        /* Add class to hide background pseudo-elements */
        body.no-bg::before,
        body.no-bg::after {
            opacity: 0 !important;
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
            border: 1px solid #FF0000;
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
            max-width: 650px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            z-index: 1001;
        }

        .phone-icon-container {
            width: 84px;
            height: 84px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            border: 17.88px solid #F9F5FF;
            background: #F4EBFF;
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
<body class="no-bg">
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
                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.7552 28.815V33.7621C36.757 34.2214 36.6629 34.676 36.479 35.0968C36.295 35.5176 36.0251 35.8953 35.6867 36.2058C35.3483 36.5163 34.9488 36.7526 34.5137 36.8998C34.0786 37.0469 33.6177 37.1016 33.1603 37.0602C28.0859 36.5088 23.2116 34.7749 18.9291 31.9977C14.9448 29.4659 11.5667 26.0878 9.0349 22.1035C6.248 17.8015 4.51365 12.9035 3.97237 7.80636C3.93116 7.35035 3.98536 6.89076 4.1315 6.45684C4.27765 6.02292 4.51254 5.62418 4.82124 5.28602C5.12993 4.94785 5.50565 4.67767 5.92448 4.49267C6.34331 4.30767 6.79608 4.2119 7.25395 4.21147H12.201C13.0013 4.20359 13.7772 4.48699 14.384 5.00883C14.9908 5.53068 15.3871 6.25536 15.4991 7.04781C15.7079 8.63099 16.0952 10.1855 16.6534 11.6816C16.8753 12.2718 16.9233 12.9133 16.7918 13.53C16.6603 14.1466 16.3547 14.7127 15.9114 15.1611L13.8171 17.2553C16.1646 21.3838 19.5829 24.802 23.7113 27.1495L25.8056 25.0553C26.2539 24.6119 26.82 24.3063 27.4367 24.1748C28.0533 24.0433 28.6948 24.0913 29.285 24.3132C30.7812 24.8715 32.3356 25.2587 33.9188 25.4675C34.7199 25.5805 35.4514 25.984 35.9744 26.6012C36.4973 27.2184 36.7752 28.0063 36.7552 28.815Z" stroke="#564FFD" stroke-width="3.29807" stroke-linecap="round" stroke-linejoin="round"/>
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
                        } else {
                            // All inputs are filled, check if code is complete
                            let isComplete = true;
                            let verificationCode = '';
                            codeInputs.forEach(input => {
                                if (!input.value) {
                                    isComplete = false;
                                }
                                verificationCode += input.value;
                            });
                            
                            if (isComplete) {
                                // Redirect to tutor dashboard
                                window.location.href = 'tutor-dashboard.php';
                            }
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