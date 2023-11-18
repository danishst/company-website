<?php
session_start();
require_once('dbconfig/dbcon.php'); // Replace with your database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Portfolioname = $_POST['Portfolioname'];
    $Portfoliologo = $_FILES['Portfoliologo']['name'];
    $type = $_POST['type'];

    if ($type == 'add') {
        // Insert data into the database
        $sql = "INSERT INTO portfolio (portfolio_name, portfolio_image) VALUES ('$Portfolioname', '$Portfoliologo')";

        // Execute the query
        if ($con->query($sql) === TRUE) {
            echo "Record inserted successfully";

            // Upload file
            $targetDir = 'upload/portfolio/';
            $targetFile = $targetDir . basename($Portfoliologo);
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
                if (move_uploaded_file($_FILES['Portfoliologo']['tmp_name'], $targetFile)) {
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
            $_SESSION["msg"] = "Portfolio added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } elseif ($type == 'update') {
        $PortfolioID = $_POST['Portfolio_id'];

        // Fetch existing portfolio data
        $query = "SELECT portfolio_image FROM portfolio WHERE portfolio_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('i', $PortfolioID);
        $stmt->execute();
        $stmt->bind_result($currentPortfoliologo);
        $stmt->fetch();
        $stmt->close();

        // Set the $Portfoliologo variable to either the new file or the existing value
        $Portfoliologo = !empty($_FILES['Portfoliologo']['name']) ? $_FILES['Portfoliologo']['name'] : $currentPortfoliologo;

        // Update data in the database
        $sql = "UPDATE portfolio SET portfolio_name = '$Portfolioname', portfolio_image = '$Portfoliologo' WHERE portfolio_id = $PortfolioID";

        if ($con->query($sql) === TRUE) {
            echo "Record updated successfully";

            // Check if a new file has been uploaded
            if (!empty($_FILES['Portfoliologo']['name'])) {
                // Upload file
                $targetDir = 'upload/portfolio/';
                $targetFile = $targetDir . basename($_FILES['Portfoliologo']['name']);

                // Check if file already exists
                if (!file_exists($targetFile) && move_uploaded_file($_FILES['Portfoliologo']['tmp_name'], $targetFile)) {
                    echo "File uploaded successfully";
                } else {
                    echo "Error: File upload failed.";
                }
            }

            $con->close();
            $_SESSION["msg"] = "Portfolio updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } elseif ($type == 'delete') {
        $PortfolioID = $_POST['Portfolio_id'];

        // Update data in the database
        $stmt = $con->prepare("DELETE FROM portfolio WHERE portfolio_id = $PortfolioID");

        if ($stmt->execute()) {
            // Data updated successfully

            $_SESSION["msg"] = "Portfolio deleted";
            $stmt->close();
        } else {
            echo "Error updating data";
        }
    }
    header("Location:Portfolio.php");
}
