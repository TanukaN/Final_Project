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
<?php include("header.php");?>
<body>
<div style="margin-left:25%; padding:1px 16px; margin-top: 45px; height: inherit; margin-bottom: 45px;">
<h1>All Accounts</h1>
<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>
</div>
</body>
</html>
