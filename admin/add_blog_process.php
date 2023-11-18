<?php
session_start();
require_once('dbconfig/dbcon.php'); // Replace with your database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blogname = $_POST['blogname'];
    $bloghead = $_POST['bloghead'];
    $blogslug = $_POST['blogslug'];
    $metatitle = $_POST['metatitle'];
    $metadec = $_POST['metadec'];
    $metakeyword = $_POST['metakeyword'];
    $blogdetail = $_POST['blogdetail'];
    $blogimage = $_FILES['blogimage']['name'];

    $type = $_POST['type'];

    if ($type == 'add') {
        // Insert data into the database
        $sql = "INSERT INTO blogs (blog_name,blog_heading,blog_slug,meta_title,meta_description,meta_keyword,blog_details,blog_image) VALUES ('$blogname', '$bloghead', '$blogslug', '$metatitle', '$metadec', '$metakeyword', '$blogdetail', '$blogimage')";

        // Execute the query
        if ($con->query($sql) === TRUE) {
            echo "Record inserted successfully";

            // Upload file
            $targetDir = 'upload/blogs/';
            $targetFile = $targetDir . basename($blogimage);
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
                if (move_uploaded_file($_FILES['blogimage']['tmp_name'], $targetFile)) {
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
            $_SESSION["msg"] = "Blogs added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } elseif ($type == 'update') {
        $blogsID = $_POST['blogs_id'];

        // Fetch existing blogs data
        $query = "SELECT blog_image FROM blogs WHERE blog_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('i', $blogsID);
        $stmt->execute();
        $stmt->bind_result($currentblogimage);
        $stmt->fetch();
        $stmt->close();

        // Set the $blogimage variable to either the new file or the existing value
        $blogimage = !empty($_FILES['blogimage']['name']) ? $_FILES['blogimage']['name'] : $currentblogimage;

        // Update data in the database
        $sql = "UPDATE blogs SET blog_name = '$blogname', blog_heading = '$bloghead', blog_slug = '$blogslug', meta_title = '$metatitle', meta_description = '$metadec', meta_keyword = '$metakeyword', blog_details = '$blogdetail', blog_image = '$blogimage' WHERE blog_id = $blogsID";

        if ($con->query($sql) === TRUE) {
            echo "Record updated successfully";

            // Check if a new file has been uploaded
            if (!empty($_FILES['blogimage']['name'])) {
                // Upload file
                $targetDir = 'upload/blogs/';
                $targetFile = $targetDir . basename($_FILES['blogimage']['name']);

                // Check if file already exists
                if (!file_exists($targetFile) && move_uploaded_file($_FILES['blogimage']['tmp_name'], $targetFile)) {
                    echo "File uploaded successfully";
                } else {
                    echo "Error: File upload failed.";
                }
            }

            $con->close();
            $_SESSION["msg"] = "Blogs updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } elseif ($type == 'delete') {
        $blogsID = $_POST['blogs_id'];

        // Update data in the database
        $stmt = $con->prepare("DELETE FROM blogs WHERE blog_id = $blogsID");

        if ($stmt->execute()) {
            // Data updated successfully

            $_SESSION["msg"] = "Blogs deleted";
            $stmt->close();
        } else {
            echo "Error updating data";
        }
    }
    header("Location:Blogs.php");
}
