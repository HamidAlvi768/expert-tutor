# Expert Tutor - Application Routes

This document provides a comprehensive listing of all routes/pages in the Expert Tutor application, organized by category.

## Public Pages

| Route | Description |
|-------|-------------|
| `index.php` | Home page with featured tutors, subjects, and testimonials |
| `tutors.php` | Tutors listing page showing available tutors with filtering options |
| `about.php` | About page with information about the platform |

## User Account & Profile

| Route | Description |
|-------|-------------|
| `profile.php` | User profile page where students/users can view and edit their profile information |
| `messages.php` | Messaging interface for communicating with tutors |
| `delivery.php` | Page for managing and tracking delivery of tutoring services |
| `finance.php` | Financial management page for payments and transactions |
| `reviews.php` | User reviews management page |

## Tutor/Teacher Pages

| Route | Description |
|-------|-------------|
| `tutor-profile.php` | Public profile page for tutors, visible to students |
| `teacher-profile-wizard.php` | Multi-step wizard for teachers to set up their profile |
| `teacher-reviews.php` | Page showing reviews for a specific teacher |
| `become-instructor.php` | Information and registration page for becoming an instructor |

## Job/Request Management

| Route | Description |
|-------|-------------|
| `request-tutor.php` | Form for students to request a tutor with specific criteria |
| `my-requests.php` | Dashboard showing a user's active tutor requests |
| `jobs.php` | Listing of available tutoring jobs |
| `job-application.php` | Form for tutors to apply to specific tutoring jobs |

## Authentication & Verification

| Route | Description |
|-------|-------------|
| `login.php` | Login page for existing users |
| `signup.php` | Sign up page for new users |
| `verify/verify-email.php` | Email verification page for new accounts |

## Support & Information

| Route | Description |
|-------|-------------|
| `support.php` | Support page with help resources and contact options |
| `contact.php` | Contact page for sales and general inquiries |
| `help-center.php` | Help center with resources and FAQs |
| `faq.php` | Frequently Asked Questions page |
| `terms.php` | Terms and conditions page |
| `privacy.php` | Privacy policy page |
| `career.php` | Career opportunities with Expert Tutor |

## Modal Routes

These routes are triggered via JavaScript for modal dialogs:

| Feature | Description |
|---------|-------------|
| Login Modal | Appears when clicking "Sign In" in the header |
| Signup Modal | Appears when clicking "Sign Up" or from the login modal |
| Email Verification Modal | Appears after successful signup |
| Phone Verification Modal | Appears when clicking "Verify Phone Number" in my-requests.php |

## Notes

- Some routes may include query parameters for filtering or specific views
- Authentication is required for user-specific pages (profile, messages, etc.)
- The application uses a combination of server-rendered pages and dynamic JavaScript features
- File upload functionality is available in various forms (profile pictures, assignments, etc.) 