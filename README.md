<a name="readme-top"></a>
# User login and registration with php


![GitHub issues](https://img.shields.io/github/issues/wroan92/User-login-with-php?style=flat-square)

![GitHub stars](https://img.shields.io/github/stars/wroan92/User-login-with-php?style=flat-square)

![License](https://img.shields.io/badge/license-MIT-blue.svg)
This project is licensed under the MIT License. See the [LICENSE](LICENSE.txt) file for details.

## Overwiew
This is a simple PHP application that allows users to create an account, log in, and log out. It uses a MySQL database to store user information.

### Built with

- ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white&style=flat)
- ![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white&style=flat)


### Getting Started
To use this application, you'll need to set up a web server with PHP and MySQL installed. You can use a service like XAMPP to easily set up a development environment on your own computer.

Once you have a web server set up, you can download or clone this repository to your local machine.

```
git clone https://github.com/wroan92/User-login-with-php.git`
```
Configuration
Before you can use the application, you'll need to configure it with your MySQL database credentials. Open the config.php file in a text editor and update the following lines:

```php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'your_database_name');
```
Replace your_username, your_password, and your_database_name with your actual MySQL credentials.

### Usage
To use the application, navigate to the index.php file in your web browser. You should see a login form. If you don't have an account yet, click the "Create an account" link to create one.

Once you've logged in, you'll see a welcome message with your username. You can log out by clicking the "Log out" link.


<p align="right">(<a href="#readme-top">back to top</a>)</p>  
<hr>

