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
<?php include("header.php");?>
<div style="margin-left:25%;padding:1px 16px;">
    <div class="login-page">
        <div class="form" style="margin-top: inherit; height: inherit; margin-bottom: inherit; ">
            <h1>MY PROFILE</h1>
            <p><h4>Email: <?php echo $data->email; ?></h4>
            <h4>First Name: <?php echo $data->fname; ?></h4>
            <h4>Last Name: <?php echo $data->lname; ?></h4>
            <h4>Phone: <?php echo $data->phone; ?></h4>
            <h4>Birthday: <?php echo $data->birthday; ?></h4>
            <h4>Gender: <?php echo $data->gender; ?></h4></p><br>
            <input style="width: 150px; font-family: Roboto, sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50;  border: 0; padding: 15px;
            color: #FFFFFF; font-size: 14px; cursor: pointer; position: relative" type="button" value="EDIT" onclick="window.location.href='index.php?page=accounts&action=edit'" />
            <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
                <button type="submit" form="form1" value="delete" style="width: 150px; position: relative">Delete</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
