<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    <form action="proses1.php" method="post">
        <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Halaman Login</h2>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="username">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          
        </div>
    </form>
  </head>
  </html>