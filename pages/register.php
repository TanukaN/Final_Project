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
<form action="index.php?page=accounts&action=register" method="post">
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="First name" name="fname"><br>
                <input type="text" placeholder="Last name" name="lname"><br>
                <input type="text" placeholder="Email" name="email"><br>
                <input type="text" placeholder="Phone" name="phone"><br>
                <input type="date" placeholder="Birthday" name="birthday"><br>
                <select name="gender">
                    <option value="" disabled selected hidden>Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
                <input type="password" placeholder="Password" name="password"><br>
                <button type="submit" value="Submit form">Create</button>
                <p class="message">Already registered? <a href="index.php?">Sign In</a></p>
            </form>
        </div>
    </div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>
