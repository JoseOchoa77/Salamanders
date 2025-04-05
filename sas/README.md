# Salamander README

<p>This is a basic PHP project that connects to a MySQL database using credentials stored in a
secure, non-tracked file.<p>

## Requirements ##
<p>PHP 7.4+
MySQL 5.7+
Web server (e.g., Apache, Nginx)<p>

## Installation ## 

<p>Clone the repository:<p>
<p>git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name<p>

## Create a db_credentials.php file: ##
<p>Inside the private/ folder (create it if it doesn't exist), create a file named
db_credentials.php with the following content:<p>

<p><?php
<p>
define("DB_SERVER","");
define("DB_USER","");
define("DB_PASS","");
define("DB_NAME","");
<p>Fill in the appropriate values for your MySQL setup.<p>

## Protect your credentials: ##
<p>Make sure db_credentials.php is listed in your .gitignore file so it is not
committed to version control:<p>
<p>/private/db_credentials.php<p>

## Usage ##
<p>The program is written so the initialize.php will always include the db_credentials.php file.<p>

## Security Note ##
<p>Never commit db_credentials.php to version control. Use .gitignore to prevent
accidental exposure of sensitive credentials.<p>
