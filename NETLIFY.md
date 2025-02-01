# Deploying Online Service Agency on Netlify

This guide provides step-by-step instructions for deploying the Online Service Agency project on Netlify with automatic database setup.

## Prerequisites

1. GitHub account with this repository forked/cloned
2. Netlify account (Sign up at [netlify.com](https://www.netlify.com))
3. MySQL database access (local or cloud)

## Step 1: Database Setup

### Option A: Using Your Existing Database
1. Navigate to `database` directory
2. Find `main_database.sql`
3. Import this file to your MySQL database:
   ```sql
   mysql -u your_username -p your_database_name < main_database.sql
   ```

### Option B: Using a Cloud Database (Recommended)
1. Sign up for a free MySQL cloud service (PlanetScale recommended)
2. Create a new database
3. Import the database structure:
   - Download `database/main_database.sql`
   - Use the cloud provider's import tool to import the SQL file
   - Or use MySQL Workbench to connect and import

## Step 2: Deploy to Netlify

1. **Connect Your Repository**
   - Log in to Netlify
   - Click "New site from Git"
   - Choose GitHub
   - Select your repository

2. **Configure Build Settings**
   - Branch to deploy: `main` (or your default branch)
   - Base directory: (leave empty)
   - Build command: (leave empty)
   - Publish directory: `public`

3. **Set Environment Variables**
   Go to Site settings > Build & deploy > Environment:
   ```
   DB_HOST=your_database_host
   DB_USER=your_database_user
   DB_PASSWORD=your_database_password
   DB_NAME=online_service_agency
   ```

## Step 3: Automatic Database Configuration

1. **Create Database Tables**
   - Go to your deployed site's URL
   - Add `/setup-db.php` to the URL
   - This will automatically:
     - Create required tables
     - Import initial data
     - Set up admin account

2. **Default Admin Credentials**
   ```
   Email: admin@admin.com
   Password: admin123
   ```
   IMPORTANT: Change these credentials immediately after first login!

## Step 4: Verify Installation

1. **Check Core Features**
   - Visit your Netlify site URL
   - Try to:
     - Register a new user account
     - Log in as admin
     - View services
     - Add items to cart

2. **Verify File Structure**
   Your project should have this structure on Netlify:
   ```
   public/
   ├── assets/
   │   ├── css/
   │   ├── js/
   │   └── img/
   ├── index.php
   └── ...
   src/
   ├── login.php
   ├── signup.php
   └── ...
   config/
   └── db_connection.php
   ```

## Step 5: Post-Deployment Tasks

1. **Security Measures**
   - Change admin password
   - Set up SSL (automatically handled by Netlify)
   - Configure security headers (already set in netlify.toml)

2. **Testing**
   Test these critical functions:
   - User registration
   - User login
   - Admin login
   - Service browsing
   - Cart functionality
   - Checkout process
   - Profile management

## Troubleshooting

### Common Issues

1. **Database Connection Errors**
   - Verify environment variables in Netlify dashboard
   - Check if database accepts remote connections
   - Confirm IP whitelist settings

2. **Missing Assets**
   - Verify paths in HTML/PHP files
   - Check if files are in correct directories
   - Clear Netlify cache and redeploy

3. **PHP Errors**
   - Check Netlify function logs
   - Verify PHP version in netlify.toml
   - Review error logs in Netlify dashboard

### Getting Help

If you encounter issues:
1. Check Netlify deployment logs
2. Review database connection status
3. Create an issue in the GitHub repository
4. Contact support team

## Maintenance

1. **Regular Updates**
   - Keep PHP version updated in netlify.toml
   - Maintain database backups
   - Update security certificates

2. **Monitoring**
   - Set up Netlify notifications
   - Monitor database performance
   - Track error logs

## Additional Resources

- [Netlify Documentation](https://docs.netlify.com)
- [PHP on Netlify Guide](https://docs.netlify.com/configure-builds/common-configurations/php/)
- [MySQL Documentation](https://dev.mysql.com/doc/)

## Support

For additional support:
1. Open an issue in this repository
2. Contact the development team
3. Check the FAQ section in the main README
