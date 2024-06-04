# Hugo Suárez Portfolio

Welcome to the repository for [Hugo Suárez's Portfolio](https://hugosuarez.com), a personal website I built using the Laravel Framework.

## Table of Contents

- [Hugo Suárez Portfolio](#hugo-suárez-portfolio)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Features](#features)
  - [Installation](#installation)
    - [Local Installation](#local-installation)
    - [Docker Installation](#docker-installation)
  - [Usage](#usage)
  - [Contributing](#contributing)
  - [License](#license)
  - [Contact](#contact)

## Introduction

This is the source code for my personal portfolio website. The site is built using the Laravel Framework and showcases my work, skills, and projects. You can visit the live site at [hugosuarez.com](https://hugosuarez.com).

## Features

- **Responsive Design**: The website is fully responsive and works on all devices.
- **Project Showcase**: Display of personal and professional projects with descriptions and links.
- **Contact Form**: A functional contact form to get in touch with me directly.

## Installation

You can set up the project locally or using Docker.

### Local Installation

To set up the project locally, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/HugoSuarezJr/hugosuarez-portfolio.git
    cd hugosuarez-portfolio
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Copy the `.env.example` file to `.env` and set your environment variables:**
    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```

5. **Set up the database:**
    - Create a new MySQL database.
    - Update the `.env` file with your database credentials.
    - Run the migrations:
      ```bash
      php artisan migrate
      ```

6. **Serve the application:**
    ```bash
    php artisan serve
    ```

Your application should now be running on [http://localhost:8000](http://localhost:8000).

### Docker Installation

To set up the project using Docker, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/HugoSuarezJr/hugosuarez-portfolio.git
    cd hugosuarez-portfolio
    ```

2. **Copy the `.env.example` file to `.env` and set your environment variables:**
    ```bash
    cp .env.example .env
    ```

3. **Build and start the Docker containers:**
    ```bash
    docker-compose up -d
    ```

4. **Install dependencies inside the Docker container:**
    ```bash
    docker-compose exec app composer install
    docker-compose exec app npm install
    docker-compose exec app npm run dev
    ```

5. **Generate the application key:**
    ```bash
    docker-compose exec app php artisan key:generate
    ```

6. **Run the migrations:**
    ```bash
    docker-compose exec app php artisan migrate
    ```

Your application should now be running on [http://localhost:8000](http://localhost:8000).

## Usage

You can navigate through the website to view my projects, learn more about me, and use the contact form to reach out. The website includes the following sections:

- **Home**: An introduction and overview of who I am.
- **Projects**: A showcase of my work, including personal and professional projects.
- **About**: More detailed information about my background, skills, and experience.
- **Contact**: A form to send me messages directly.

## Contributing

If you wish to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature/your-feature-name`).
6. Open a pull request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

If you have any questions, feel free to reach out:

- Website: [hugosuarez.com](https://hugosuarez.com)
- Email: husuarezjr@gmail.com
- LinkedIn: [Hugo Suárez](https://www.linkedin.com/in/hugosuarezjr)

---

Thank you for visiting my portfolio!

