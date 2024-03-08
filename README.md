Project Download and Installation Guide
Prerequisites
1.	PHP version: 8.1.10
2.	MySQL version: 8.0.30
3.	Composer installed
Step 1: Download the Project
•	Open your web browser and navigate to https://github.com/saiful199324/docTime-app.
•	Click on the "Code" button and choose the "Download ZIP" option.
•	Extract the downloaded ZIP file to your desired location.
Step 2: Database Setup
1.	Navigate to the db folder within the extracted project.
2.	Locate the doctime.sql file.
3.	Import the doctime.sql file into your MySQL database using phpMyAdmin or any MySQL database management tool.
Step 3: Environment Configuration
1.	In the root of the extracted project, find or create a file named .env.
2.	Open the .env file with a text editor.
3.	Set the following configurations:
APP_NAME=doctime-app
DB_DATABASE=doctime 
CACHE_DRIVER=redis

Step 4: Install Dependencies
1.	Make sure Composer is installed on your machine.
2.	Navigate to the project directory.
3.	Run composer update.
Step 5: Generate Laravel Key
1.	Run the command to generate a new application key:
php artisan key:generate

Step 6: Autoload and Optimize
1.	Run the following commands:
2.	composer dump-autoload
3.	php artisan optimize
Step 7: Start the Development Server
1.	Run the command:
php artisan serve

Step 8: Access the Application
1.	Open your web browser.
2.	Enter either http://127.0.0.1:8000/people or http://localhost:8000/people in the address bar.
Step 9: Explore the Application
You should now see the Customer List Data Table in your browser.
Additional Notes
•	Ensure that Redis is properly installed and configured.
•	Confirm that PHP, MySQL, and Redis extensions are enabled.
Troubleshooting
•	If any issues arise during the installation, refer to the Laravel documentation or the GitHub repository for assistance.
•	Check the Laravel and PHP compatibility.

Happy Coding!
Feel free to customize the documentation based on your specific project requirements and add any additional steps or information relevant to your application.
