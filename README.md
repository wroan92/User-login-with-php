GitHub license
GitHub issues
GitHub stars
HTML5
CSS
SQL
PHP

User Login with PHP screenshot

This is a simple PHP application that allows users to create an account, log in, and log out. It uses a MySQL database to store user information.

Getting Started
To use this application, you'll need to set up a web server with PHP and MySQL installed. You can use a service like XAMPP to easily set up a development environment on your own computer.

Once you have a web server set up, you can download or clone this repository to your local machine.

bash
Copy code
git clone https://github.com/wroan92/User-login-with-php.git
Configuration
Before you can use the application, you'll need to configure it with your MySQL database credentials. Open the config.php file in a text editor and update the following lines:

php
Copy code
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');
Replace your_username, your_password, and your_database_name with your actual MySQL credentials.

Usage
To use the application, navigate to the index.php file in your web browser. You should see a login form. If you don't have an account yet, click the "Create an account" link to create one.

Once you've logged in, you'll see a welcome message with your username. You can log out by clicking the "Log out" link.

License
This project is licensed under the MIT License. See the LICENSE file for details.
