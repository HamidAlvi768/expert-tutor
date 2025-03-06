// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add shadow to header on scroll
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.main-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Initialize number animations when they come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateNumber(entry.target);
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of the element is visible
    });

    // Observe all stat numbers
    document.querySelectorAll('.stat-number').forEach(stat => {
        observer.observe(stat);
    });

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});

function animateNumber(element) {
    const value = parseFloat(element.dataset.value);
    const suffix = element.dataset.suffix;
    const duration = 2000; // Animation duration in milliseconds
    const steps = 60; // Number of steps in the animation
    const stepDuration = duration / steps;
    
    let currentStep = 0;
    let currentValue = 0;
    const increment = value / steps;
    
    // Clear any existing content
    element.textContent = '0' + suffix;
    
    const animation = setInterval(() => {
        currentStep++;
        currentValue = currentStep * increment;
        
        // Format the number based on whether it's a decimal or integer
        let formattedValue = Number.isInteger(value) ? 
            Math.round(currentValue).toString() : 
            currentValue.toFixed(1);
            
        // Add the suffix
        element.textContent = formattedValue + suffix;
        
        // Stop the animation when we reach the target value
        if (currentStep >= steps) {
            element.textContent = value + suffix;
            clearInterval(animation);
        }
    }, stepDuration);
} 