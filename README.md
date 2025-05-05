

# Contact Management Application

![Laravel](https://img.shields.io/badge/Laravel-8.x-red?style=flat-square) ![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-blue?style=flat-square) ![PHP](https://img.shields.io/badge/PHP-7.4%2B-blueviolet?style=flat-square) ![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange?style=flat-square)

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

The Contact Management Application is a web-based solution built with the Laravel framework. It allows users to create, read, update, and delete (CRUD) contacts. The application features a modern, responsive design with Bootstrap, offering a user-friendly interface for managing personal and business contacts.

## Features

- **CRUD Operations**: Create, view, update, and delete contacts.
- **Search and Filter**: Search contacts by name or email, with sorting options by name and date.
- **Responsive Design**: Fully responsive UI built with Bootstrap 4, optimized for both desktop and mobile devices.
- **Validation**: Client-side and server-side validation for form inputs.
- **Pagination**: Efficiently handles large datasets with pagination.
- **Security**: CSRF protection and form validation to ensure data integrity.

## Requirements

Before installing and running this project, ensure you have the following prerequisites:

- **PHP** 7.4 or higher
- **Composer** (latest version)
- **MySQL** 5.7 or higher
- **Node.js** 12.x or higher (for Laravel Mix)
- **NPM** 6.x or higher

## Installation

Follow the steps below to set up the project on your local machine:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/contact-management-app.git
   cd contact-management-app
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install
   ```

3. **Set up the environment:**

   Copy the `.env.example` file to `.env` and configure your database and other environment variables.

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

6. **Compile assets:**

   ```bash
   npm run dev
   ```

7. **Serve the application:**

   ```bash
   php artisan serve
   ```

   The application should now be running at `http://localhost:8000`.

## Configuration

Ensure your `.env` file contains the correct configurations:

```ini
APP_NAME=ContactManager
APP_ENV=local
APP_KEY=base64:YourGeneratedKeyHere
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## Usage

Once the application is up and running, you can perform the following actions:

1. **Create a Contact:** Navigate to `/contacts/create` to add a new contact.
2. **View Contacts:** Go to `/contacts` to view a list of all contacts with options to sort and search.
3. **Edit a Contact:** Click the "Edit" button next to a contact in the list to update its information.
4. **Delete a Contact:** Click the "Delete" button next to a contact to remove it from the database.

## Project Structure

Here’s an overview of the project’s directory structure:

```bash
contact-management-app/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── ContactController.php
│   │   └── Requests/
│   │       └── ContactRequest.php
│   └── Models/
│       └── Contact.php
│
├── resources/
│   ├── views/
│   │   ├── contacts/
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
│   │   │   ├── index.blade.php
│   │   │   ├── show.blade.php
│   │   └── layouts/
│   │       └── app.blade.php
│   └── css/
│       └── custom.css
│
├── routes/
│   └── web.php
│
└── public/
    ├── css/
    └── js/
```

## Contributing

Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature/your-feature`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or feedback, please contact:

- **Name:** Minhazul Mahmud
- **Email:** minhaz.oj@gmail.com
- **LinkedIn:** [Minhazul Mahmud](https://www.linkedin.com/in/minhazul-mahmud-71702a29a/)
- **GitHub:** [Minhazul Mahmud](https://github.com/MinhaulMahmud)
