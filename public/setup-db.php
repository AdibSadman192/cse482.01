<?php
include "../config/db_connection.php";

function executeSQLFile($conn, $file) {
    try {
        $sql = file_get_contents($file);
        
        // Split SQL file into individual queries
        $queries = array_filter(array_map('trim', explode(';', $sql)));
        
        foreach($queries as $query) {
            if (!empty($query)) {
                if (!$conn->query($query)) {
                    throw new Exception("Error executing query: " . $conn->error);
                }
            }
        }
        return true;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

// Check if tables exist
$tableCheck = $conn->query("SHOW TABLES LIKE 'users'");
if ($tableCheck->num_rows == 0) {
    // Tables don't exist, create them
    $sqlFile = "../database/main_database.sql";
    
    if (file_exists($sqlFile)) {
        if (executeSQLFile($conn, $sqlFile)) {
            echo "<h2>Database setup completed successfully!</h2>";
            echo "<p>The database has been initialized with all required tables and initial data.</p>";
            
            // Create default admin account if it doesn't exist
            $adminEmail = "admin@admin.com";
            $adminPass = password_hash("admin123", PASSWORD_DEFAULT);
            
            $checkAdmin = $conn->query("SELECT * FROM admin WHERE email = '$adminEmail'");
            if ($checkAdmin->num_rows == 0) {
                $conn->query("INSERT INTO admin (email, password) VALUES ('$adminEmail', '$adminPass')");
                echo "<p>Default admin account created:</p>";
                echo "<ul>";
                echo "<li>Email: admin@admin.com</li>";
                echo "<li>Password: admin123</li>";
                echo "</ul>";
                echo "<p><strong>Important:</strong> Please change these credentials immediately after logging in!</p>";
            }
        } else {
            echo "<h2>Error setting up database</h2>";
            echo "<p>Please check the error messages above and try again.</p>";
        }
    } else {
        echo "<h2>Error: SQL file not found</h2>";
        echo "<p>The database initialization file could not be found.</p>";
    }
} else {
    echo "<h2>Database already initialized!</h2>";
    echo "<p>The database tables already exist. No action needed.</p>";
}

// Add some basic styling
echo '
<style>
    body {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        line-height: 1.6;
    }
    h2 {
        color: #2c3e50;
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
    }
    p {
        color: #34495e;
    }
    ul {
        background: #f8f9fa;
        padding: 20px 40px;
        border-radius: 5px;
    }
    li {
        margin: 10px 0;
    }
    .warning {
        color: #e74c3c;
        font-weight: bold;
    }
</style>
';
?>
