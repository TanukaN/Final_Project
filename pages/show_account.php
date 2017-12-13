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

<h1>MY PROFILE</h1>
<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="First name" name="fname" value="<?php echo $data->fname; ?>"><br>
                <input type="text" placeholder="Last name" name="lname" value="<?php echo $data->lname; ?>"><br>
                <input type="text" placeholder="Email" name="email" value="<?php echo $data->email; ?>"><br>
                <input type="text" placeholder="Phone" name="phone" value="<?php echo $data->phone; ?>"><br>
                <input type="date" placeholder="Birthday" name="birthday" value="<?php echo $data->birthday; ?>"><br>
                <input type="text" placeholder="Gender" name="gender" value="<?php echo $data->gender; ?>"><br>
                <button type="submit" value="Submit form">UPDATE</button>
            </form>
        </div>
    </div>
</form>

<!--
<form action="index.php?page=accounts&action=delete&id=<?php /*echo $data->id; */?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>

-->
<script src="js/scripts.js"></script>
</body>
</html>
