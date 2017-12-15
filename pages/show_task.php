<!doctype html>
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

<div style="margin-left:25%;padding:1px 16px;height:100px;">
<form action="index.php?page=tasks&action=show&id=<?php echo $data->id; ?>" method="post">
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="Owner Email" name="owneremail"><br>
                <input type="text" placeholder="Owner ID" name="ownerid"><br>
                <input type="datetime" placeholder="Created Date" name="createddate"><br>
                <input type="datetime" placeholder="Due Date" name="duedate"><br>
                <input type="text" placeholder="Message" name="message"><br>

            </form>
        </div>
    </div>
</form>
</div>
</body>
</html>
