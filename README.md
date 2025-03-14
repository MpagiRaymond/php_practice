Project Name: ElectroWorld

How to Run the Website

To run the website locally on your machine, follow these steps:

Prerequisites:
- XAMPP or WAMP (for PHP and MySQL)
- Text Editor (VS Code or any other editor)
- Web Browser (Google Chrome, Mozilla Firefox, etc.)

Steps:
1. Clone the Repository:
   If you have the repository in a GitHub account or any other platform, you can clone it by running the following command:

   bash
   git clone https://github.com/MpagiRaymond/php_practice.git
   

2. Set Up XAMPP/WAMP:
   - Install XAMPP or WAMP if you haven't already.
   - Start the Apache and MySQL servers from the XAMPP/WAMP control panel.

3. Move Project to the Local Server Directory:
   - Place the project files in the htdocs folder …
   - Ensure the database connection settings (username, password, database name) match your local setup.

   php
   servername = "localhost";username = "root"; // default for XAMPP
   password = ""; // default for XAMPPdbname = "votes"; // replace with your database name
   

6. Run the Website:
   - After setting everything up, open your web browser.
   - Navigate to http://localhost/php_practice/index.php (or the folder name where your project is located).
   - Your website should now be up and running locally.



Features Implemented

- Homepage: A welcoming page with a brief introduction to ElectroWorld.
- Navigation Bar: Provides easy navigation between the Home, About, and Contact pages.
- About Page: Describes the company's mission and goals.
- Product List: Displays a variety of electronics (Smartphones, Laptops, Tablets) available for purchase.
- Login Form: Users can log into their accounts with email and password.
- Contact Form: Allows users to reach out by submitting their name, email, and message.
- Database Integration: All user login information is securely stored in a MySQL database.
- Session Management: Once logged in, the user can access personalized information.



Any Challenges Faced

1. Database Connection Issues:
- Initially, connecting the PHP website to the MySQL database presented challenges. The issue stemmed from incorrect database credentials or the MySQL server not being properly configured in XAMPP/WAMP.

2. Cross-Origin Resource Sharing (CORS) Issues:
   - When trying to handle form submissions using AJAX, there were issues with CORS. This was resolved by adding appropriate headers in the PHP script to allow cross-origin requests.

   php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
   header("Access-Control-Allow-Headers: Content-Type");
   

3. Responsive Design:
   - Ensuring the website was mobile-friendly and responsive across different devices was challenging. It was necessary to use media queries and CSS frameworks (such as Bootstrap) to make the site adapt to various screen sizes.

4. Password Hashing:
   - Initially, passwords were stored in plain text, which is insecure. The challenge was to implement password_hash() and password_verify() in PHP for secure password storage and verification.

   Example:

   php
   hashedPassword = password_hash(password, PASSWORD_DEFAULT);
   if (password_verify(password,storedHash)) {
       // Valid login
   }
   

5. Security Concerns:
- The website had to be secured against SQL injection and other common security vulnerabilities. Prepared statements were used for all database interactions to avoid SQL injection risks.

   Example using Prepared Statements:
   php
   stmt =conn->prepare("SELECT * FROM users WHERE email = ?");
   stmt->bind_param("s",email);
   $stmt->execute();
   

6. File Uploads (if applicable):
   - Handling file uploads (e.g., for user profile pictures or product images) required ensuring that uploaded files were validated for security. The file size and type were checked, and proper error handling was implemented to prevent unwanted files from being uploaded.

7. Handling Form Submissions with AJAX:
   - Sending form data via AJAX for login or contact forms was initially tricky due to asynchronous behavior and proper error handling. The issue was solved by ensuring the PHP backend returned appropriate status messages and checking for errors in the JavaScript fetch API.



Future Improvements

- Password Reset Feature: Implementing a password reset mechanism for users.
- User Authentication: Implementing JWT (JSON Web Token) for more secure authentication.
- User Registration: Allowing new users to register and securely store their information.
- Error Handling: Improve error handling for invalid form inputs and server issues.
- Mobile Optimization: Further optimize the website for mobile devices by fine-tuning CSS.
