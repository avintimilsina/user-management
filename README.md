<!-- PROJECT LOGO -->
<br />
<div align="center">
    <img src="public\logo.svg" alt="Logo" width="160" height="80"/>
    <br/>
    <br/>

[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/for-you.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/powered-by-electricity.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/check-it-out.svg)](https://forthebadge.com)

</div>

# User Link - User Management Software

User Link is a powerful User Management software built using Laravel and Livewire, allowing you to easily manage user details, view user information, and edit user data with efficiency and ease. The software comes with a comprehensive test suite written using Pest, ensuring a 100% coverage of the feature tests to ensure reliable functionality.

## Features

-   Add new users to the system with relevant details.
-   View user information in a clear and organized manner.
-   Edit user information and keep data up-to-date.
-   Delete users from the system.

## Technologies Used

-   Laravel: A popular PHP web application framework, providing a robust foundation for building web applications.
-   Livewire: A full-stack framework for Laravel that enables real-time, dynamic interactions with the server through simple PHP components.
-   Pest: A concise PHP testing framework with an elegant syntax and outstanding developer experience.
-   Tailwind CSS: A utility-first CSS framework for rapidly building custom user interfaces.
-   Sqlite: A lightweight, serverless database engine that is quick and easy to set up.

## Installation

To install User Link, follow these steps:

1. Clone the repository from GitHub:

```bash
git clone https://github.com/avintimilsina/user-management.git
cd user-management
```

2. Install the required dependencies using Composer:

```bash
composer install
```

3. Set up the environment file:

```bash
cp .env.example .env
```

4. Create the database and set its credentials in the `.env` file.
5. . Run the migrations and seed the database:

```bash
php artisan migrate --seed
```

6. Start the development server:

```bash
php artisan serve
```

7. Start Vite development server:

```bash
npm run dev
```

Now, the User Link application should be up and running at `http://localhost:8000`.

## Running Tests

User Link comes with a comprehensive test suite written using Pest to ensure the reliability and stability of the software. To run the tests, execute the following command:

```bash
./vendor/bin/pest
```

The Pest framework will handle the rest and display the test results along with the coverage report, ensuring a 100% coverage of the feature tests.

## Contributing

We welcome contributions from the community to enhance and improve User Link. If you find any bugs, issues, or have new feature suggestions, please open an issue or submit a pull request. We appreciate your valuable input.

## License

User Link is open-source software licensed under the [MIT License](./LICENSE.txt).

---

Thank you for choosing User Link for your User Management needs! If you have any questions or need assistance, please feel free to reach out to our support team at support@userlink.com. Happy managing!
