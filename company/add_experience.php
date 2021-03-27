<?php 
include("resource.php");
$company_id=htmlspecialchars($_GET['company_id']);

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
    <div>
        <h3>Add my experience</h3>
        <form method="POST">
        <table style="width: 100%;">
            <tr>
                <td>
                    My experience
                </td>
                <td>
                    <textarea name="experience"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    My position
                </td>
                <td>
                    <input type="text" name="position">
                </td>
            </tr>
            <tr>
                <td>
                    from
                </td>
                <td>
                    <input type="date" name="start">
                </td>
            <tr>
                <td>
                    to
                </td>
                <td>
                    <input type="date" name="end">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <button name="submit">submit</button>
                </td>
            </tr>
        </table>    
        </form>
        <?php  

        if(isset($_POST['submit'])){
            $res=new resource();
            $c_id=$company_id;
            $u_id=$_SESSION['user_id'];
            if($res->add_experience($c_id,$u_id,$_POST['experience'],$_POST['position'],$_POST['start'],$_POST['end'])){
                echo "<script>alert('success');</script>";
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