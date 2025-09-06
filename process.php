<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id       = $_POST['id'] ?? null; // null if not set
    $name     = $_POST['name'];
    $mobile   = $_POST['mobile'];
    $email    = $_POST['email'];
    $gender   = $_POST['gender'] ?? '';
    $address  = $_POST['address'] ?? '';
    $department = '';
    if (!empty($_POST['department'])) {
        if (is_array($_POST['department'])) {
            $department = implode(",", $_POST['department']); // join selected
        } else {
            $department = $_POST['department'];
        }
    }

    if ($id) {
        // Update existing record
        $stmt = $conn->prepare("UPDATE students SET name=?, mobile=?, email=?, gender=?, department=?, address=? WHERE id=?");
        $stmt->bind_param("ssssssi", $name, $mobile, $email, $gender, $department, $address, $id);
        if ($stmt->execute()) {
            echo "<h3>Record updated successfully</h3>";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        // Insert new record
        $stmt = $conn->prepare("INSERT INTO students (name, mobile, email, gender, department, address) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $mobile, $email, $gender, $department, $address);
        if ($stmt->execute()) {
            echo "<h3>New record created successfully</h3>";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    echo "<a href='index.php'>Back to Registration</a> <br>
    <a href='view.php'>View all registrations</a>";
}


$conn->close();
?>