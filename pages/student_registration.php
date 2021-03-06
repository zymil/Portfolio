<?php 
    include_once('../database/connect.php');
    include_once('../cookies/cookie.php');
    include_once('../template/template.php');


    if(isset($_SESSION['username']) ) {
        header('Location: user_mainpage.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/RegistryStyle.css" rel="stylesheet">
    <?php fontAndTitle(); ?>
</head>

<body>
    <header>
        <h1>Portfol.io</h1>
    </header>
    <article>
        <h2>
            Register now and start managing your classes smarter.
            <p>By registering you get the chance to organize your 
             class notes, sketches and schedule into one single place.</p>
            <p>Register with your credentials as well as your class timetables and class id.
             (As other students who are taking the same class will be able to access your snippets and vice-versa, only
             if you want to do so of course !</p>
        </h2>
    </article>
    <form action="../actions/ActionStudentRegistration.php" method="POST">
        <h3>Register now!</h3>
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="message">
                <?=$_SESSION['message']?>
            </div>
        <?php unset($_SESSION['message']); } ?>
        <label>
            User Name <input type="text" name="username"> 
        <p></p>
            Password <input type="password" name="password">
        <p></p>
            Password <input type="password" name="password_confirmation">
        <p></p>
            Email <input type="text" name="email">
        </label>
        <p></p>
        <input type="submit" value="Register">
        
    </form>
    <div id="alreadyHasAcc">
        Already have an account?
        <form action="login.php">
            <input type="submit" value="Log In">
        </form>
    </div>

    <?php footer() ?>
</body>
</html>