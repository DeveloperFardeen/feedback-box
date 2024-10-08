# feedback-box
Take feedback from customer and store them in database.
# Feedback Form with Rating

This project is a feedback collection form with a cute UI that allows users to submit their feedback along with a rating. The ratings are represented by Font Awesome icons (`fa-frown-o`, `fa-meh-o`, `fa-smile-o`). The form sends the data to a PHP backend for validation and storage in a MySQL database.

## Features

- **User-Friendly Form**: Collects the user's name, mobile number, feedback, and a rating.
- **Rating with Icons**: Users can select from three ratings (sad, neutral, happy) using Font Awesome icons.
- **AJAX Submission**: The form submits the data without refreshing the page using JavaScript and XMLHttpRequest.
- **Server-Side Validation**: The PHP backend validates the data before storing it in the database.
- **Database Storage**: Feedback is stored in a MySQL database for later retrieval or analysis.

## Technologies Used

- **Frontend**:
  - HTML5 & CSS3
  - JavaScript (AJAX for form submission)
  - Font Awesome Icons

- **Backend**:
  - PHP (Data validation and database interaction)

- **Database**:
  - MySQL (Storing feedback and ratings)

## Setup Instructions

### Prerequisites

1. **PHP**: Ensure you have PHP installed on your server or local development environment.
2. **MySQL**: A MySQL database is required to store feedback.

### Steps to Run the Project

1. Clone the repository or download the project files:
   ```bash
   git clone https://github.com/your-username/feedback-form.git
2. Fire the sql given in database.sql to create database and table in MySQL
3. Ensure your server supports PHP and MySQL, and place the project files in your server's root directory (htdocs if using XAMPP).
4. Access the form via your browser:
   ```bash
   http://localhost/feedback-form/index.html

```bash
feedback-box/
│
├── index.html      # The feedback form HTML file
├── feedback.php    # Backend PHP script for handling form submission
└── README.md       # Project documentation
