<?php
require_once('conn.php');
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])
&& isset($_POST['birthdate'])&& isset($_POST['phone'])&& isset($_POST['url'])) :

    # Assigning user data to variables.
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];

    # SQL query 
    $sql = "INSERT INTO users VALUES ('','$username', '$password', '$email', '$birthdate', '$phone', '$url')";

    # Executing the Above SQL query.
    $query = mysqli_query($db_conn, $sql);

    # Checks that the query executed successfully
    if ($query) {
        echo 'New data inserted successfully. <a href="./index.html">Go Back</a>';
    } else {
        echo "Failed to insert new data.";
    }
    exit;
endif;
