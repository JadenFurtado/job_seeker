<?php include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/profile/profile.php');  
      //include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/company/company.php');
?>
<!doctype html>
<?php

session_start();
$user_id=$_GET['user_id'];

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>company profile</title>
  </head>
  <body style="padding:5px;">
    <?php
    $profile = new Profile();
    $data=$profile->get_preperation($user_id);

    ?>
    <h3>My preperation</h3>
    <table style="width: 100%;">
        <?php
        while($row=mysqli_fetch_array($data)){
            $details=$profile->get_user_company_details($_GET['user_id'],$row['c_id']);
            while($r=mysqli_fetch_array($details)){
        ?>
        <tr>
            <td>
                <?php echo $r['name']; ?>
            </td>
            <td>
                <a href="https://localhost/jobPrep/preperation/preperation.php?user_id=<?php echo $_GET['user_id'].'&prep_no='.$r['id'] ?>">see preperation</a>
            </td>
        </tr>
        <tr>
            <td>
                Company Name 2
            </td>
            <td>
                <a href="">see preperation</a>
            </td>
        </tr>
        <?php
        }
    }
        ?>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>