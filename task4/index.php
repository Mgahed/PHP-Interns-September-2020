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
      <form class="form" action="confirm.php" method="post">
                <div class="note">
                    <h3>Sign Up</h3>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name *" required/>
                            </div>
                            <div class="form-group">
                                <input name="mail" type="mail" class="form-control" placeholder="Your Mail *" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Your Password *" required/>
                            </div>
                            <div class="form-group">
                                <input name="number" type="number" class="form-control" placeholder="Phone Number *" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="address" type="text" class="form-control" placeholder="Your Address *" required/>
                    </div>
                    <input name="submit" class="btn btn-primary" type="submit"/>
                    <div style="float: right;">
                      <a href="login.php">Go to Login</a>
                    </div>
                </div>
            </form>
        </div>
  </body>
</html>
