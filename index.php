<?php  

include_once('authController.php');
    if(!($_SESSION)){
        header('Location: login.php');
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
                                <ul class="tab-group">
                                    <li class="tab active"><a href="#">Profile</a></li>
                                    <li class="tab "><a href="logout.php">Logout</a></li>            
                                </ul>
                                    
                                <div class=" na">
                                    <div class="tab-content">
                                    
                                        <div class="col-md-12">
                                            <div class="img img-responsive">
                                            <img src="https://via.placeholder.com/150" width="50" height="50" class="d-inline-block align-top" alt="profile picture">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Name: </label>
                                            <input class="form-control" readonly value="<?php echo $_SESSION['name']; ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email: </label>
                                            <input class="form-control" readonly value="<?php echo $_SESSION['email']; ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Role: </label>
                                            <input class="form-control" readonly value="<?php if( $_SESSION['role']) {echo 'Mentor';} else {echo 'Mentee';}?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Study track: </label>
                                            <input class="form-control" readonly
                                                value="<?php 
                                                            if( $_SESSION['track_id'] == 1) {echo 'Engineering';}
                                                            elseif( $_SESSION['track_id'] == 2) {echo 'Business';}
                                                            if( $_SESSION['track_id'] == 3) {echo 'Fishing';}
                                                        ?>"
                                            >
                                        </div>
                                    </div>  
                                </div>
                                    <hr>
                                    <?php 
                                        if ($_SESSION['role'] == 0) {
                                        # code...
                                    ?>
                                    <div class="col-md-12">
                                        <h4>Mentors assigned </h4>
                                        <ol><?php
                                            
                                                $db = new authController;
                                                $mentors = $db->getMentors();
                                                 
                                                foreach ($mentors as $mentor => $val) {
                                                    # code...
                                                    
                                                    echo '<li>Name: '.$mentor = $val['name'].'</li>';
                                                }
                                            
                                            ?>
                                        </ol>
                                    </div>
                                    <?php 
                                        } 
                                    ?>
                                </div>
                            </div>
                            <br>

                            
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