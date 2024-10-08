<?php
// Include the database connection settings
include 'dbconfig.php';

try {
    // Fetch all records from the Teachers table
    $stmt = $conn->query("SELECT * FROM Teachers");
    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Start the HTML table
    echo "<table border='1'>"; // Create a table with a border

    // Table header
    echo "<tr>
            <th>Teacher ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>";

    // Loop through the records and create a table row for each teacher
    foreach ($teachers as $teacher) {
        echo "<tr>
                <td>{$teacher['teacher_id']}</td>
                <td>{$teacher['first_name']}</td>
                <td>{$teacher['last_name']}</td>
                <td>{$teacher['email']}</td>
                <td>{$teacher['phone']}</td>
              </tr>";
    }

    // End the HTML table
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage(); // Display error message
}
?>
