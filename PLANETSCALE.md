# Setting Up Your Database on PlanetScale (not free 2025)

This guide will walk you through setting up your Online Service Agency database on PlanetScale, a serverless MySQL platform with a generous free tier.

## Prerequisites

1. A PlanetScale account (Sign up at [planetscale.com](https://planetscale.com))
2. Your project's SQL file (`database/main_database.sql`)
3. MySQL Workbench or similar MySQL client (optional)

## Step 1: Create PlanetScale Account

1. Visit [planetscale.com](https://planetscale.com)
2. Click "Sign Up"
3. You can sign up with:
   - GitHub account (recommended)
   - Google account
   - Email address

## Step 2: Create Database

1. Log into PlanetScale Dashboard
2. Click "New Database"
3. Configure your database:
   - Name: `online_service_agency`
   - Region: Choose closest to your users (e.g., "AWS us-east-1" for US East)
   - Plan: "Hobby" (Free tier)
4. Click "Create Database"

## Step 3: Create Database Password

1. In your database dashboard, click "Branches"
2. Select the "main" branch
3. Click "Connect"
4. Click "New password"
5. Select "Password" as authentication method
6. Save the credentials securely:
   ```
   DATABASE_URL=mysql://username:password@region.connect.psdb.cloud/database_name?ssl={"rejectUnauthorized":true}
   ```

## Step 4: Import Database Structure

### Method 1: Using PlanetScale CLI (Recommended)

1. Install PlanetScale CLI:
   ```bash
   # macOS
   brew install planetscale/tap/pscale

   # Windows (using scoop)
   scoop bucket add pscale https://github.com/planetscale/scoop-bucket.git
   scoop install pscale
   ```

2. Login to PlanetScale:
   ```bash
   pscale auth login
   ```

3. Connect to your database:
   ```bash
   pscale shell online_service_agency main
   ```

4. Import the database:
   ```bash
   source path/to/main_database.sql
   ```

### Method 2: Using MySQL Client

1. Install MySQL client or MySQL Workbench
2. Get connection details from PlanetScale dashboard
3. Connect using the provided credentials
4. Import `main_database.sql`

## Step 5: Configure Environment Variables

Add these to your Netlify environment variables:

```
DB_HOST=YOUR_HOST.connect.psdb.cloud
DB_USER=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
DB_NAME=online_service_agency
```

Replace YOUR_HOST, YOUR_USERNAME, and YOUR_PASSWORD with values from PlanetScale dashboard.

## Step 6: Update Database Connection

Your `config/db_connection.php` will automatically use these environment variables.

## Step 7: Verify Connection

1. Deploy your site on Netlify
2. Visit your site's URL
3. Try to:
   - Register a new user
   - Log in
   - Add items to cart
   - Complete a transaction

## Database Management

### Viewing Data

1. PlanetScale Console:
   - Go to your database in PlanetScale
   - Click "Console"
   - Run SQL queries directly

2. MySQL Client:
   - Use connection details from PlanetScale
   - Connect using your preferred MySQL client
   - View and manage data

### Backup and Restore

PlanetScale automatically:
- Creates daily backups
- Keeps backups for 7 days (free tier)
- Allows point-in-time recovery

### Monitoring

1. In PlanetScale dashboard:
   - Monitor connections
   - View query statistics
   - Check database size

2. Set up alerts for:
   - High CPU usage
   - Storage limits
   - Connection limits

## Security Best Practices

1. **Password Management**
   - Regularly rotate database passwords
   - Use environment variables
   - Never commit credentials

2. **Access Control**
   - Use branch-specific passwords
   - Limit database access
   - Monitor connection logs

3. **SSL/TLS**
   - PlanetScale enforces SSL
   - Keep SSL certificates updated
   - Use secure connection strings

## Troubleshooting

### Common Issues

1. **Connection Errors**
   - Verify credentials
   - Check SSL settings
   - Confirm IP allowlist

2. **Import Issues**
   - Check SQL syntax
   - Verify file encoding
   - Split large files

3. **Performance Issues**
   - Monitor query performance
   - Use indexes appropriately
   - Optimize queries

### Getting Help

1. Check [PlanetScale Documentation](https://planetscale.com/docs)
2. Visit [PlanetScale Support](https://planetscale.com/support)
3. Join [PlanetScale Discord](https://discord.com/invite/planetscale)

## Free Tier Limits

PlanetScale Hobby tier includes:
- 5GB storage
- 1 billion row reads/month
- 10 million row writes/month
- 1,000 connections/day
- Automatic daily backups

## Upgrading

If you need more resources:
1. Visit Billing in dashboard
2. Compare available plans
3. Upgrade as needed

## Additional Resources

- [PlanetScale Documentation](https://planetscale.com/docs)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [Database Best Practices](https://planetscale.com/blog/database-best-practices)

## Support

For additional support:
1. Open an issue in the repository
2. Contact the development team
3. Consult PlanetScale support
