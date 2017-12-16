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
<ul>
    <li><img src="https://i.amz.mshcdn.com/YHPi3Fyu3Ga5qPUpUjrB7n9--FM=/1200x627/2012%2F12%2F04%2Fba%2F6fantastict.9o6.jpg" style="margin-top: 10px; width: 300px; height: 180px; "></li><br>
    <li><a href="index.php?page=accounts&action=dashboard" <?php if($active == 'homepage') {echo 'class="active"';} ?>>Homepage</a></li>
    <li><a href="index.php?page=accounts&action=show" <?php if($active == 'profile') {echo 'class="active"';} ?>>My Profile</a></li>
    <li><a href="index.php?page=tasks&action=create"  <?php if($active == 'createtask') {echo 'class="active"';} ?>>Create Task</a></li>
    <li><a href="index.php?page=tasks&action=all"  <?php if($active == 'showtask') {echo 'class="active"';} ?>>Show All Tasks</a></li>
    <li><a href="index.php?">Logout</a></li>
</ul>
</body>
</html>
