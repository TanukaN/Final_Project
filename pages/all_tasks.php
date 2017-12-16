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
$active = 'showtask';
include("header.php"); ?><br>
<div style="margin-left:25%; padding:1px 16px; height:inherit; margin-top: 45px;">
    <h2>TO DO ITEMS :-</h2>
<?php
    if($data == false){
        echo '<p>You do not have any tasks</p>';
    }else {
        echo "<html>";
        echo "<div style=\" margin-left: 12%;\">";
        print utility\htmlTable::genarateTableFromMultiArray($data);
    }

?>
</div>
</body>
</html>
