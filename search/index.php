<?php include('search.php'); 
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      table{
        width: 60%;
      }
      @media only screen and (max-width: 600px) {
  table {
    width: 100%;
  }
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://localhost/jobPrep/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Search</title>
  </head>
  <body style="padding:5px;">
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
        <a href="http://localhost/jobPrep/about.php" class="nav-link">
          About
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
  <div>
    <h1>Search for companies</h1>
      <form method="POST">
          <input type="text" name="search" size="40"><button name="submit" class="btn btn-primary">search</button>
      </form>
  </div>   
  <div style="padding-top: 20px;min-height: 300px;">
  <table> 
  <?php
  if(isset($_POST['submit'])){
    $search=new Search();
    $data=$search->search_result($_POST['search']);
    $x=1;
    while ($row=mysqli_fetch_array($data)) {
      if($x%2==1){
        $p="background-color: #e6ffff";
      }
      else{
        $p="background-color:#ffffff";
      }
      $x++;
        echo "<tr style='$p'><td><a href='https://localhost/jobPrep/company/?company_id=".$row['id']."'><h4>".$row['name']."</h4></a></td></tr>";
      }//while loop ends here
    }//if ends here
  
  ?>
  </table>
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