<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php include("logout.php");?>

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

</body>
</html>
