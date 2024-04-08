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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_SESSION["UserID"];

    // Define variables and initialize with empty values
    $lastPeriodDate = $cycleLength = $periodLength = "";

    // Process form data when the form is submitted
    $lastPeriodDate = $_POST["lastPeriodDate"];
    $cycleLength = $_POST["cycleLength"];
    $periodLength = $_POST["periodLength"];

    // Set parameters
    $fertileStartDate = date("Y-m-d", strtotime($lastPeriodDate . " + " . ($cycleLength - 14) . " days")); // Assuming ovulation occurs around day 14 of the cycle
    $fertileEndDate = date("Y-m-d", strtotime($fertileStartDate . " + 6 days")); // Assuming fertility window is 7 days

    // Prepare an insert statement
    $sql = "INSERT INTO fertilitypredictions (UserID, LastPeriodDate, AverageCycleLength, AveragePeriodLength, FertileStartDate, FertileEndDate) VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("isiiii", $userID, $lastPeriodDate, $cycleLength, $periodLength, $fertileStartDate, $fertileEndDate);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to the dashboard page after successful submission
            header("location: fertility_data_submitted.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
}
?>
