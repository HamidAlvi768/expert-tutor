<?php
session_start();

// Page specific variables
$page_title = 'Buy Coins';
$page_class = 'buy-coin-page';
$hero_content = 'includes/templates/hero-contents/buy-coin-hero.php';
$additional_css = [];

// Setup props for tutor-header component
$header_props = [
    'logo_text' => 'Tutor Expert',
    'logo_link' => 'index.php',
    'nav_items' => [
        ['text' => 'Profile', 'url' => 'profile.php', 'has_dropdown' => false],
        ['text' => 'Messages', 'url' => 'messages.php', 'has_dropdown' => false],
        ['text' => 'Delivery Work', 'url' => 'delivery.php', 'has_dropdown' => false],
        ['text' => 'Manage Finance', 'url' => 'finance.php', 'has_dropdown' => true],
        ['text' => 'Reviews', 'url' => 'reviews.php', 'has_dropdown' => false],
    ],
    'show_profile' => true,
    'profile_name' => 'John Smith',
    'profile_image' => 'assets/images/profiles/teacher-2.png'
];

// Include the base template
include 'includes/templates/base-coin.php'; 