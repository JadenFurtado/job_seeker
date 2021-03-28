<?php include('profile.php');  
session_start();
?>
<!doctype html>
<?php

$user_id=$_GET['user_id'];
$user=new Profile();
$data=$user->get_user_details($user_id);
if($data!=NULL){
    
}else{
    header("location:https://localhost/jobPrep/404.php");
}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="https://localhost/jobPrep/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profile page</title>
  </head>
  <body style="padding:5px; background-image: url(https://www.docsign.in/wp-content/uploads/2018/11/web-designer-pune-background.jpg);">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Jobify</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="http://localhost/jobPrep/index.php" class="nav-link">
          Home
        </a>
      </li>
      <?php
      if(isset($_SESSION['user_id'])){
      ?>
      <li class="nav-item">
        <a href="http://localhost/jobPrep/profile/?user_id=<?php echo $_SESSION['user_id'] ?>" class="nav-link">
          Profile
        </a>
      </li>
    <?php 
         }
    ?>
    </ul>
  </div>
</nav>
<div style="padding-left: 10px;">
    <?php $res=mysqli_fetch_array($data); ?>
    <h2>Welcome <?php echo $res['name']; ?></h2>
    <div style="min-height: 350px;">
      <div style="max-height: 300px;">
        <img src="https://localhost/swasthya/dp/def.jpg" class="img-fluid">
      </div>
        <table>
            <tr>
                <td>
                    name:
                </td>
                <td>
                    <?php echo htmlspecialchars($res['name']); ?>
                </td>
            </tr>
            <tr>
                <td>
                    email:
                </td>
                <td>
                    <?php echo htmlspecialchars($res['email_id']); ?>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <?php
        if(isset($_SESSION['user_id'])){
            ?>
            <form method="POST">
            <button name="log_out" class="btn">log out</button>
            <button name="edit" class="btn btn-primary">edit</button>
            </form>
            <?php
        }
        if(isset($_POST['log_out'])){
            session_unset();
            session_destroy();
            echo "<script>alert('logged out!');location.replace('https://localhost/jobPrep/');</script>";
        }
        if(isset($_POST['edit'])){
            header("location:https://localhost/jobPrep/settings/");
        }
        ?>
    </div>
    <div>
        <a href="#">my interest</a>
        <br>
        <a href="https://localhost/jobPrep/preperation/?user_id=<?php echo $res['id'] ?>">my preperation</a>
        <br>
        <a href="#">my resources</a>
    </div>
  </div>
        <section>
      <hr>
      <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget subscribe no-box">
                  <h5 class="widget-title">Jobify<span></span></h5>
                  <p>Best Website for interview preparation.</p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget no-box">
                  <h5 class="widget-title">Get Started<span></span></h5>
                  <p>
                    Get access to your full Training and Preparation fro
                    interviews.
                  </p>
                  <a class="btn btn-primary" href="https://localhost/jobPrep/login/" target="_blank">Register Now</a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget no-box">
                  <h5 class="widget-title">Contact Us<span></span></h5>

                  <p>
                    <a href="mailto:info@jobify.com" title="glorythemes">info@jobify.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class = "wrapper">
          <nav>
            <ul>
              <li>Home</li>
              <li>Resources</li>
              <li>Preparations</li>
              <li>Jobs</li>
              <li>About</li>
            </ul>
          </nav>
        </div>
        <br>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Copyright Jobify © 2021. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <script src="js/trial.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>