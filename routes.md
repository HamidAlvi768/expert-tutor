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

## Includes & Components

These are not standalone pages but important components/includes that are used across multiple pages:

| File | Description |
|------|-------------|
| `includes/header.php` | Main site header included on public pages |
| `includes/footer.php` | Site footer included on all pages |
| `includes/auth-modals.php` | Authentication modal components for login/signup |
| `includes/components/top-header.php` | Top navigation bar component |
| `includes/components/main-nav.php` | Main navigation menu component |
| `includes/components/tutor-hero.php` | Hero section for tutor profiles |
| `includes/sections/hero.php` | Home page hero section |
| `includes/sections/features.php` | Features section for home page |
| `includes/sections/partners.php` | Partners showcase section |
| `includes/sections/teacher.php` | Featured teachers section |
| `includes/sections/cta.php` | Call-to-action section |
| `includes/wizard-steps/*.php` | Various steps for teacher profile wizard |

## Modal Routes

These routes are triggered via JavaScript for modal dialogs:

| Feature | Description |
|---------|-------------|
| Login Modal | Appears when clicking "Sign In" in the header |
| Signup Modal | Appears when clicking "Sign Up" or from the login modal |
| Email Verification Modal | Appears after successful signup |
| Phone Verification Modal | Appears when clicking "Verify Phone Number" in my-requests.php |

## Links

Complete URLs for all pages:

| Page | URL |
|------|-----|
| Home | https://leightonbuzzardairportcabs.co.uk/expert-tutor/index.php |
| Tutors | https://leightonbuzzardairportcabs.co.uk/expert-tutor/tutors.php |
| About | https://leightonbuzzardairportcabs.co.uk/expert-tutor/about.php |
| Profile | https://leightonbuzzardairportcabs.co.uk/expert-tutor/profile.php |
| Messages | https://leightonbuzzardairportcabs.co.uk/expert-tutor/messages.php |
| Delivery Work | https://leightonbuzzardairportcabs.co.uk/expert-tutor/delivery.php |
| Manage Finance | https://leightonbuzzardairportcabs.co.uk/expert-tutor/finance.php |
| Reviews | https://leightonbuzzardairportcabs.co.uk/expert-tutor/reviews.php |
| Tutor Profile | https://leightonbuzzardairportcabs.co.uk/expert-tutor/tutor-profile.php |
| Teacher Profile Wizard | https://leightonbuzzardairportcabs.co.uk/expert-tutor/teacher-profile-wizard.php |
| Teacher Reviews | https://leightonbuzzardairportcabs.co.uk/expert-tutor/teacher-reviews.php |
| Become Instructor | https://leightonbuzzardairportcabs.co.uk/expert-tutor/become-instructor.php |
| Request Tutor | https://leightonbuzzardairportcabs.co.uk/expert-tutor/request-tutor.php |
| My Requests | https://leightonbuzzardairportcabs.co.uk/expert-tutor/my-requests.php |
| Jobs | https://leightonbuzzardairportcabs.co.uk/expert-tutor/jobs.php |
| Job Application | https://leightonbuzzardairportcabs.co.uk/expert-tutor/job-application.php |
| Login | https://leightonbuzzardairportcabs.co.uk/expert-tutor/login.php |
| Sign Up | https://leightonbuzzardairportcabs.co.uk/expert-tutor/signup.php |
| Email Verification | https://leightonbuzzardairportcabs.co.uk/expert-tutor/verify/verify-email.php |
| Support | https://leightonbuzzardairportcabs.co.uk/expert-tutor/support.php |
| Contact | https://leightonbuzzardairportcabs.co.uk/expert-tutor/contact.php |
| Help Center | https://leightonbuzzardairportcabs.co.uk/expert-tutor/help-center.php |
| FAQ | https://leightonbuzzardairportcabs.co.uk/expert-tutor/faq.php |
| Terms and Conditions | https://leightonbuzzardairportcabs.co.uk/expert-tutor/terms.php |
| Privacy Policy | https://leightonbuzzardairportcabs.co.uk/expert-tutor/privacy.php |
| Careers | https://leightonbuzzardairportcabs.co.uk/expert-tutor/career.php |

## Notes

- Some routes may include query parameters for filtering or specific views
- Authentication is required for user-specific pages (profile, messages, etc.)
- The application uses a combination of server-rendered pages and dynamic JavaScript features
- File upload functionality is available in various forms (profile pictures, assignments, etc.)
- Some pages mentioned in navigation (like login.php) might be implemented through modals rather than separate pages
- The verify folder contains email verification functionality 