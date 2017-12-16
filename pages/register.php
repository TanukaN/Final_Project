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
<form action="index.php?page=accounts&action=register" method="post">
    <h1>REGISTRATION FORM</h1>
    <div class="form" style="margin-bottom: 3%; width: 30%;">
        <form class="register-form">
            <input type="text" placeholder="First name" name="fname" required><br>
            <input type="text" placeholder="Last name" name="lname" required><br>
            <input type="email" placeholder="Email" name="email" required><br>
            <input type="text" placeholder="Phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required title="Enter in the form of xxx-xxx-xxxx"><br>
            <input type="text" placeholder="Birthday" name="birthday" onfocus="(this.type='date')" required title="Enter in the form of DD-MM-YYYY"><br>
            <select name="gender">
                <option value="" disabled selected hidden>Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
            </select>
            <input type="password" placeholder="Password" name="password" pattern=".{6,}" required title="Please enter at least 6 characters"><br>
            <button type="submit" value="Submit form">Create</button>
            <form action="index.php?page=accounts&action=login" method="get">
                <p class="message">Already registered? <a href="index.php?">Sign In</a></p>
            </form>
        </form>
    </div>
</form>
</body>
</html>
