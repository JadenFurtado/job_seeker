<?php 
include("resource.php");
$company_id=htmlspecialchars($_GET['company_id']);
if(!isset($_SESSION['user_id'])){
    echo "You have to login to continue";
}
else{
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--
    resource_name VARCHAR(100),
    type VARCHAR(10),
    description VARCHAR(255),
    id INT(100),
    u_id INT(100),
-->
    <title>add resource</title>
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
        <h3>Add resource</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        resource name
                    </td>
                    <td>
                        <input type="text" name="name">                     
                    </td>
                </tr>
                <tr>
                    <td>
                        file
                    </td>
                    <td>
                        <input type="file" name="fileToUpload">
                    </td>
                </tr>
                <tr>
                    <td>
                        description
                    </td>
                    <td>
                        <input type="text" name="description">
                    </td>
                </tr>
                <tr>
                    <td>
                        link
                    </td>
                    <td>
                        <input type="text" name="link">
                    </td>
                </tr>
                <tr>
                    <td>
                        domain
                    </td>
                    <td>
                        <select name="type">
                            <option value="question">question</option>
                            <option value="link">link</option>
                            <option value="file">file</option>
                            <option value="technical">technical</option>
                            <option value="interview">interview prep</option>
                            <option value="marketing">marketing</option>
                            <option value="info_sec">Info Sec</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button name="submit">submit</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php

        if(isset($_POST['submit'])){
            $resource_name=$_POST['name'];
            $description=$_POST['description'];
            $type=$_POST['type'];
            $link=$_POST['link'];
            $resource=new resource();
          if($resource->add_resource($resource_name,$description,$type,$company_id,$link)){
                //echo "<script>alert('success');</script>"
            }
        }

        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}

?>