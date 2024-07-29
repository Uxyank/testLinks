<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("../../head/links.html"); ?>
    <title>subAbout</title>
</head>

<body>
    <?php
    require_once("../../aside/aside.php"); ?>
    <h3>
        subAbout
    </h3>
    <div>

        <form action="pages/about/subAbout/handleForm.php" method="POST">
            <!-- <form action="handleForm.php" method="POST"> -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>