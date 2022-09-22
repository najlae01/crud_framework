# CRUD Framework

## How to run the project

To run the project, you need the following tools on your local machine: Web Server (e.g., Apache), PHP (Interpreter).
The following tutorial shows how to set up Xampp and php : https://www.geeksforgeeks.org/how-to-run-php-programs

Once you started the Apache Web Server and MySQL on XAMPP, open phpmyAdmin the administration tool for Mysql : http://localhost/phpmyadmin/ and create a database named "etudiant".
The database  should contain two tables :  

  A table named 'etudiant', that has 5 columns; id_etudiant, nom, prenom, age and cne.  
  Second table 'users', that has 4 columns; id, username, email, and passwd.

![image](readmeimg/database.png)

  Add the admin row to the users table :
  ![image](readmeimg/admin.png)
  
  And lastly you need to make sure that the project folder is located under the XAMPP/htdocs folder on your local machine.
  Paste the following url in your browser and the project should run : http://localhost/framework_crud/index.php
  
  ### *Project architecture* :
  ![image](readmeimg/architecture.png)

## Overview
### *Home page*
![image](readmeimg/home1.PNG)
![image](readmeimg/home2.PNG)
![image](readmeimg/home3.PNG)
![image](readmeimg/home4.PNG)
![image](readmeimg/home5.PNG)
![image](readmeimg/home6.PNG)
![image](readmeimg/home7.PNG)

### *Adding a student's page (Registering as a member)*
![image](readmeimg/addetudiant.PNG)

### *Register page*
![image](readmeimg/register.PNG)

### *Login page*
![image](readmeimg/login.PNG)

## Admin
![image](readmeimg/loginadmin.PNG)

### *Admin Dashboard*
![image](readmeimg/dashboard.PNG)

### *Update a member's page*
![image](readmeimg/update.PNG)
