<?php
include 'connect.php';

if (isset($_POST['sign-up'])) {
    $firstName = trim($_POST['fName']);
    $lastName = trim($_POST['lName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Insert the new user
        $insertQuery = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        if ($insertQuery->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
    $checkEmail->close();
}

if (isset($_POST['sign-in'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check if the user exists and verify password
    $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: home.php");
            exit();
        } else {
            echo "Incorrect Email or Password";
        }
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
    $sql->close();
}

$conn->close();
?>