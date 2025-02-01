# Deploying Online Service Agency on Vercel

This guide provides detailed instructions for deploying your PHP-based Online Service Agency project on Vercel, including database configuration and environment setup.

## Prerequisites

1. GitHub account with your project repository
2. Vercel account (Sign up at [vercel.com](https://vercel.com))
3. Node.js installed on your computer
4. Vercel CLI (optional but recommended)

## Step 1: Prepare Your Project

1. **Install Vercel CLI** (Optional but recommended)
   ```bash
   npm install -g vercel
   ```

2. **Create vercel.json**
   Create a new file `vercel.json` in your project root:
   ```json
   {
     "version": 2,
     "functions": {
       "api/*.php": {
         "runtime": "vercel-php@0.6.0"
       }
     },
     "routes": [
       { "src": "/(.*)",  "dest": "/api/index.php" }
     ],
     "env": {
       "DB_HOST": "@db_host",
       "DB_USER": "@db_user",
       "DB_PASSWORD": "@db_password",
       "DB_NAME": "@db_name"
     }
   }
   ```

3. **Restructure Project for Vercel**
   Create an `api` directory and move PHP files:
   ```
   project/
   ├── api/
   │   ├── index.php
   │   ├── login.php
   │   ├── signup.php
   │   └── ...
   ├── public/
   │   ├── assets/
   │   │   ├── css/
   │   │   ├── js/
   │   │   └── img/
   │   └── ...
   ├── config/
   │   └── db_connection.php
   ├── vercel.json
   └── composer.json
   ```

4. **Create composer.json**
   ```json
   {
     "name": "online-service-agency",
     "description": "Online Service Agency Platform",
     "require": {
       "php": "^8.1",
       "ext-mysqli": "*"
     }
   }
   ```

## Step 2: Database Setup

### Option 1: Using PlanetScale (Recommended)

1. Follow the instructions in PLANETSCALE.md to set up your database
2. Save your connection details for later use

### Option 2: Using Other MySQL Providers

1. Set up a MySQL database on any cloud provider
2. Ensure the provider supports:
   - Remote connections
   - SSL/TLS encryption
   - Adequate storage for your needs

### Import Database

1. Locate your SQL file:
   ```
   database/main_database.sql
   ```

2. Import using your chosen method:
   - PlanetScale CLI
   - MySQL Workbench
   - phpMyAdmin
   - Command line

## Step 3: Deploy to Vercel

### Method 1: Using Vercel CLI

1. **Login to Vercel**
   ```bash
   vercel login
   ```

2. **Deploy Project**
   ```bash
   vercel
   ```

3. **Follow the prompts**:
   - Select scope (your account)
   - Set up project name
   - Confirm deployment settings

### Method 2: Using Vercel Dashboard

1. Go to [vercel.com](https://vercel.com)
2. Click "New Project"
3. Import your GitHub repository
4. Configure project:
   - Framework Preset: Other
   - Build Command: None
   - Output Directory: public
   - Install Command: None

## Step 4: Environment Configuration

1. **Set Environment Variables**
   Go to Project Settings > Environment Variables:
   ```
   DB_HOST=your_database_host
   DB_USER=your_database_user
   DB_PASSWORD=your_database_password
   DB_NAME=online_service_agency
   ```

2. **Configure Domains**
   - Go to Settings > Domains
   - Add your custom domain
   - Follow DNS configuration instructions

## Step 5: Post-Deployment Setup

1. **Run Database Setup**
   - Visit `your-site.vercel.app/api/setup-db.php`
   - Follow the setup wizard
   - Verify database connection

2. **Default Admin Account**
   ```
   Email: admin@admin.com
   Password: admin123
   ```
   Change these credentials immediately!

## Step 6: Verify Installation

Test these features:
1. User registration
2. User login
3. Admin login
4. Service browsing
5. Cart functionality
6. Checkout process
7. Profile management

## Performance Optimization

1. **Enable Caching**
   ```php
   // Add to api/index.php
   header('Cache-Control: max-age=3600');
   ```

2. **Optimize Assets**
   - Compress images
   - Minify CSS/JS
   - Use CDN for static assets

3. **Database Optimization**
   - Add proper indexes
   - Optimize queries
   - Use connection pooling

## Security Measures

1. **SSL/TLS**
   - Vercel provides automatic HTTPS
   - Force HTTPS in your application

2. **Environment Variables**
   - Use Vercel's encrypted environment variables
   - Never commit sensitive data

3. **Security Headers**
   ```php
   header("X-Frame-Options: DENY");
   header("X-XSS-Protection: 1; mode=block");
   header("X-Content-Type-Options: nosniff");
   ```

## Monitoring and Maintenance

1. **Vercel Analytics**
   - Enable in project settings
   - Monitor performance
   - Track usage

2. **Logs**
   - View deployment logs
   - Monitor function execution
   - Track errors

3. **Updates**
   - Keep dependencies updated
   - Monitor security advisories
   - Update PHP version as needed

## Troubleshooting

### Common Issues

1. **500 Internal Server Error**
   - Check environment variables
   - Verify database connection
   - Review PHP logs

2. **Database Connection Issues**
   - Verify credentials
   - Check IP allowlist
   - Test connection string

3. **Asset Loading Problems**
   - Check file paths
   - Verify CORS settings
   - Clear browser cache

### Getting Help

1. Check [Vercel Documentation](https://vercel.com/docs)
2. Visit [Vercel Support](https://vercel.com/support)
3. Join [Vercel Discord](https://vercel.com/discord)

## Scaling

1. **Automatic Scaling**
   - Vercel handles scaling automatically
   - No configuration needed
   - Serverless architecture

2. **Database Scaling**
   - Monitor database usage
   - Upgrade plan as needed
   - Consider sharding for large datasets

## Additional Resources

- [Vercel PHP Runtime](https://github.com/vercel/vercel-php)
- [Vercel Documentation](https://vercel.com/docs)
- [PHP on Vercel Guide](https://vercel.com/guides/php)

## Support

For project-specific issues:
1. Open an issue in the repository
2. Contact the development team
3. Check documentation

For Vercel-related issues:
1. Consult Vercel documentation
2. Contact Vercel support
3. Check Vercel status page
