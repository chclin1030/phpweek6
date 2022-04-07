<?php
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){

            echo "<a href ='login.php'>登出系統</a>";
        }else{
            echo "非法進入系統";
            exit();
        }
    }else{
        echo "非法進入系統";
            exit();
    }
?>

<html>
    <head>
        <title>admin login</title>
        <link rel="icon" href="/img/sunny.png" type="image/x-icon" />
    </head>
    <body>
        <?php
            echo "<body bgcolor='#faf0e6'>"
        ?>

        <h2>Welcome to Admin!</h2>
    </body>
</html>
