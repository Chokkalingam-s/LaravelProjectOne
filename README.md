# Laravel CRUD Application

This project is a basic Laravel CRUD (Create, Read, Update, Delete) application for managing products. It serves as a demonstration of foundational CRUD operations in Laravel and PHP with a MySQL database. The application includes a product landing page, detailed product views, and functionalities to add, edit, delete, and list products.

## Table of Contents

- [Features](#features)
- [Technologies](#technologies)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)
- [Contributing](#contributing)
- [Contact](#contact)


## Features

- **Product Listing:** View all products in a paginated format.
- **Product Details:** Click on a product to see a detailed view.
- **Add Product:** Create new products with name, description, price, and image.
- **Edit Product:** Update existing product details.
- **Delete Product:** Remove products from the database.
- **Search Functionality:** Search for products by name or description.

## Technologies

- **Backend:** Laravel 11.x
- **Frontend:** Blade,Bootstrap 5.O, CSS
- **Database:** MySQL
- **Other:** Composer, NPM

## Installation

### Prerequisites

- **PHP:** >= 8.0
- **Composer:** Latest version
- **MySQL:** Latest version
- **Node.js and npm:** Latest version

### Steps

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/Chokkalingam-s/crud-app.git
    cd crud-app
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment Variables:**

    - Duplicate `.env.example` and rename it to `.env`.
    - Configure your database and other settings in the `.env` file.

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

4. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the Database (Optional):**

    ```bash
    php artisan db:seed
    ```

7. **Compile Assets:**

    ```bash
    npm run dev
    ```

8. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

    The application should now be accessible at `http://localhost:8000`.

## Usage

### Creating a Product

1. Navigate to the "Add Product" page from the navigation bar.
2. Fill in the product details and submit the form.

### Editing a Product

1. Click on the "Edit" button next to the product you want to update.
2. Modify the details and save the changes.

### Deleting a Product

1. Click on the "Delete" button next to the product you wish to remove.
2. Confirm the deletion in the popup.

### Viewing Product Details

1. Click on a product name to view detailed information.




## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/your-feature`.
5. Submit a pull request.

## Contact

- **Name:** Chokkalingam S
- **Email:** [your-email@example.com](mailto:chok22017.it@rmkec.ac.in)
- **LinkedIn:** [Your LinkedIn Profile](https://www.linkedin.com/in/chokkalingam2005/)

  

