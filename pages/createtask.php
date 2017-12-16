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

<?php
$active = 'createtask';
include("header.php");
?>
<body>
<div style="margin-left:25%;padding:1px 16px;height:100px;">

<form action="index.php?page=tasks&action=create" method="post">
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="email" placeholder="Owner Email" name="owneremail" required><br>
                <input type="text" onfocus="(this.type='date')" placeholder="Due Date" name="duedate" required><br>
                <input type="text" placeholder="Message" name="message" required><br>
                <input type="text" placeholder="Is Done?" name="isdone" pattern="[0-1]{1}" title="Enter 0 or 1" required><br>
                <button type="submit" value="Submit form">CREATE</button>
            </form>
        </div>
    </div>
</form>
</div>
</body>
</html>
