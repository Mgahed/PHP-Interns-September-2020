<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="indexx.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body class="jumbotron">
    <div class="container register-form">
      <form class="form" action="confirmlogin.php" method="post">
                <div class="note">
                    <h3>Login</h3>
                </div>

                <div class="form-content">
                    <div class="row">
                      <div class="col-md-12">
                      <input name="mail" type="mail" class="form-control" placeholder="Your Mail *" required/>
                    </div>
                    <br><br>
                        <div class="col-md-12">
                      <input name="password" type="password" class="form-control" placeholder="Your Password *" required/>
                      </div>
                      <br><br>
                      <div class="col-md-12">
                    <input name="submit" class="btn btn-primary" type="submit"/>
                  </div>
                </div>
                <div style="float: right;">
                  <a href="index.php">Go to Signup</a>
                </div>
              </div>
            </form>
        </div>
  </body>
</html>
