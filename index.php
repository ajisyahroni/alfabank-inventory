<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("location:dashboard.php");
    } 

    ?>
</head>

<body class="container">

    <form action="aksi_login.php" method="post">
        Username
        <input type="text" name="username" class="form-control" id="">
        Password
        <input type="password" name="password" class="form-control" id="">
        <input type="submit" value="login" class="btn btn-block btn-primary">
    </form>
</body>

</html>