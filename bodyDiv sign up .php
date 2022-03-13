<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cstm1Body.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
require_once 'headerDiv.php';
?>
<div class="back-imag"> <img src="ricardo-gomez-angel-9AdeEdYB2yk-unsplash.jpg"></div>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm " >
            <h1>Sign up</h1>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="User Name"> <br> <br>
                <input type="email" name="email" placeholder="Email Address" ><br> <br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <button  class="btn"  type="submit" name="signin">sign up </button>
            </form>
            <p>Have an account, <a href="login.php">sign in</a></p>
        </div>
    </div>
</div>

</body>
</html>
