# person-details-app (PERSON DETAILS MANAGEMENT APPLICATION)
This project is a simple PHP-based application that allows users to manage personal details of multiple individuals. It provides functionality as:   
1.Input details through a user-friendly form.   
2.Store the data in a MySQL database.   
3.View the stored data in a structured and styled table      

FEATURES     
Add Multiple Persons: Users can input details such as:   
Name   
Date of birth   
Address   
Phone   
Backend Integration: All data is stored securely in a MySQL database.   
View Records: A separate page displays all stored records in a neat, tabular format.   
Scalable Design: Allows for the addition of multiple users.   

   TECHNOLOGIES USED
Frontend: HTML, CSS
Backend: PHP
Database: MySQL
Server: XAMPP (Apache and MySQL)

   PREREQUISITES
XAMPP or any PHP and MySQL server installed on your machine.
A web browser to access the application.

  INSTALLATION AND SETUP
1. Clone or Download the Project
Download the project as a ZIP file or clone the repository:
git clone https://github.com/repo-link/person-details-app.git
2. Start the Server
Launch the XAMPP Control Panel.
Start the Apache and MySQL modules.
3. Set Up the Database
Open phpMyAdmin in your browser.
Create a database named person_db and execute the following SQL command:
SQL QUERY:
CREATE TABLE person_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(15) NOT NULL
);
4. Configure the Project
Place the project files in the htdocs folder of XAMPP (e.g., C:/xampp/htdocs/person-details).
Ensure the database connection in insert.php and view.php matches your setup:
$conn = new mysqli('localhost', 'root', '', 'person_db');

HOW TO RUN
Open your web browser.
Access the form page: http://localhost/person-details/form.html.
Fill in the details and submit the form.
View stored records at: http://localhost/person-details/view.php.

FOLDER STRUCTURE
person-details/
│
├── form.html         # Form to collect user details
├── insert.php        # Handles data insertion into the database
├── view.php          # Displays data in a tabular format
└── README.md         # Project documentation

USAGE
Open form.html in your browser to add personal details.
Submit the form to store details in the database.
Visit view.php to see all the records displayed in a styled table.

SCREENSHOTS
![Screenshot 2024-12-04 231517](https://github.com/user-attachments/assets/57ba52d7-47e8-4aee-a5ab-a95ea548c2de)
![Screenshot 2024-12-04 231352](https://github.com/user-attachments/assets/0b717f3f-61a5-4580-bdcb-bef23ec2af0d)
![Screenshot 2024-12-04 231331](https://github.com/user-attachments/assets/5fa3bd55-61c8-48f5-8b51-07b631191347)
![Screenshot 2024-12-04 231221](https://github.com/user-attachments/assets/c0c22710-e92f-41d5-98e0-ae402ea93191)

TROUBLESHOOTING
404 Error: Ensure the files are in the correct htdocs directory.
Database Connection Error: Double-check your MySQL credentials in insert.php and view.php.
No Records Found: Confirm data is being inserted into the database.




