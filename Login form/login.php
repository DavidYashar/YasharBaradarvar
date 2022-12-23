<?php 
session_start();

include "db.php";

if(isset($_POST['uname']) && isset($_POST['pword'])){

    function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
}

$uname = $_POST['uname'];
$pword = $_POST["pword"];

if(empty($uname)){
    header("location: index.php?error=the user name is empty, try again");
    exit();
}

else if(empty($pword)) {
    header("location: index.php?error=the password is empty");
    exit();
}

$query = "SELECT *FROM `users` WHERE `uname` = '$uname' AND `pword`= '$pword'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)=== 1){
    $row = mysqli_fetch_assoc($result);
    if($row['uname'] === $uname && $row['pword'] === $pword){
        

        $_SESSION['uname'] = $row['uname'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['pword'] = $row['pword'];

        header("location: home.php? Welcome ");
        exit();
    }
    else{
        header("location: index.php? erro= incorrect user name or password");
        exit();
    }
    
}
else{
    header("location: index.php");
    exit();
}

?>
