<?php
// Include database connection
require_once 'public/database.php';

// Get database connection
$database = new Database();
$conn = $database->getConnection();

if (!$conn) {
    echo "Database connection failed\n";
    exit();
}

// Check if tables exist
$tables = ['medicines', 'inventory_logs', 'sales'];
foreach ($tables as $table) {
    $stmt = $conn->query("SHOW TABLES LIKE '$table'");
    if ($stmt->rowCount() > 0) {
        echo "Table '$table' exists\n";
    } else {
        echo "Table '$table' does NOT exist\n";
    }
}

// Check inventory logs
$query = "SELECT COUNT(*) as count FROM inventory_logs";
$stmt = $conn->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Number of inventory logs: " . $result['count'] . "\n";

// Check medicines
$query = "SELECT COUNT(*) as count FROM medicines";
$stmt = $conn->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Number of medicines: " . $result['count'] . "\n";

// Check if any medicines have stock
$query = "SELECT m.*, 
          (SELECT SUM(CASE WHEN type = 'in' THEN quantity ELSE -quantity END) 
           FROM inventory_logs 
           WHERE medicine_id = m.id) as current_stock
          FROM medicines m";
$stmt = $conn->query($query);
$medicines = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "Medicines with stock information:\n";
foreach ($medicines as $medicine) {
    echo "ID: " . $medicine['id'] . ", Name: " . $medicine['name'] . ", Stock: " . $medicine['current_stock'] . "\n";
}
?> 