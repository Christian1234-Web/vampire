<?php
//Fetch all rows from the roadmap table
$query = "SELECT * FROM roadmap";
$result = mysqli_query($connection, $query);

// Check if the query executed successfully
if(!$result) {
    die("Database query failed");
}

// Fetch all rows from the result set as an associative array
$roadmap = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the database connection
mysqli_free_result($result);

// Loop through each row in the $roadmap array
foreach ($roadmap as $row) {
    $phase = $row['phase'];
    $phaseId = $row['id'];
    // Process the data as needed
}

if(isset($_POST['addRoadmap'])){
    $phase = $_POST['phase1'];
    echo "HELLO";
    if(!empty($phase)){
    $sql = "INSERT INTO roadmap (phase) VALUES ('$phase')";
    
    if ($connection->query($sql) === TRUE) {
     echo "Record saved successfully";
    } else {
    echo  "Some problem occurred, please try again later ". $connection->error;
    }
    }else{
    echo  "Please add a title.";
    }
    }

// update roadmap us details 
if(isset($_POST['updateRoadmapPhases'])){
 // Get form data
 $phase = $_POST['phase'];
 $phaseId = $_POST['phaseId'];

// Prepare update statement with placeholders
    $sql = "UPDATE roadmap SET phase = ? WHERE id = ?";

    // Prepare and bind parameters
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("si", $phase, $phaseId);

    // Loop through each phase data received from the form
    foreach ($_POST['phases'] as $phaseId => $phase) {
        // Execute the statement for each phase
        if ($stmt->execute()) {
            $roadmapMessage =  "Record updated successfully";
        } else {
            $roadmapMessage = "Error updating record: " . $stmt->error;
        }
    }

    // Close statement and connection
    $stmt->close();

}

?>