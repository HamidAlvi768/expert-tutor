<?php
/**
 * Tutor Header Component
 * Flexible header with logo, configurable navigation links, and optional profile section
 * 
 * @param array $header_props {
 *     @type string $logo_text        Logo text (default: 'Tutor Expert')
 *     @type string $logo_link        Logo link URL (default: 'index.php')
 *     @type array  $nav_items        Navigation menu items
 *     @type bool   $show_profile     Whether to show profile section
 *     @type string $profile_name     Profile name text
 *     @type string $profile_image    Profile image URL
 * }
 */

// Default values
$default_header_props = [
    'logo_text' => 'Tutor Expert',
    'logo_link' => 'index.php',
    'nav_items' => [
        ['text' => 'Home', 'url' => 'index.php', 'has_dropdown' => false],
        ['text' => 'Subjects', 'url' => '#', 'has_dropdown' => true],
        ['text' => 'Tutor', 'url' => '#', 'has_dropdown' => true]
    ],
    'show_profile' => false,
    'profile_name' => 'Profile',
    'profile_image' => 'assets/images/profiles/profile-placeholder.jpg'
];

// Merge provided props with defaults
$header_props = isset($header_props) ? array_merge($default_header_props, $header_props) : $default_header_props;
?>

<!-- Header Navigation -->
<header class="tutor-expert-header container">
    <div class="header-left">
        <a href="<?php echo $header_props['logo_link']; ?>" class="logo-text"><?php echo $header_props['logo_text']; ?></a>
        <nav class="main-nav">
            <ul>
                <?php foreach ($header_props['nav_items'] as $item): ?>
                    <li class="<?php echo $item['has_dropdown'] ? 'dropdown-nav' : ''; ?>">
                        <a href="<?php echo $item['url']; ?>"><?php echo $item['text']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    
    <?php if ($header_props['show_profile']): ?>
    <div class="profile-section">
        <span class="profile-text"><?php echo $header_props['profile_name']; ?></span>
        <img src="<?php echo $header_props['profile_image']; ?>" alt="Profile" class="profile-image">
    </div>
    <?php endif; ?>
</header>

<!-- Include external CSS -->
<link rel="stylesheet" href="assets/css/components/tutor-header.css"> 