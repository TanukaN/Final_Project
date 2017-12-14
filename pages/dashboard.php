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

<?php include("logout.php");?>
<div class="body">
    <h1>WELCOME TO THE ACTIVE RECORD</h1>
</div>
    <h2><br>
        <?php
        if((!empty($_GET['fname'])) && (!empty($_GET['lname']))) {
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            echo 'Profile Details for '.$fname.' '.$lname;
        }
        ?>
    </h2>
    <p><a href="index.php?page=accounts&action=show">VIEW MY PROFILE</a><br></p>

    <h2>TO-DO ITEMS</h2>
    <a href = "index.php?page=tasks&action=create">CREATE TASK</a>
    <a href="index.php?page=tasks&action=all">SHOW ALL TO-DO</a>

</body>
</html>
