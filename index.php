<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="login-exercise">
    <meta name="author" content="Noorman">
    <title>Login exercise</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner"> 

        <div class="cover-container">

          <div class="inner cover">
           <form class="form-horizontal" name="connexion" method="post" enctype="application/x-www-form-urlencoded" action="connexion.php">
            <div class="col-md-8">
              <div class="form-group">
                  <label for="inputText" class="col-sm-2 control-label">Pseudo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="pseudo" placeholder="Pseudo">
                  </div>
              </div>

              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                </div>
              </div>
              </div>
              <div class="col-md-4">  
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-success" id="btn-login" value="login">            
                </div>
              </div>
              </div>

           </form>
          </div>

        </div>

      </div>

    </div>

  </body>
</html>
