<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="styles.css" type="text/css">
    <title>Log in</title>
</head>
<body>
    <form action="login.php" method="POST">
    <?php if(isset($_GET['error'])) {
        ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>username: </label><br>
        <input type="text" name="uname" placeholder="user name"><br>
        <label >Password:</label><br>
        <input type="password" name="pword"  placeholder="password"><br>

        <input type="submit" name="submit" value="submit">

    </form>
    
</body>
</html>
