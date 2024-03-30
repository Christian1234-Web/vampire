<?php
// Fetch all news
$query = "SELECT * FROM about LIMIT 1";
$about = mysqli_query($connection, $query);

// Check if the query executed successfully
if(!$about) {
    die("Database query failed");
} else {
    // Fetch the row from the result set
    if($row = mysqli_fetch_assoc($about)) {
        $contractAddress = $row['contractAddress'];
        $aboutdescription = $row['descriptions'];
        $buyNowlink = $row['buyNowlink'];
        $aboutId = $row['id'];
        // Now you can use $contractAddress, $description, and $buyNowlink as needed
    }
}

// update about us details 
if(isset($_POST['updateabout'])){
 // Get form data
 $description = $_POST['description'];
 $buyNowlink = $_POST['buyNowlink'];
 $contractAddress = $_POST['contractAddress'];
 $aboutId = $_POST['aboutId'];
 // Prepare update statement with placeholders
 $sql = "UPDATE about SET descriptions=?, buyNowlink=?, contractAddress=? WHERE id=?";
 // Prepare and bind parameters
 $stmt = $connection->prepare($sql);
 $stmt->bind_param("sssi", $description, $buyNowlink, $contractAddress, $aboutId);
 // Execute the statement
 if ($stmt->execute()) {
     $message =  "Record updated successfully";
 } else {
     $message  = "Error updating record: " . $stmt->error;
 }
 // Close statement and connection
 $stmt->close();

}

?>