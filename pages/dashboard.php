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

<?php include("header.php");
$headerClass='dashboard';
$header='dashboard';?>
<div style="margin-left:25%;padding:1px 16px;height:100px;">
    <h1>WELCOME TO MY WEBSITE</h1>

    <h2><br>
        <?php
        if((!empty($_GET['fname'])) && (!empty($_GET['lname']))) {
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            echo 'Profile Details for '.$fname.' '.$lname;
        }
        ?>
    </h2>
<input style="width: 150px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
        color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="VIEW MY PROFILE" onclick="window.location.href='index.php?page=accounts&action=show'" />
<h3>TO-DO ITEMS</h3>
<input style="width: 150px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
        color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="CREATE TASK" onclick="window.location.href='index.php?page=tasks&action=create'" />
<input style="width: 150px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
        color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="SHOW ALL TASKS" onclick="window.location.href='index.php?page=tasks&action=all'" />
</div>
</body>
</html>
