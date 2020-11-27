<?php

include_once('authController.php'); 
    $auth = new authController();
    if( isset($_POST['register']) ){  
        $name = $_POST['name'];  
        $email = $_POST['email'];
        $role = $_POST['role'];
        $track_id = $_POST['track_id'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirmPassword']; 
    
        if($password == $confirmPassword){  
            $checkEmail = $auth->ifUserExist($email);  
            if(!$checkEmail){  
                
                $register = $auth->registerUser($name, $email, $role, $track_id, $password);  
                if($register){  
                    echo "<script>alert( 'Registration successful! you may log in now')</script>";
                    // header('Location: login.php');
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
        
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
    <meta name="author" content="Solomon Osaighe" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <title>Signup - Mentorship programme  </title>
    
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
                    
                    <div class="col-md-6 offset-3">
                        <div class="card">
                                   
                        <!-- end intro text -->
                            <div class="col-md-12">
                                
                                <ul class="tab-group">
                                    <li class="tab active"><a href="#create-mentee-account">Create Account</a></li>
                                    <li class=""><a href="login.php">Login</a></li>
                                    
                                    
                                </ul><br><br>
                        <!-- form field     -->
                            
                                <div class="tab-content">
                                    <!-- form field for  -->
                                    <div id="create-mentee-account">   
                                        
                                        
                                        <form method="post" name="register" action="" >

                                            <div class="form-group">
                                                <label for=""> Name</label>
                                                <input type="text" name="name" required class="form-control" placeholder="Enter your name">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Email Address</label>
                                                <input type="email"  required name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your email">
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Role</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" value="1" id="customControlValidation2" name="role" required>
                                                    <label class="custom-control-label" for="customControlValidation2">Mentor</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" value="0" id="customControlValidation1" name="role" required>
                                                    <label class="custom-control-label" for="customControlValidation1">Mentee</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Course</label>
                                                    <select name="track_id" class="custom-select" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Engineering</option>
                                                    <option value="2">Business</option>
                                                    <option value="3">Fishing</option>
                                                </select>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" required name="password" class="form-control"  placeholder="Enter your preffered password">
                                                <small id="passwordHelpBlock" class="form-text  text-muted" aria-describedby="passwordHelpBlock">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" required name="confirmPassword" class="form-control"  placeholder="Confirm Your Password">
                                                
                                            </div>

                                            <div class="form-group form-check">
                                                <input type="checkbox" checked="" required class="form-check-input" >
                                                <label class="form-check-label" for="exampleCheck1">By clicking button, you agree to Mentorship's <a href="#">terms of acceptable use</a></label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="register" class="btn btn-primary form-control">Submit</button>
                                                
                                            </div>

                                        </form>

                                    </div>
                                    <!-- end form field for  -->

                                    <!-- tab-content -->
                                </div> 
                                <!-- end form field for user -->
                                <div class="form-group">
                                    <p>Already have an account? <a href="login.php">Login</a></p>
                                </div>
                                    
                                
                            </div>
                        </div>
                    </div>
                    <!-- end form card -->
                </div>
            </div>
        </div>

    </div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- page level javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
     

 

  </body>
</html>