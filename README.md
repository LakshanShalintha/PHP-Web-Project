# PHP-Web-Project

This project is a web application built with Laravel.

## Installation

1. Clone the repository:

    ```
    git clone https://github.com/D-Binara/PHP-Web-Project.git
    ```

2. Navigate to the Travel_Web directory:

    ```
    cd Travel_Web
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

8. Install npm dependencies:

    ```
    npm install
    ```

9. Compile assets:

    ```
    npm run dev
    ```

10. Start the server:

    ```
    php artisan serve
    ```

The project should now be running on `http://localhost:8000`.

---
