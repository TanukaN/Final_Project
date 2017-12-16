<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Final Project</title>
    <meta name="description" content="Final Project">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php
$active = 'homepage';
include("header.php"); ?>
<div style="margin-left:25%; padding:1px 16px; height:inherit;">
    <br><br><h1>Accomplish more,<br>every day.</h1>
    <h3>Millions of people rely on calendars to get things done.</h3>
    <br><br><br>
    <p>
        This website gives you more than that. <br>Manage tasks from anywhere. At home. At school. At work. Online. Offline. And across 10+ platforms.
    </p>

    <h2><br>
        <?php
        if((!empty($_GET['fname'])) && (!empty($_GET['lname']))) {
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            echo 'Profile Details for '.$fname.' '.$lname;
        }
        ?>
    </h2>
    <input style="width: 200px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
            color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="MANAGE MY PROFILE" onclick="window.location.href='index.php?page=accounts&action=show'" />
    <h3>TO-DO ITEMS</h3>
    <input style="width: 200px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
            color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="CREATE TASKS TO DO" onclick="window.location.href='index.php?page=tasks&action=create'" />
    <input style="width: 200px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
            color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="VIEW ALL TASKS" onclick="window.location.href='index.php?page=tasks&action=all'" />
</div>
</body>
</html>
