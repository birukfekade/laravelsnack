
        <h1>Laravel Snack API Integration</h1>

        <h2>Project Tasks</h2>

        <h3>Task 1: API Wrapper</h3>
        <ul>
            <li>Created a Laravel service (<code>SnackApiService.php</code>) to connect to an external snack API.</li>
            <li>Implemented methods to retrieve snack data from the API and handle errors gracefully.</li>
        </ul>

        <h3>Task 2: Scheduled Job</h3>
        <ul>
            <li>Created a scheduled job (<code>FetchSnacksJob.php</code>) in Laravel to run every hour.</li>
            <li>Used the API wrapper to fetch snack data and stored it locally in the database.</li>
        </ul>

        <h3>Task 3: View Component</h3>
        <ul>
            <li>Created a Livewire component (<code>SnackComponent.php</code>) to display stored snack data.</li>
            <li>Designed the component's Blade view (<code>snack-component.blade.php</code>) to present snacks in an
                organized manner.</li>
            <li>Implemented dynamic features such as looping through snack data and displaying snack details.</li>
        </ul>

        <h3>Bonus Points Tasks</h3>
        <ul>
            <li><strong>Use of Facades:</strong> Utilized Laravel's Http facade in the API wrapper.</li>
            <li><strong>Use of Livewire:</strong> Implemented Livewire components for dynamic user interactions.</li>
            <li><strong>Write a Unit Test for the Wrapper:</strong> Created unit tests to ensure the reliability of the API
                wrapper.</li>
            <li><strong>Wrapper Configuration:</strong> Added a configuration file for the API URL and token.</li>
        </ul>

        <h2>How to Use</h2>
        <ol>
            <li>Clone the repository: <code>git clone &lt;https://github.com/birukfekade/laravelsnack.git&gt;</code></li>
            <li>Install dependencies: <code>composer install</code></li>
            <li>Set up your environment variables in the <code>.env</code> file.</li>
            <li>Migrate the database: <code>php artisan migrate</code></li>
            <li>Run the Laravel development server: <code>php artisan serve</code></li>
            <li>Access the application in your browser: <code>http://localhost:8000/snacks</code></li>
        </ol>

        <h2>Additional Notes</h2>
        <ul>
            <li>Ensure that you have proper internet connectivity to access the external snack API.</li>
            <li>Make sure to configure your database connection settings in the <code>.env</code> file.</li>
        </ul>
