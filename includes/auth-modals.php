<?php
function renderAuthModal($type = 'login') {
    $isLogin = $type === 'login';
    $modalId = $isLogin ? 'loginModal' : 'signupModal';
    $title = $isLogin ? 'Login your account!' : 'Create your account!';
    $submitText = $isLogin ? 'Continue' : 'Sign Up';
    $alternateText = $isLogin ? 'Don\'t have an account?' : 'Already have an account?';
    $alternateLink = $isLogin ? 'Sign up' : 'Login';
    $alternateLinkTarget = $isLogin ? '#signupModal' : '#loginModal';
    ?>
    <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row g-0">
                    <!-- Left Image Panel -->
                    <div class="col-md-6 d-none d-md-block">
                        <div class="login-image-panel">
                            <img src="assets/images/student-login.jpg" 
                                 alt="Student with books" 
                                 class="img-fluid h-100 w-100 object-fit-cover">
                        </div>
                    </div>
                    <!-- Right Form Panel -->
                    <div class="col-md-6">
                        <div class="login-form-panel p-4 p-md-5">
                            <!-- User Type Toggle -->
                            <div class="user-type-toggle mb-4">
                                <button class="btn active" data-type="student">Student</button>
                                <button class="btn" data-type="teacher">Teacher</button>
                            </div>
                            
                            <h2 class="login-title mb-4"><?php echo $title; ?></h2>
                            
                            <!-- Auth Method Tabs -->
                            <div class="login-method-tabs mb-4">
                                <button class="btn active" data-method="email">E-mail</button>
                                <button class="btn" data-method="mobile">Mobile Number</button>
                            </div>
                            
                            <!-- Auth Form -->
                            <form class="auth-form <?php echo $type; ?>-form">
                                <?php if (!$isLogin): ?>
                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" 
                                               class="form-control" 
                                               placeholder="Email" 
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                                               required>
                                    </div>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                
                                <?php if ($isLogin): ?>
                                <div class="text-end mb-3">
                                    <a href="#" class="forgot-password">Forgot password?</a>
                                </div>
                                <?php endif; ?>
                                
                                <button type="submit" class="btn btn-primary w-100 mb-4"><?php echo $submitText; ?></button>
                                
                                <!-- Social Login -->
                                <div class="social-login text-center">
                                    <p class="text-muted mb-3">Sign in With</p>
                                    <div class="social-icons mb-4">
                                        <button class="btn btn-social" type="button">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-social" type="button">
                                            <i class="fab fa-google"></i>
                                        </button>
                                        <button class="btn btn-social" type="button">
                                            <i class="fab fa-apple"></i>
                                        </button>
                                    </div>
                                    <p class="signup-text">
                                        <?php echo $alternateText; ?> 
                                        <a href="#" class="<?php echo $isLogin ? 'signup-link' : 'login-link'; ?>" 
                                           data-bs-toggle="modal" 
                                           data-bs-target="<?php echo $alternateLinkTarget; ?>">
                                            <?php echo $alternateLink; ?>
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?> 