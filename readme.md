To Setup Development Environment for Lavarel project - #todolist
To install Laravel 5 with Xampp (Windows 10)
Requirements: PHP >= 5.5.9
To check php installation
1.	Go to command prompt and type: php -1

Install XAMPP https://www.apachefriends.org/index.html
1.	Download XAMPP for Windows (7.2.10 PHP7.2.10) and run the setup file
2.	To test the successfulness of installation: 
    	- At the browser and type: localhost – default official page for XAMPP apache will display

Install Composer
1.	Download composer from https://getcomposer.org/download/
2.	Click Download-> Windows installer -> click Download and run Composer-Setup.exe
3.	After install it, go to command prompt and write: composer

To install GitHub
1.	https://git-scm.com/downloads

To install Laravel Framework 5.4.36
1.	Go to the xampp/htdocs/
2.	Create a folder called Laravel
3.	Go to https://laravel.com/docs/5.7
4.	Go to command prompt, type - composer create-project --prefer-dist laravel/laravel Laravel
5.	Wait for 10-15mins for installation
6.	At command prompt, type php artisan serve to start up the Laravel server and launch the Laravel official page
7.	Copy the Laravel development server started: http://127.0.0.1:8000 and paste in on browser.  The official page of Laravel page displays
Or without cmd command
8.	Start our apache and MySql from Xampp control panel:
9.	To display the official page on browser with localhost, type localhost on browser, select laravel folder, choose public then official page display
10.	To change the content of Laravel official page – Laravel/resources/views/welcome.blade.php

To install phpunit
1.	Create a new folder name phpunit in xampp/htdocs
2.	Create a file name composer.json into the folder
{
	"require" : {
	    "phpunit/phpunit" : "dev-master"
	}
}
3.	At the command prompt, navigate to c:\xampp\htdocs\phpunit\ and type >composer require phpunit/phpunit
4.	To create an autoload file.  Add the following statement in composer.json file.

"require-dev": {
		"phpunit/phpunit": "^5.7"
	}
  
5.	Run the testing with the following command in command prompt: ./vendor/bin/phpunit.  If this command is unable to run, install the gulp.js into the folder 
