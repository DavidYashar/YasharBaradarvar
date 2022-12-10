<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood donation camp</title>
</head>
<style>
    body{
        background-color: blue;
        position:absolute;
        left:40%;
        top:20%;
    }
    h2{
        color:blanchedalmond;
        
    }
    label{
        color:aqua;
    }
    .submit{
        background-color: crimson;
        color:aliceblue;
    }
</style>
<h2>Blood donation application form</h2>
<form action='connect.php' method='POST'>
    <label for='name'>Name:</label><br>
 <input name='name' id='name' type='text'/><br><br>
 <label for='age'>age:</label><br>
 <input name='age' id='age' type='number'/><br><br>
 <label for='email'>Email: </label><br>
 <input name='email' type='email' id='email'/><br><br>
 <label for='bgroup'>Blood Group: </label><br>
 <input name='bgroup' id='bgroup' type='text'/><br><br>
 <input name='submit' type='submit' value='submit'/>

</form>
</body>
</html>