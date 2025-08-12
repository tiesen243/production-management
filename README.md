# Production Management

## Prerequisites

- [Docker](https://docs.docker.com/get-docker/) installed
- [Docker Compose](https://docs.docker.com/compose/install/) installed
- [Composer](https://getcomposer.org/download/) installed (for PHP dependencies)
- [Node.js](https://nodejs.org/en/download/) and [npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) installed (optional, for development tools)

## Setup

1. **Clone the repository**

   ```bash
   git clone git@github.com:tiesen243/production-management.git
   cd production-management
   ```

2. **Install dependencies**

   ```bash
   # Install Composer dependencies
   composer install

   # Install Prettier and prettier-plugin-php for PHP code formatting (optional)
   npm install
   ```

3. **Create environment file**

   ```bash
   cp .env.example .env
   ```

4. **Configure environment variables**
   Edit `.env` file and set your database credentials:

   ```env
   DB_NAME=your_database_name
   DB_USER=your_username
   DB_PASSWORD=your_secure_password
   ```

5. **Start the containers**

   ```bash
   # For development
   composer dev:up

   # For production
   composer prod:up
   ```

6. **Stopping the containers**

   ```bash
   # For development
   composer dev:down

   # For production
   composer prod:down
   ```

## Docker Services

### Web Server (Apache + PHP 8.4)

- **Port**: 8080
- **Document Root**: `/var/www/html` (mapped to the local project root in development mode only)
- **PHP Extensions**: Common extensions pre-installed

### Database (MySQL 9.4.0)

- **Port**: 3306 (internal)
- **Data Persistence**: `db_data` volume
- **Configuration**: Uses environment variables from `.env`

### phpMyAdmin

- **Port**: 8081
- **Purpose**: Web-based MySQL administration
- **Access Credentials**:
  - Server: `db`
  - Username: Value from `DB_USER` in `.env`
  - Password: Value from `DB_PASSWORD` in `.env`

## License

This project is open source and available under the [MIT License](LICENSE).
