# FeedTube (Work in progress)

FeedTube is a portfolio project showcasing basic functionality for managing and viewing video feeds.

## Versions

### v1.0
- Initial release with basic functionality.

## Getting Started <u>on Windows</u>

To get started with FeedTube, follow these steps:


**Note:** The versions specified for `mysql-installer-community` (step 2) and PHP (step 3) are not mandatory. They are the versions I used for this project. Using the same versions will minimize the risk of conflicts.

1. **Download and install Herd:**
    - Download the latest free version of Herd by clicking the "Download for Windows" button on the [Herd website](https://herd.laravel.com/windows).
    - Install Herd following the on-screen instructions.

2. **Download and install MySQL:**
    - Download `mysql-installer-community-8.0.39.0.msi` from the [MySQL website](https://dev.mysql.com/downloads/installer/).
    - Choose the "Full" setup type.
    - Proceed with the installation.
    - Follow the configuration wizard for MySQL Server 8.0.39 with the default settings.
        - During the "Accounts and Roles" step, set the MySQL Root Password to "root" (if you already have MySQL installed with a different password, update the `DB_PASSWORD` in `feed-tube/.env` accordingly).
    - Continue with the configuration wizard for MySQL Router 8.0.39 using the default settings.
    - Complete the configuration wizard for Samples and Examples 8.0.39 with the default settings.

3. **Set up the project server in Herd:**
    - In the PHP tab, select version 8.3 (8.3.3).
    - In the General tab, add the path to the `feed-tubeparentdirectory` directory.

4. **Set up the `feed_tube` database in MySQL Workbench 8.0:**
    - Ensure that the MySQL bin directory is in your system's `PATH` environment variable:
        - Navigate to "Search -> Edit the system environment variables -> Environment variables -> User variables for `your_username` -> Path -> Edit."
        - Confirm that "C:\Program Files\MySQL\MySQL Server 8.0\bin" is listed.
    - Run `net start MySQL80` in Command Prompt (you can close the Command Prompt afterward).
    - Open "Local instance MYSQL80." in MySQL Workbench
    - Run the following query to create the database:
      ```sql
      CREATE DATABASE feed_tube;
      ```
    - In the `feed-tube` directory, execute:
      ```bash
      php artisan migrate
      ```

5. **Access the application:**
    - Open your browser and navigate to `feed-tube.test` to start exploring the application. Make sure to keep Herd and MySQL80 are running!
