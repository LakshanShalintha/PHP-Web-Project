# PHP-Web-Project

This project is a web application built with Laravel for the backend and React.js for the frontend.

## Installation

### Backend (Laravel)

1. Clone the repository:

    ```
    git clone https://github.com/D-Binara/PHP-Web-Project.git
    ```

2. Navigate to the backend directory:

    ```
    cd backend
    ```

3. Install dependencies:

    ```
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```
    cp .env.example .env
    ```

5. Generate application key:

    ```
    php artisan key:generate
    ```

6. Configure your `.env` file with your database credentials and other settings.

7. Run database migrations:

    ```
    php artisan migrate
    ```

8. Start the backend server:

    ```
    php artisan serve
    ```

The backend should now be running on `http://localhost:8000`.

### Frontend (React.js)

1. Navigate to the frontend directory:

    ```
    cd ../frontend
    ```

2. Install dependencies:

    ```
    npm install
    ```

3. Start the development server:

    ```
    npm start
    ```

The frontend should now be running on `http://localhost:3000`.

## Usage

- Access the application frontend by visiting `http://localhost:3000` in your web browser.
- Use the provided features to interact with the application.
- For backend API endpoints, refer to the backend documentation or inspect network requests in your browser's developer tools.


<!--## License

//This project is licensed under the [License Name Here] License - see the [LICENSE.md](LICENSE.md) file for details.-->
