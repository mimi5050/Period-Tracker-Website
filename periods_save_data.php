<?php
session_start();
// Include connection.php to establish a database connection
include 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION["UserID"])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userID = $_SESSION["UserID"];
    $lastPeriodDate = $_POST['lastPeriodDate'];
    $cycleLength = isset($_POST['cycleLength']) ? $_POST['cycleLength'] : NULL;
    
    // Insert data into the database
    $insert_query = "INSERT INTO periodpredictions (UserID, LastPeriodDate, AverageCycleLength) 
                     VALUES ('$userID', '$lastPeriodDate', '$cycleLength')";
    
    if ($conn->query($insert_query) === TRUE) {
        // Data inserted successfully
        // Redirect user to another page or show a success message
        header("Location: preriods_data_submitted.php");
        exit();
    } else {
        // Error occurred while inserting data
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
