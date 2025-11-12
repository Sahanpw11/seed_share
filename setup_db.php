<?php
include("dataBase.php");

$drop_query = "DROP TABLE IF EXISTS seeds";
if(mysqli_query($conn, $drop_query)){
    echo "✓ Existing table dropped (if any)<br>";
} else {
    echo "✗ Error dropping table: " . mysqli_error($conn) . "<br>";
}

$create_query = "CREATE TABLE seeds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    seed_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if(mysqli_query($conn, $create_query)){
    echo "✓ Table 'seeds' created successfully!<br>";
    echo "<br><strong>Database is ready!</strong><br>";
    echo "<a href='index.html'>Go to Home</a> | ";
    echo "<a href='add_seed.php'>Add Seeds</a> | ";
    echo "<a href='view_seed.php'>View Seeds</a>";
} else {
    echo "✗ Error creating table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>
