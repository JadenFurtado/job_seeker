<?php include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/signup/signup.php');  ?>
<!doctype html>
<?php

if(isset($_SESSION['user_id'])){
    echo "<script>alert('you have already logged in');</script>";
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
    
    <div>
        <div>
            <h3>User Signup</h3>
            <button class="hire">Hire here</button>
            <script type="text/javascript">
                $(".hire").on("click",function(){
                    location.href="https://localhost/jobPrep/signup/hire.php";
                });
            </script>
        </div>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        user name
                    </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        email
                    </td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        phone no
                    </td>
                    <td>
                        <input type="text" name="phone_no">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="pwd">
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
    </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>