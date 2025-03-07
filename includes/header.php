<?php
// Only start session if one hasn't been started already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Default logo settings if not provided
$logo_src = isset($custom_logo) ? $custom_logo : 'assets/images/logo.png';
$logo_alt = isset($custom_logo_alt) ? $custom_logo_alt : 'Assignment Connect';
?>
<header class="main-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="<?php echo htmlspecialchars($logo_src); ?>" alt="<?php echo htmlspecialchars($logo_alt); ?>" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Subjects
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mathematics</a></li>
                            <li><a class="dropdown-item" href="#">Science</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Tutor
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Find a Tutor</a></li>
                            <li><a class="dropdown-item" href="#">Become a Tutor</a></li>
                            <li><a class="dropdown-item" href="request-tutor.php">Request a Tutor</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="nav-buttons">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </div>
            </div>
        </div>
    </nav>
</header> 