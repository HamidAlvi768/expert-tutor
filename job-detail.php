<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// In a real application, we would fetch job details based on the ID
// For this implementation, we'll use static data
$job_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Sample job data
$job = [
    'title' => 'JAVA assignment help teacher needed in G-10',
    'description' => 'Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel. Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet. Vel.',
    'price' => '345.45',
    'location' => 'G-10, Islamabad, Islamabad Capital Territory, Pakistan',
    'status' => 'Post Closed',
    'deadline' => '2023-12-15',
    'posted_date' => '2023-11-30',
    'client' => [
        'name' => 'David miller',
        'avatar' => 'assets/images/avatars/avatar-1.png',
        'description' => 'Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit rhoncus in facilisis condimentum augue.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Detail - Expert Tutor</title>

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

        .expertTutor_jobDetail_container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 15px 30px;
            background: white;
            border-radius: 16px;
            margin-bottom: 5rem;
        }

        .expertTutor_jobDetail_layout {
            display: grid;
            grid-template-columns: 1fr 650px;
            gap: 24px;
            margin-top: 24px;
            margin-bottom: 24px;
            background-color: white;
        }

        .expertTutor_jobDetail_mainContent {
            min-width: 0;
        }

        .expertTutor_jobDetail_sidebar {
            min-width: 0;
            background: #F4F5F7;
            padding: 1rem;
            border-radius: 10px;
        }

        .expertTutor_jobDetail_clientsList {
            display: flex;
            flex-direction: column;
        }

        .expertTutor_jobDetail_clientCard {
            display: flex;
            gap: 12px;
            background: #F9FAFB;
            border-radius: 12px;
            padding: 16px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            border: 1px solid transparent;
            position: relative;
        }

        .expertTutor_jobDetail_clientCard.active {
            background: #e4e6e97a;
            border-color: #E5E7EB;
        }

        .expertTutor_jobDetail_clientCard:hover {
            background: #F4F5F7;
        }

        .expertTutor_jobDetail_clientAvatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        .expertTutor_jobDetail_clientInfo {
            flex: 1;
            min-width: 0;
            color: #9CA3AF;
        }

        .expertTutor_jobDetail_clientCard.active .expertTutor_jobDetail_clientInfo {
            color: inherit;
        }

        .expertTutor_jobDetail_clientCard.active .expertTutor_jobDetail_clientInfo .expertTutor_jobDetail_clientName {
            color: #1B1B3F;
        }

        .expertTutor_jobDetail_clientCard.active .expertTutor_jobDetail_clientInfo .expertTutor_jobDetail_clientDescription {
            color: #6B7280;
        }



        .expertTutor_jobDetail_clientName {
            font-size: 1rem;
            font-weight: 600;
            color: #1b1b3fa6;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .expertTutor_jobDetail_clientDescription {
            color: #6b7280a6;
            font-size: 0.875rem;
            line-height: 1.5;
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .expertTutor_jobDetail_notificationDot {
            width: 30px;
            height: 30px;
            background: #FF4842;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            font-weight: 500;
            position: absolute;
            top: -10px;
            right: -10px;
        }

        @media (max-width: 992px) {
            .expertTutor_jobDetail_layout {
                grid-template-columns: 1fr;
            }

            .expertTutor_jobDetail_meta {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
        }

        .expertTutor_jobDetail_card {
            background: white;
            border-radius: 12px;
            margin-bottom: 24px;
        }

        .expertTutor_jobDetail_header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
            border-bottom: 1px solid #E5E7EB;
            padding-bottom: 24px;
        }

        .expertTutor_jobDetail_title {
            font-size: calc(1.325rem + .9vw) !important;
            font-weight: 600;
            color: #1B1B3F;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .expertTutor_jobDetail_meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0;
        }

        .expertTutor_jobDetail_price {
            font-size: 1.4rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .expertTutor_jobDetail_currency {
            font-weight: 300;
            color: #564FFD;
            font-size: 1.3rem;
        }

        .expertTutor_jobDetail_location {
            color: #6B7280;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 8px;

        }

        .expertTutor_jobDetail_location svg {
            color: #09B31A;
            width: 16px;
            height: 16px;
        }

        .expertTutor_jobDetail_status {
            background: #F3F4F6;
            color: #6B7280;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 500;
            display: inline-block;
            margin-top: 8px;
        }

        .expertTutor_jobDetail_description {
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.8;
            margin: 16px 0;
            white-space: pre-line;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e9e8e8;
        }

        .expertTutor_jobDetail_section {
            margin-bottom: 24px;
        }

        .expertTutor_jobDetail_sectionTitle {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1B1B3F;
            margin-bottom: 16px;
        }

        .expertTutor_jobDetail_actions {
            display: flex;
            gap: 16px;
            margin-top: 24px;
        }

        .expertTutor_jobDetail_finishButton {
            background-color: #564FFD;
            border: none;
            color: white;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s;
        }

        .expertTutor_jobDetail_finishButton:hover {
            background-color: #4F46E5;
            color: white;
            text-decoration: none;
        }

        .expertTutor_jobDetail_messageButton {
            background-color: white;
            border: 1px solid #E5E7EB;
            color: #1B1B3F;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .expertTutor_jobDetail_messageButton:hover {
            background-color: #F9FAFB;
            border-color: #D1D5DB;
            color: #1B1B3F;
            text-decoration: none;
        }

        .expertTutor_jobDetail_messageButton i {
            color: #09B31A;
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
            justify-content: space-between;
        }

        .expertTutor_dashboard_createPost:hover {
            background-color: #007B55;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 171, 85, 0.15);
        }

        .expertTutor_dashboard_createPost i {
            margin-top: -1px;
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

        <div class="expertTutor_jobDetail_container">
            <div class="expertTutor_jobDetail_layout">
                <!-- Left Column: Job Details -->
                <div class="expertTutor_jobDetail_mainContent">
                    <div class="expertTutor_jobDetail_card">
                        <h1 class="expertTutor_jobDetail_title"><?php echo htmlspecialchars($job['title']); ?></h1>
                        <p class="expertTutor_jobDetail_description">Lorem ipsum dolor sit amet consectetur, Viverra bibendum lectus sit
                            rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet.
                            Vel.Lorem ipsum dolor s
                            it amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien
                            rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet.
                            Vel. Accumsan sapien
                            Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit
                            rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet.
                            VelLorem ipsum dolor s
                            it amet consectetur. Viverra bibendum lectus sit mi. Accumsan sapien
                            rhoncus in facilisis condimentum augue. Justo mattis nunc sem quisque amet.
                            Vel. Accumsan sapien</p>
                        <div class="expertTutor_jobDetail_meta">
                            <div class="expertTutor_jobDetail_price">
                                <span class="expertTutor_jobDetail_currency">PKR</span>
                                <?php echo number_format((float)$job['price'], 2); ?>
                            </div>
                            <div class="expertTutor_jobDetail_location">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1983_3041)">
                                        <path d="M21.5801 10.2247C21.5801 17.2247 12.5801 23.2247 12.5801 23.2247C12.5801 23.2247 3.58008 17.2247 3.58008 10.2247C3.58008 7.83775 4.52829 5.54857 6.21612 3.86074C7.90394 2.17291 10.1931 1.2247 12.5801 1.2247C14.967 1.2247 17.2562 2.17291 18.944 3.86074C20.6319 5.54857 21.5801 7.83775 21.5801 10.2247Z" stroke="#09B31A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5801 13.2247C14.2369 13.2247 15.5801 11.8816 15.5801 10.2247C15.5801 8.56785 14.2369 7.2247 12.5801 7.2247C10.9232 7.2247 9.58008 8.56785 9.58008 10.2247C9.58008 11.8816 10.9232 13.2247 12.5801 13.2247Z" stroke="#09B31A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1983_3041">
                                            <rect width="24" height="24" fill="white" transform="translate(0.580078 0.224701)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <?php echo htmlspecialchars($job['location']); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Client Cards -->
                <div class="expertTutor_jobDetail_sidebar">
                    <div class="expertTutor_jobDetail_clientsList">
                        <!-- Client Card 1 -->
                        <div class="expertTutor_jobDetail_clientCard active">
                            <img src="<?php echo htmlspecialchars($job['client']['avatar']); ?>" alt="<?php echo htmlspecialchars($job['client']['name']); ?>" class="expertTutor_jobDetail_clientAvatar">
                            <div class="expertTutor_jobDetail_clientInfo">
                                <div class="expertTutor_jobDetail_clientName">
                                    <?php echo htmlspecialchars($job['client']['name']); ?>
                                </div>
                                <p class="expertTutor_jobDetail_clientDescription">
                                    <?php echo htmlspecialchars($job['client']['description']); ?>
                                </p>
                            </div>
                            <span class="expertTutor_jobDetail_notificationDot">1</span>
                        </div>

                        <!-- Client Card 2 -->
                        <div class="expertTutor_jobDetail_clientCard">
                            <img src="assets/images/avatars/avatar-1.png" alt="Jonson" class="expertTutor_jobDetail_clientAvatar">
                            <div class="expertTutor_jobDetail_clientInfo">
                                <div class="expertTutor_jobDetail_clientName">
                                    Jonson
                                </div>
                                <p class="expertTutor_jobDetail_clientDescription">
                                    Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit rhoncus in facilisis condimentum augue.
                                </p>
                            </div>
                        </div>

                        <!-- Client Card 3 -->
                        <div class="expertTutor_jobDetail_clientCard">
                            <img src="assets/images/avatars/avatar-1.png" alt="Kevin" class="expertTutor_jobDetail_clientAvatar">
                            <div class="expertTutor_jobDetail_clientInfo">
                                <div class="expertTutor_jobDetail_clientName">
                                    Kevin
                                </div>
                                <p class="expertTutor_jobDetail_clientDescription">
                                    Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit rhoncus in facilisis condimentum augue.
                                </p>
                            </div>
                        </div>

                        <!-- Client Card 4 -->
                        <div class="expertTutor_jobDetail_clientCard">
                            <img src="assets/images/avatars/avatar-1.png" alt="Peterson" class="expertTutor_jobDetail_clientAvatar">
                            <div class="expertTutor_jobDetail_clientInfo">
                                <div class="expertTutor_jobDetail_clientName">
                                    Peterson
                                </div>
                                <p class="expertTutor_jobDetail_clientDescription">
                                    Lorem ipsum dolor sit amet consectetur. Viverra bibendum lectus sit rhoncus in facilisis condimentum augue.
                                </p>
                            </div>
                        </div>
                    </div>
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