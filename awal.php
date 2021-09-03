<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <style media="screen">
            
        </style>
    </head>
    <body>
        
        <?php
            session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='index.php';
                                </script>";
            }else{

                echo "<h3 class=login> Selamat Datang <label style='color:white'>".$_SESSION['username'].'</label> Anda Berhasil Login </h3>';
                echo "<br><br><a href='logout.php' class='btn-login'> Logout </a>";
                
            }
        ?>

    </body>
</html>
