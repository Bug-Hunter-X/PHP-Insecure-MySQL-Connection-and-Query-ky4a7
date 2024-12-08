The provided code uses the deprecated mysql_connect, mysql_query, and mysql_fetch_assoc functions.  These are highly insecure and have been removed from PHP 7.0+.  Replace this code with either MySQLi or PDO for secure database interaction.  Example using MySQLi:

```php
<?php
$conn = new mysqli('localhost', 'username', 'password', 'database_name');
if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result) {
while ($row = $result->fetch_assoc()) {
// Process each row
}
$result->free_result();
} else {
die('Query failed: ' . $conn->error);
}

$conn->close();
?>
```

Remember to always sanitize user inputs to prevent SQL injection vulnerabilities.