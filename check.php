<?php
    include_once('connection.php');
    if(isset($_POST['action']) && $_POST['action'] == 'availability')
    {
        $username       = mysqli_real_escape_string($connection,$_POST['username']); // Get the username values
            $query  = "select username from users where username='".$username."'";
            $res    = mysqli_query($connection,$query);
            $count  = mysqli_num_rows($res);
            echo $count;
    }
?>