<?php
    session_start();
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  
       <?php 
       if(isset($_SESSION['email'])){
            $email = $conn->real_escape_string($_SESSION['email']); // Échapper les caractères spéciaux pour éviter les injections SQL
            $query = mysqli_query($conn, "SELECT firstname, lastname FROM users WHERE email='$email'");
            if($query && mysqli_num_rows($query) > 0){
                $row = mysqli_fetch_assoc($query);
                $firstName = isset($row['firstname']) ? $row['firstname'] : 'Guest';
                $lastName = isset($row['lastname']) ? $row['lastname'] : '';
                echo htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName);
            } else {
                echo 'Guest';
            }
       } else {
           echo 'Guest';
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
