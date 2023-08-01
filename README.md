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

<div style="display: flex; flex-wrap: wrap;">
<img src="https://img.icons8.com/?size=50&id=hUvxmdu7Rloj&format=png" title="Laravel" alt="Laravel" width="50" height="50" />
<img src="https://avatars.githubusercontent.com/u/51960834?s=200&v=4" title="Livewire" alt="Livewire" width="50" height="50" />
<img src="https://pestphp.com/www/assets/logo.svg" title="Pest" alt="Pest" width="100" height="50" />
<img src="https://img.icons8.com/?size=512&id=ldAV1F3sx1VI&format=png" title="SQL Lite" alt="SQL Lite" width="50" height="50" />
<img src="https://img.icons8.com/color/48/000000/tailwindcss.png" title="TailwindCSS" alt="TailwindCSS" width="50" height="50" />
</div>

## Installation

To install User Link, follow these steps:

1. Clone the repository from GitHub:

```bash copy
git clone https://github.com/avintimilsina/user-management.git
cd user-management
```

2. Install the required dependencies using Composer:

```bash copy
composer install
```

3. Set up the environment file:

```bash copy
cp .env.example .env
```

4. Create the database and set its credentials in the `.env` file.
5. . Run the migrations and seed the database:

```bash copy
php artisan migrate --seed
```

6. Start the development server:

```bash copy
php artisan serve
```

7. Start Vite development server:

```bash copy
npm run dev
```

Now, the User Link application should be up and running at `http://localhost:8000`.

## Running Tests

User Link comes with a comprehensive test suite written using Pest to ensure the reliability and stability of the software. To run the tests, execute the following command:

```bash copy
./vendor/bin/pest
```

The Pest framework will handle the rest and display the test results along with the coverage report, ensuring a 100% coverage of the feature tests.

## Contributing

We welcome contributions from the community to enhance and improve User Link. If you find any bugs, issues, or have new feature suggestions, please open an issue or submit a pull request. We appreciate your valuable input.

## License

User Link is open-source software licensed under the [MIT License](./LICENSE.txt).

---

Thank you for choosing User Link for your User Management needs! If you have any questions or need assistance, please feel free to reach out to our support team at support@userlink.com. Happy managing!
