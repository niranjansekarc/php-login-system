# PHP Login System with Backend Dashboard

This project is a simple authentication system built using **HTML, PHP, and MySQL**.  
It demonstrates how a backend server validates user credentials, stores login records, and detects logged-in users using sessions.

---

## Technologies Used
- HTML (Frontend)
- PHP (Backend)
- MySQL (Database)
- XAMPP (Apache & MySQL)

---

## Features
- User login using username and password
- Credentials validated from MySQL database
- Login state stored using PHP sessions
- Backend dashboard detects logged-in user
- Backend displays **multiple login records with timestamps**
- Access to backend is blocked if user is not logged in

---

## How the System Works
1. User opens the login page (`login.html`)
2. User enters credentials and submits the form
3. `login.php`:
   - Validates credentials from the `users` table
   - Stores the logged-in user in a PHP session
   - Stores each login event in the database with timestamp
4. `backend.php`:
   - Checks the session to detect the logged-in user
   - Displays all login records stored in the database

