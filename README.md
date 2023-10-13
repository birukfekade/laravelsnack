Laravel Snack API Integration
This project demonstrates the integration of an external snack API into a Laravel application. The goal is to fetch snack data from the API, store it locally, and display it to users.

Project Tasks
Task 1: API Wrapper
Created a Laravel service (SnackApiService.php) to connect to an external snack API.
Implemented methods to retrieve snack data from the API and handle errors gracefully.
Task 2: Scheduled Job
Created a scheduled job (FetchSnacksJob.php) in Laravel to run every hour.
Used the API wrapper to fetch snack data and stored it locally in the database.
Task 3: View Component
Created a Livewire component (SnackComponent.php) to display stored snack data.
Designed the component's Blade view (snack-component.blade.php) to present snacks in an organized manner.
Implemented dynamic features such as looping through snack data and displaying snack details.
Bonus Points Tasks:
Use of Facades: Utilized Laravel's Http facade in the API wrapper.
Use of Livewire: Implemented Livewire components for dynamic user interactions.
Write a Unit Test for the Wrapper: Created unit tests to ensure the reliability of the API wrapper.
Wrapper Configuration: Added a configuration file for the API URL and token.
How to Use
Clone the repository: git clone https://github.com/birukfekade/laravelsnack.git
Install dependencies: composer install
Set up your environment variables in the .env file.
Migrate the database: php artisan migrate
Run the Laravel development server: php artisan serve
Access the application in your browser: http://localhost:8000/snacks
Additional Notes
Ensure that you have proper internet connectivity to access the external snack API.
Make sure to configure your database connection settings in the .env file.
