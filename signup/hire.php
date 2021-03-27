<?php include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/signup/signup.php');  ?>
<!doctype html>
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
            <h3>Hire on jobPrep</h3>
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
                        company name
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
<!--  -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Company signup</title>
    <link href="https://localhost/jobPrep/css/CompSignin.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
     crossorigin="anonymous">

</head>

<body>


<div class="sign-up show" id="Com-signup" >
    <div class="container px-4 py-5 mx-auto">
        <div class="row justify-content-center my-auto">
            <div class="col-md-8 col-10 my-5">
                <div class="row justify-content-center px-3 mb-3">
                    <h1>Jobify</h1>
                    <h5>Company sign up</h5>
                </div>
                <h5 class="mb-5 text-center heading">Hiring made easy!</h5>
                <h6 class="msg-info">Register your company now!</h6>
                <div class="form-group"> <label class="form-control-label text-muted" >Company Name</label> <input type="text" id="comp-name" placeholder="Name" class="form-control" name="name" required autofocus> 
                </div>
                
                <div class="form-group"> <label class="form-control-label text-muted" >Company Email</label> <input type="text" id="email" name="email" placeholder="Email id" class="form-control"> 
                </div>

                <div class="form-group"> <label class="form-control-label text-muted" >Phone no</label> <input type="text" id="email" name="phone_no" placeholder="Phone No" class="form-control"> 
                </div>
                
                <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
                
                <div class="form-group"> <label class="form-control-label text-muted">Confirm Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
                
                <div class="row justify-content-center my-3 px-3">
                    <button class="btn-block btn-primary">Sign up</button> 
                </div>

                <div class="bottom text-center mb-5">
                    <a href="#">
                        Already have an account?
                        <button class="btn btn-white ml-2 mx-auto mb-3" id="Com-signup-signin-btn" name="submit">
                            Sign in
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
$signup = new Signup();
if(isset($_POST['submit'])){
if($signup->company_signup($_POST['name'],$_POST['email'],$_POST['phone_no'],$_POST['pwd'])){
    echo "<script>alert('success');</script>";
    header("location:https://localhost/jobPrep/index.php");
}
else{
   // echo "<script>alert('something went wrong');</script>";
}
}
    ?>

<div class="sign-in hide" id="Com-signin">
    <div class="container px-4 py-5 mx-auto">
        <div class="row justify-content-center my-auto">
            <div class="col-md-8 col-10 my-5">
                <div class="row justify-content-center px-3 mb-3"> 
                    <h1>Jobify</h1>
                    <h5>Company sign in</h5>
                </div>
                <h5 class="mb-5 text-center heading">Hiring made easy!</h5>
                <h6 class="msg-info">Please login to your account</h6>
                <div class="form-group"> 
                    <label class="form-control-label text-muted" >Company id</label> 
                    <input type="text" id="email" name="email" placeholder="Email id" class="form-control" required autofocus>
                </div>
                <div class="form-group"> 
                    <label class="form-control-label text-muted">Password</label>
                     <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> 
                    </div>
                <div class="row justify-content-center my-3 px-3"> 
                    <button class="btn-block btn-primary">Login</button> 
                </div>

                
                <div class="text-right"> 
                    <a href="#">
                        <small>Forgot Password?</small>
                    </a>
                </div>

            </div> 
        </div>
        <div class="bottom text-center mb-5">
            <a href="#" class=" mx-auto mb-3">
                Don't have an account?
            <button class="btn btn-white ml-2" id="Com-signin-signup-btn">Sign up</button></a>
        </div>
    </div>
</div>



    <script src="https://localhost/jobPrep/js/Com_script.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
     crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
     crossorigin="anonymous">
    </script>
</body>

</html>