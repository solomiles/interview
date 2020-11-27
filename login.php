<?php
    include_once('authController.php');
    $auth = new authController();
    if( isset($_POST['login']) ){

        $email = $_POST['email'];
        $password = $_POST['password'];
     
        // die($password);
        $login = $auth->Login($email,$password);
        // print_r($login);exit;
        if ($login) {
            # code...
              
            header('Location: index.php');
        } else{
            echo '<script> alert("something went wrong try again later") </script>';
        }

    }
    
    

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://via.placeholder.com/150">
    <link rel="icon" type="image/png" sizes="96x96" href="https://via.placeholder.com/150">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Solomon Osaighe" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <title>Signin - Mentorship programme  </title>
    
  </head>
  <body class="wrapper">
    
    <div class="wrapper">
        <!-- Image and text -->
        <nav class="navbar navbar-light navbar-expand-md clearfix bg-light">
          <a class="navbar-brand brand-logo"  href="#">
            <img src="https://via.placeholder.com/150" width="30" height="30" class="d-inline-block align-top" alt="Mentorship programme">
            <span class="logo-text">Mentorship programme</span>    
          </a>
        </nav><br>
        <!-- end image and text -->
        <div class="container">
            <!-- signup form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="col-md-6 offset-3">
                            <div class="container">
                                <div class="card">
                                    
                                        <div class="col-md-12 na">
                                            <div class="container">
                                                <h6>SIGN IN</h6><br>
                                    <!-- form field     -->
                                                <form method="post" id="signin-form" action="#">

                                                    <div class="form-group">
                                                        <!-- <label for="exampleInputEmail1">Your Work Email Address</label> -->
                                                        <input type="email" id="lg-email" required name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email">
                                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                    </div>

                                                    <div class="form-group">
                                                        <!-- <label for="exampleInputPassword1">Your Password</label> -->
                                                        <input type="password" id="lg-password" required name="password" class="form-control"  placeholder=" Password" autocomplete="on">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" id="login-button" name="login" class="btn btn-primary form-control">Login</button>
                                                        
                                                    </div>

                                                </form>
                                            </div>  
                                        </div>
                                    <!-- end form field -->
         
                                </div>
                            </div>
                            <br>

                            <div class="container">  
                                
                                <p class="new-link2" style="color: #e4e2e2;">Don't have an account yet? 
                                    <a href="register.php" style="color: white;">Sign Up</a> <br><a href="#" style="color: white;">Forgot your password?</a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- end form card -->
            </div>
            
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    
    <script type="text/javascript" src="js/form.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        
    </script>
  </body>
</html>