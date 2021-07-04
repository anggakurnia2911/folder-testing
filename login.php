<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    

</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Aquascape Lovers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
          </div>
        </div>
        </div>
      </nav>

    <div class="container">
        <h3 class="text-center">LOGIN</h3>

    <form action="fungsi/login.php" method="POST">

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type ="text" name="email" placeholder="Username atau Email anda" />
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type ="password" name="password" placeholder="Password" />
        </div>
       
        <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />


        <!-- <button type="button" onclick="loginFunction()">Login</button> -->
        <!-- <button id = "loginButton" type="submit" value = "login" onCLick = "loginFunction()" class="btn btn-primary" >Submit</button> -->
        
<!--         
        <a href="register.html" class="btn btn-info" role="button">Register</a> -->
      </form>
    </div>

    <div class="footer-copyright text-center py-3">
      <div class="p-3 mb-2 bg-dark text-white">
      @Copyrightby 18111017_AnggaKurnia_TIFRP18CIDB
    </div>
  </div>

  <script type="text/javascript" language="javascript" src="login.js"></script>

</body>
</html>