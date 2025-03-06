<?php
// Start the session if needed
session_start();
?>
<header class="main-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="Assignment Connect" class="logo">
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