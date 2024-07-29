<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("../../head/links.html"); ?>
    <title>handleForm</title>
</head>

<body>
    <?php
    require_once("../../aside/aside.php"); ?>
    <h3>
        handleForm
    </h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the username from the POST request
        $username = $_POST['username'];

        // Sanitize the username to prevent XSS and other attacks
        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

        // Process the username (for example, you can echo it or save it to a database)
        echo "Username received: " . $username;
    }
    ?>
</body>