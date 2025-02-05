This project is a user authentication system built using PHP, MySQL, HTML, and CSS. It allows users to register, log in, and log out while securely storing their credentials in a MySQL database. The project ensures password encryption and session management, making it a functional and secure system.

Key Features:
✅ User Registration:
Users can create an account by providing a username, email, and password.
Passwords are encrypted using password hashing (PASSWORD_DEFAULT).
Data is securely stored in a MySQL database.

✅ User Login:
Users can log in with a username and password.
The system verifies credentials by checking hashed passwords against stored values.
Successful login redirects users to a welcome page.
If credentials are incorrect, appropriate error messages are displayed.

✅ Session Management:
Sessions are used to track logged-in users.
Upon login, the session stores the username to maintain an active session.
A logout script (session_destroy()) ensures users can securely log out and end their session.

✅ Database Connection (db_connect.php):
Establishes a connection to a MySQL database using mysqli.
Ensures the connection is active and handles errors gracefully.

✅ Security Features:
Password Hashing: Uses password_hash() and password_verify() for secure password management.
Session Handling: Prevents unauthorized access using session validatio
