<?php
session_start();
require_once('dbconfig/dbcon.php'); // Replace with your database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientname = $_POST['clientname'];
    $clientlogo = $_FILES['clientlogo']['name'];
    $type = $_POST['type'];

    if ($type == 'add') {
        // Insert data into the database
        $sql = "INSERT INTO clients_logo (clogo_name, clogo_image) VALUES ('$clientname', '$clientlogo')";

        // Execute the query
        if ($con->query($sql) === TRUE) {
            echo "Record inserted successfully";

            // Upload file
            $targetDir = 'upload/portfolio';
            $targetFile = $targetDir . basename($clientlogo);
            $uploadOk = true;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if file already exists
            if (file_exists($targetFile)) {
                $uploadOk = false;
                echo "Error: File already exists.";
            }

            // Check file size, type, etc.
            // Add your own validation checks here

            if ($uploadOk) {
                // Create the 'upload' folder if it doesn't exist
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                // Move uploaded file to the target directory using the temporary file path
                if (move_uploaded_file($_FILES['clientlogo']['tmp_name'], $targetFile)) {
                    // File uploaded successfully
                    echo "File uploaded successfully";
                } else {
                    // Error uploading file
                    echo "Error uploading file.";
                }
            } else {
                // Error uploading file due to validation checks
                echo "Error: Invalid file.";
            }

            // Close the connection
            $con->close();
            $_SESSION["msg"] = "Client added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } elseif ($type == 'update') {
        $clientID = $_POST['client_id'];

        // Fetch existing company data
        $query = "SELECT clogo_image FROM clients_logo WHERE clogo_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('i', $clientID);
        $stmt->execute();
        $stmt->bind_result($currentClientLogo);
        $stmt->fetch();
        $stmt->close();

        // Set the $clientlogo variable to either the new file or the existing value
        $clientlogo = !empty($_FILES['clientlogo']['name']) ? $_FILES['clientlogo']['name'] : $currentClientLogo;

        // Update data in the database
        $sql = "UPDATE clients_logo SET clogo_name = '$clientname', clogo_image = '$clientlogo' WHERE clogo_id = $clientID";

        if ($con->query($sql) === TRUE) {
            echo "Record updated successfully";

            // Check if a new file has been uploaded
            if (!empty($_FILES['clientlogo']['name'])) {
                // Upload file
                $targetDir = 'upload/portfolio';
                $targetFile = $targetDir . basename($_FILES['clientlogo']['name']);

                // Check if file already exists
                if (!file_exists($targetFile) && move_uploaded_file($_FILES['clientlogo']['tmp_name'], $targetFile)) {
                    echo "File uploaded successfully";
                } else {
                    echo "Error: File upload failed.";
                }
            }

            $con->close();
            $_SESSION["msg"] = "Client updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } elseif ($type == 'delete') {
        $clientID = $_POST['client_id'];

        // Update data in the database
        $stmt = $con->prepare("DELETE FROM clients_logo WHERE clogo_id = $clientID");

        if ($stmt->execute()) {
            // Data updated successfully

            $_SESSION["msg"] = "Client deleted";
            $stmt->close();
        } else {
            echo "Error updating data";
        }
    }
    header("Location:Clientslogo.php");
}
