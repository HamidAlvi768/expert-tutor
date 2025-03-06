document.addEventListener('DOMContentLoaded', function() {
    // User Type Toggle for both modals
    document.querySelectorAll('.user-type-toggle .btn').forEach(button => {
        button.addEventListener('click', function() {
            const toggle = this.closest('.user-type-toggle');
            toggle.querySelectorAll('.btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Login Method Toggle for both modals
    document.querySelectorAll('.login-method-tabs .btn').forEach(button => {
        button.addEventListener('click', function() {
            const tabs = this.closest('.login-method-tabs');
            const form = this.closest('.login-form-panel').querySelector('form');
            const inputGroup = form.querySelector('.input-group-text i');
            const input = form.querySelector('input[type="email"], input[type="tel"]');
            
            // Update active tab
            tabs.querySelectorAll('.btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Switch input type and icon based on selected method
            if (this.dataset.method === 'mobile') {
                input.type = 'tel';
                input.placeholder = 'Mobile Number';
                inputGroup.className = 'fas fa-mobile-alt';
                input.pattern = '[0-9]{10}';
            } else {
                input.type = 'email';
                input.placeholder = 'Email';
                inputGroup.className = 'fas fa-envelope';
                input.pattern = '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$';
            }
        });
    });

    // Form Validation and Submission
    document.querySelectorAll('.auth-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const isLogin = this.classList.contains('login-form');
            const formData = new FormData(this);
            console.log(`${isLogin ? 'Login' : 'Signup'} form submitted:`, Object.fromEntries(formData));
            
            // You would typically make an API call here
        });
    });

    // Social Login Handlers
    document.querySelectorAll('.btn-social').forEach(button => {
        button.addEventListener('click', function() {
            const platform = this.querySelector('i').classList[1].split('-')[1];
            const isLogin = this.closest('form').classList.contains('login-form');
            console.log(`Initiating ${platform} ${isLogin ? 'login' : 'signup'}`);
            // Add your social login/signup logic here
        });
    });

    // Input Focus Effects
    document.querySelectorAll('.input-group').forEach(group => {
        const input = group.querySelector('.form-control');
        input.addEventListener('focus', () => {
            group.style.borderColor = '#564FFD';
        });
        input.addEventListener('blur', () => {
            group.style.borderColor = '';
        });
    });

    // Modal Switch Handling
    const loginModal = document.getElementById('loginModal');
    const signupModal = document.getElementById('signupModal');

    // Handle modal switching
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.classList.contains('signup-link') || this.classList.contains('login-link')) {
                e.preventDefault();
                const targetModalId = this.getAttribute('data-bs-target');
                const targetModal = new bootstrap.Modal(document.querySelector(targetModalId));
                
                // Hide current modal
                const currentModal = bootstrap.Modal.getInstance(document.querySelector('.modal.show'));
                if (currentModal) {
                    currentModal.hide();
                    // Wait for the first modal to finish hiding before showing the new one
                    document.querySelector('.modal.show').addEventListener('hidden.bs.modal', function handler() {
                        this.removeEventListener('hidden.bs.modal', handler);
                        targetModal.show();
                    });
                } else {
                    targetModal.show();
                }
            }
        });
    });

    // Initialize modals with default state
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('show.bs.modal', function() {
            // Set default state to email
            const emailTab = this.querySelector('.login-method-tabs .btn[data-method="email"]');
            if (emailTab) {
                emailTab.click(); // Trigger the click event to set up proper state
            }
        });
    });

    // Initialize Bootstrap modals
    document.querySelectorAll('.modal').forEach(modal => {
        new bootstrap.Modal(modal);
    });
}); 