# Expert Tutor Project Directory Structure

This document outlines the organization of the Expert Tutor Learning Management System (LMS) application.

## Root Directory
- **PHP Files**:
- `index.php` - Main entry point of the application

## Main Directories

### assets/
Contains frontend resources:

- **css/** - Stylesheets
- `style.css` - Main stylesheet
- `login-modal.css` - Styles for login modal
- `utilities.css` - Utility CSS classes
- **js/** - JavaScript files
- `main.js` - Main JavaScript functionality
- `login-modal.js` - Login modal functionality
- `utilities.js` - Utility functions
- **images/** - Image resources
- Various PNG/JPG images including logo, hero images, app store buttons
- `reviewers/` subdirectory for reviewer images

### includes/
Reusable PHP code and components:

- **components/** - Reusable UI components
- `button.php` - Button component
- `card.php` - Card component
- `modal.php` - Modal component
- **modals/** - Modal dialogs
- `login-modal.php` - Login modal
- **sections/** - Page sections
- Various section files (`hero.php`, `features.php`, `cta.php`, etc.)
- `config.php` - Application configuration
- `header.php` - Common header
- `footer.php` - Common footer

## Project Architecture

The Expert Tutor application follows a component-based design with clear separation of:
- Frontend assets (CSS, JavaScript, images)
- Reusable PHP components
- Core functionality

This structure promotes code reusability and maintainability while organizing the application into logical sections.

