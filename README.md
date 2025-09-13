# Donation Project

This is a CodeIgniter 3 donation project. The database is **not included** for security reasons. You can create your own database using the `database_template.sql` file.

## Setup

1. Clone the repository.
2. Place the project in your local server (XAMPP/WAMP).
3. Import the database structure from `database_template.sql`.
4. Configure your database in `application/config/database.php`.
5. Access the project via `http://localhost/donation_project/`.

**Note:** Example images are included in `assets/images/`. Replace them with your own if needed.
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/fa141611-5372-4859-8505-1e38afa7aeeb" />
Description:
The website is fully bilingual, supporting Arabic and English languages with proper, clean fonts for both. The main admin has full control over the home page content and can update it dynamically from the admin panel without touching the code.
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/2bdf0a3a-7b48-4cce-8e33-61fbe767a5ad" />
### User Login Functionality

The project implements a **robust login system** for both users and admins. The login process includes the following steps:

1. **User Input Validation**:  
   - Users provide their **email** and **password**.  
   - Passwords are hashed using `MD5` for security before verification.

2. **User Verification**:  
   - The system checks if the email exists in the database.  
   - Verifies the hashed password matches the stored password.  
   - Ensures the user's account is **active** before allowing access.

3. **Role-Based Access**:  
   - **Admin users** (`role = 1`) are redirected to the admin dashboard (`addDonationOpportunities` page).  
   - **Regular users** are redirected to their user dashboard (`Useraccount` page) or the last visited page if a cookie exists.

4. **Error Handling & Feedback**:  
   - If the email is unverified, a message prompts the user to confirm their email.  
   - Incorrect passwords trigger a "Please enter valid password" error.  
   - Unregistered users receive a message prompting them to register first.  

5. **Session Management**:  
   - Logged-in users have session data stored including their role (`admin` or user).  
   - Flash messages provide immediate feedback after login attempts.  

**Note:** The login system supports Arabic and English messages for user feedback.
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/3a7c22e4-5a6f-44cf-8306-d22d508ebf7f" />
 
The registration page allows new users to create an account on the donation platform. Key features include:

1. **User Input Validation:**  
   - Users enter their **name, email, and password**.  
   - The system validates that the email is not already registered.  
   - Passwords are stored securely using hashing (MD5 in this version).  

2. **Account Activation:**  
   - Upon registration, users may need to **verify their email** before activating their account (if email verification is enabled).  
   - Users are notified if their email is already registered.  

3. **Role Assignment:**  
   - New users are assigned the **regular user role** by default.  
   - Admin accounts are created separately.  

4. **Session & Feedback:**  
   - After successful registration, users may be logged in automatically or redirected to the login page.  
   - Flash messages inform users about successful registration or errors.

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/9320918a-88b6-4e3d-87c2-8ba3173bce39" />


