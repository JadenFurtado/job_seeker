<?php include('company.php') ;
$comp = new Company();
$data=$comp->get_company_details($_GET['company_id']);
  $arr=mysqli_fetch_array($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?php  ?></title>
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
      <li class="nav-item">
        <a href="http://localhost/jobPrep/search/" class="nav-link">
          Search
        </a>
      </li>
      <li class="nav-item">
        <a href="http://localhost/jobPrep/resources/" class="nav-link">
          Resources
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
    <h3><?php echo $arr['name']; ?></h3>
    <div>
        company description
    </div>
    <?php  
    if(isset($_SESSION['user_id'])){
      $flag=1;
    if($comp->check_if_company_added($_GET['company_id'])){
        $flag=$flag+1;
    }
    
    ?>
    <div><button class="btn btn-primary <?php if($flag%2==0){ echo "add_company";}else{echo "remove_company";} ?>" id="button"><?php if($flag%2==0){ echo "start_preperation";$flag++;}else{echo "stop_preperation";$flag++;} ?></button>
      <button class="beta btn">view beta</button></div>
    <script type="text/javascript">
      $(".beta").click(function(){
        location.href="https://localhost/jobPrep/company/resources.php?company_id=<?php echo htmlspecialchars($_GET['company_id'])?>"
      });
        $(document).ready(function(){
            $(".add_company").click(function(){
                var id= "<?php echo htmlspecialchars($_GET['company_id']); ?>";
                var flag=1;
                $.ajax({
                    url:"add_company.php",
                    data:({id:id,flag:flag}),
                    method:"post",
                    success:
                    function(result){
                        alert("success in adding company");
                        <?php $flag=0; ?>
                        location.reload();
                    }
                });
            });
            $(".remove_company").click(function(){
               var id= "<?php echo htmlspecialchars($_GET['company_id']); ?>";
               var flag=0;
                $.ajax({
                    url:"add_company.php",
                    data:({id:id,flag:flag}),
                    method:"post",
                    success:
                    function(result){
                      <?php $flag=1; ?>
                        alert("removed company");
                    }
                }); 
            });
        });
    </script>
    <br>
    <?php
}
    ?>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Resources</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Empoyee experience</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Vacancies</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div><a href="https://localhost/jobPrep/company/add_resource.php?company_id=<?php echo htmlspecialchars($_GET['company_id']); ?>">contribute resources</a></div>
      <div>
        
        <table style="width: 100%;">
          <?php 
          $g=$comp->get_resources($_GET['company_id']);
          while($d=mysqli_fetch_array($g)){
            //if($d['type']=='question'){
            ?>
        <div>
          <h4><?php echo $d['resource_name']; ?></h4>
          <div>
            <?php  echo $d['type'].":".$d['description']; ?>
          </div>
          <?php
          if($d['link']!=NULL){
          ?>
          <div>
            <a href="<?php echo $d['link'] ;?>"><?php echo $d['link']; ?></a>
          </div>
          <?php
            }
          ?>
        </div>
        <?php
          }
          if(mysqli_num_rows($g)==0){
            echo "<h5>No resource to show</h5>";
          }
          ?>
        </table>
      </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div><a href="https://localhost/jobPrep/company/add_experience.php?company_id=<?php echo htmlspecialchars($_GET['company_id']); ?>">add experience</a></div>
      <div>
          <?php $d=$comp->get_experience($_GET['company_id']);   
          while($r=mysqli_fetch_array($d)){
          ?>
          <div style="width: 100%; padding-bottom: 8px;">
         <div><h6><?php echo $r['experience']; ?></h6></div>
         <div>position held:<?php echo $r['position']; ?></div>   
          </div>
          <?php
        }
        if($r==NULL){
          echo "<h5>No experience to display</h5>";
        }
          ?>
      </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <table style="width: 100%;">
      <div><a href="#">add vacancy</a></div>
      <div>
        <tr>
          <td>
          <div style="padding-bottom: 5px;background-color: #cceeff">
            <a href="https://www.workindia.in/jobs-in-mumbai/"><h5>Check vacancies out here</h5></a>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div style="padding-bottom: 5px;">
            <a href="https://in.indeed.com/Fresher-Web-Developer-jobs-in-Mumbai,-Maharashtra"><h5>For web eveloper freshers</h5></a>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div style="padding-bottom: 5px; background-color:  #cceeff">
            <a href="https://www.naukri.com/software-engineer-jobs"><h5>Now hiring software engineers</h5></a>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div style="padding-bottom: 5px;">
            <a href="https://in.indeed.com/"><h5>Computer engineers</h5></a>
          </div>
        </td>
      </tr>
      </div>
    </table>
  </div>
</div>
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </body>
</html>