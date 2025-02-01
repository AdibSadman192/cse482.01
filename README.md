# Online Service Agency

A comprehensive web application for managing and booking various online services.

## Features

- User Authentication (Login/Signup)
- Admin Dashboard
- Service Packages Management
- Shopping Cart
- Contact Management
- User Profile Management
- Chatbot Integration

## Tech Stack

- PHP
- MySQL
- HTML/CSS
- Bootstrap
- JavaScript

## Project Structure

```
.
├── config/         # Configuration files
├── database/       # Database files and migrations
├── public/         # Publicly accessible files
├── src/           # PHP source files
└── docs/          # Documentation
```

## Setup Instructions

1. Clone the repository
2. Import `database/main_database.sql` to your MySQL server
3. Configure database connection in `config/db_connection.php`
4. Start your PHP server:
   ```bash
   php -S localhost:8000
   ```
5. Access the application at `http://localhost:8000`

## Deployment

### Vercel Deployment

1. Install Vercel CLI:
   ```bash
   npm i -g vercel
   ```

2. Configure `vercel.json`:
   ```json
   {
     "version": 2,
     "functions": {
       "api/*.php": {
         "runtime": "vercel-php@0.6.0"
       }
     }
   }
   ```

3. Deploy:
   ```bash
   vercel
   ```

### Netlify Deployment

1. Install Netlify CLI:
   ```bash
   npm i -g netlify-cli
   ```

2. Create `netlify.toml`:
   ```toml
   [build]
     functions = "functions"
     publish = "public"
   ```

3. Deploy:
   ```bash
   netlify deploy
   ```

### Deploying on Netlify

Follow these steps to deploy the project on Netlify:

### Prerequisites
1. A GitHub account with your project repository
2. A Netlify account (you can sign up at [netlify.com](https://www.netlify.com) using your GitHub account)
3. Your project must be properly structured with:
   - All PHP files in the `src` directory
   - Static assets in the `public` directory
   - Database configuration in the `config` directory

### Deployment Steps

1. **Prepare Your Repository**
   - Ensure all your changes are committed to GitHub
   - Your repository should have an `index.php` file in the `public` directory

2. **Configure Netlify**
   - Log in to your Netlify account
   - Click "New site from Git"
   - Choose GitHub as your Git provider
   - Select your repository
   - Configure build settings:
     - Build command: Leave empty (for PHP projects)
     - Publish directory: `public`
     - Click "Deploy site"

3. **Set Up Environment Variables**
   - Go to Site settings > Build & deploy > Environment
   - Add the following variables:
     ```
     DB_HOST=your_database_host
     DB_USER=your_database_user
     DB_PASSWORD=your_database_password
     DB_NAME=your_database_name
     ```

4. **Configure PHP Runtime**
   - Create a `netlify.toml` file in your project root:
     ```toml
     [build]
     publish = "public"
     command = ""

     [build.environment]
     PHP_VERSION = "8.1"

     [[redirects]]
     from = "/*"
     to = "/index.php"
     status = 200
     force = true
     ```

5. **Database Setup**
   - Use a cloud database service (e.g., ClearDB, JawsDB)
   - Update `config/db_connection.php` to use environment variables:
     ```php
     $host = getenv('DB_HOST');
     $user = getenv('DB_USER');
     $pass = getenv('DB_PASSWORD');
     $db = getenv('DB_NAME');
     ```

6. **Domain Configuration (Optional)**
   - Go to Domain settings in your Netlify dashboard
   - Click "Add custom domain"
   - Follow the instructions to configure your domain

### Post-Deployment

1. **Verify Your Site**
   - Check if your site is accessible via the Netlify URL
   - Test all major functionalities
   - Verify database connections
   - Check if all assets are loading properly

2. **Monitor Your Site**
   - Use Netlify's deploy logs to troubleshoot issues
   - Monitor your site's performance in the Analytics section
   - Set up deploy notifications in Site settings > Build & deploy > Deploy notifications

3. **Common Issues and Solutions**
   - If assets aren't loading, check paths in your HTML/PHP files
   - For database connection issues, verify environment variables
   - If pages aren't routing correctly, check the `netlify.toml` configuration

### Security Considerations

1. **Environment Variables**
   - Never commit sensitive information to your repository
   - Use Netlify's environment variables for all credentials
   - Regularly rotate database passwords

2. **SSL/HTTPS**
   - Netlify provides free SSL certificates
   - Force HTTPS by enabling it in your site settings

3. **Database Security**
   - Use strong passwords
   - Configure database firewall rules
   - Regularly backup your database

### Maintenance

1. **Updates**
   - Regularly update your PHP version
   - Keep your dependencies up to date
   - Monitor Netlify's status page for platform updates

2. **Backups**
   - Regularly backup your database
   - Keep local copies of your codebase
   - Use Git tags for version management

For more information and advanced configurations, visit [Netlify's documentation](https://docs.netlify.com).

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.
