<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Final Project</title>
    <meta name="description" content="Web Systems Development IS601 Fall 2017 Project">
    <meta name="author" content="TanukaNayak">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>

<h1>
    <?php
        echo $data['site_name'];
    ?>
</h1>
<form action="index.php?page=accounts&action=login" method="POST">
    <div  class="login-page">
        <div class="form">
            <form class="login-form">
                <input type="text" placeholder="Enter Email" name="email" required>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit">Login</button>
                <p class="message">Not registered? <a href="index.php?page=accounts&action=register">Create an account</a></p>
            </form>
        </div>
    </div>
</form>
<script src="js/scripts.js"></script>
</body>
</html>
