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

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="Owner Email" name="owneremail" value="<?php echo $data->owneremail; ?>"><br>
                <input type="datetime" placeholder="Due Date" name="duedate" value="<?php echo $data->duedate; ?>"><br>
                <input type="text" placeholder="Message" name="message" value="<?php echo $data->message; ?>"><br>
                <input type="text" placeholder="Is Done" name="isdone" value="<?php echo $data->isdone; ?>"><br>
                <button type="submit" value="Submit form" style="width: 150px; position: relative">UPDATE</button>
                <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
                    <button type="submit" form="form1" value="delete" style="width: 150px; position: relative">Delete</button>
                </form>
            </form>
        </div>
    </div>
</form>


</body>
</html>
