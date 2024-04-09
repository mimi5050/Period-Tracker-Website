<?php
// Start the session (assuming sessions are used for user authentication)
session_start();

// Include the connection.php file
include 'connection.php';

// Check if the user is logged in and the userID session variable is set
if(isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];

    // Fetch data from periodpredictions table for the logged-in user
    $period_predictions_sql = "SELECT * FROM periodpredictions WHERE UserID = $userID";
    $period_predictions_result = $conn->query($period_predictions_sql);

    if ($period_predictions_result->num_rows > 0) {
        echo "Period Predictions Table:<br>";
        echo "<table border='1'><tr><th>PredictionID</th><th>UserID</th><th>LastPeriodDate</th><th>AverageCycleLength</th><th>AveragePeriodLength</th><th>NextPeriodStartDate</th><th>NextPeriodEndDate</th></tr>";
        while ($row = $period_predictions_result->fetch_assoc()) {
            echo "<tr><td>" . $row["PredictionID"] . "</td><td>" . $row["UserID"] . "</td><td>" . $row["LastPeriodDate"] . "</td><td>" . $row["AverageCycleLength"] . "</td><td>" . $row["AveragePeriodLength"] . "</td><td>" . $row["NextPeriodStartDate"] . "</td><td>" . $row["NextPeriodEndDate"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results found in Period Predictions Table";
    }

    // Fetch data from fertilitypredictions table for the logged-in user
    $fertility_predictions_sql = "SELECT * FROM fertilitypredictions WHERE UserID = $userID";
    $fertility_predictions_result = $conn->query($fertility_predictions_sql);

    if ($fertility_predictions_result->num_rows > 0) {
        echo "<br><br>Fertility Predictions Table:<br>";
        echo "<table border='1'><tr><th>PredictionID</th><th>UserID</th><th>LastPeriodDate</th><th>AverageCycleLength</th><th>AveragePeriodLength</th><th>FertileStartDate</th><th>FertileEndDate</th></tr>";
        while ($row = $fertility_predictions_result->fetch_assoc()) {
            echo "<tr><td>" . $row["PredictionID"] . "</td><td>" . $row["UserID"] . "</td><td>" . $row["LastPeriodDate"] . "</td><td>" . $row["AverageCycleLength"] . "</td><td>" . $row["AveragePeriodLength"] . "</td><td>" . $row["FertileStartDate"] . "</td><td>" . $row["FertileEndDate"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<br><br>0 results found in Fertility Predictions Table";
    }
} else {
    // Redirect or display an error message if the user is not logged in
    echo "Please log in to view this page.";
}

// Close connection (if not closed in connection.php)
$conn->close();
?>
