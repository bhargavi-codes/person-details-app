# person-details-app 
# PERSON DETAILS MANAGEMENT APPLICATION    
This project is a simple PHP-based application that allows users to manage personal details of multiple individuals. It provides functionality as:   
1.Input details through a user-friendly form.   
2.Store the data in a MySQL database.   
3.View the stored data in a structured and styled table      

# FEATURES     
Add Multiple Persons:        
Users can input details such as:       
1.Name   
2.Date of birth   
3.Address   
4.Phone Number       
Backend Integration: All data is stored securely in a MySQL database.          
View Records: A separate page displays all stored records in a neat, tabular format.          
Scalable Design: Allows for the addition of multiple users.                

# TECHNOLOGIES USED         
1.Frontend: HTML, CSS         
2.Backend: PHP         
3.Database: MySQL         
4.Server: XAMPP (Apache and MySQL)            

# PREREQUISITES   
1.XAMPP or any PHP and MySQL server installed on your machine.   
2.A web browser to access the application.   

# INSTALLATION AND SETUP   
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
\ CREATE TABLE person_details (   
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

# HOW TO RUN   
1.Open your web browser.   
2.Access the form page: http://localhost/person-details/form.html.   
3.Fill in the details and submit the form.   
4.View stored records at: http://localhost/person-details/view.php.   

# FOLDER STRUCTURE   
# person-details/    
│        
├── form.html         # Form to collect user details   
├── insert.php        # Handles data insertion into the database   
├── view.php          # Displays data in a tabular format   
└── README.md         # Project documentation   

# USAGE   
1.Open form.html in your browser to add personal details.   
2.Submit the form to store details in the database.   
3.Visit view.php to see all the records displayed in a styled table.   

# SCREENSHOTS     
# 1.form.html page          
![Screenshot 2024-12-04 231221](https://github.com/user-attachments/assets/aa84b86b-25ca-42a9-9c8e-3da0168d01e3)
# 2.insert.php page         
![Screenshot 2024-12-04 231331](https://github.com/user-attachments/assets/c8f7d64b-ee26-4802-91e5-535d7618fe99) 
# 3.view.php page       
![Screenshot 2024-12-04 231352](https://github.com/user-attachments/assets/9aa86be6-c1ae-4a9b-9988-f6d44b1bb421) 
# 4.phpmyadmin page       
![Screenshot 2024-12-04 231517](https://github.com/user-attachments/assets/7a5ee705-5953-45bf-88c6-2def9197ff4b)    

# TROUBLESHOOTING        
1.404 Error: Ensure the files are in the correct htdocs directory.    
2.Database Connection Error: Double-check your MySQL credentials in insert.php and view.php.    
3.No Records Found: Confirm data is being inserted into the database.    






