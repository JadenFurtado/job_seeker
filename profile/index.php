<?php include('profile.php');  ?>
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="padding:5px;">
    <?php $res=mysqli_fetch_array($data); ?>
    <h2>Welcome <?php echo $res['name']; ?></h2>
    <div>
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
        <a href="#">my interest</a>
        <a href="https://localhost/jobPrep/preperation/?user_id=<?php echo $res['id'] ?>">my preperation</a>
        <a href="#">my resources</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>