## BookReview
BookReview is a web application that allows users to read and write reviews about books. This project is built using the Laravel 10 framework, providing a simple and intuitive interface for interacting with the book and review database.

## Main Features
- **Read Reviews**: Users can read reviews and ratings about books from other users.
- **Write Reviews**: Sign in/Sign up to write reviews and rate books.
- **Search for Books**: Search for books based on title, author, or genre.
- **User-Friendly Interface**: Simple and easy to use user interface.
## Installation
To start, clone the repository and install the dependencies.
git clone https://github.com/ntd1753/bookReview.git
cd bookreview
composer install
npm install
npm run dev
Then, create a .env file from the .env.example and configure your database.
cp .env.example .env
Run migrations and seeders to set up the database.
php artisan migrate --seed
Finally, launch the server.
php artisan serve
## Technologies Used
Laravel 10: PHP framework for web application development.
MySQL: Database management system.
Bootstrap: CSS framework for user interface design.
##  Contribution Guide
All contributions to this project are welcome. Please create a pull request or open an issue to discuss the changes you want to make.
## Contact
For any questions, please contact at ntd1753@gmail.com
