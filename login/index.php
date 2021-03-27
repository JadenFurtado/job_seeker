<?php include($_SERVER['DOCUMENT_ROOT'].'/jobPrep/login/login.php');  ?>
<?php

if(isset($_SESSION['user_id'])){
    echo "<script>alert('you have already logged in');location.replace('https://localhost/jobPrep/');</script>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Candidate signup</title>
    <link href="https://localhost/jobPrep/css/sign.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
     crossorigin="anonymous">

</head>

<body>


    <div class="sign-up show" id="Can-signup" >
        <div class="container px-4 py-5 mx-auto">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-10 my-5">
                    <div class="row justify-content-center px-3 mb-3">
                        <h1>Jobify</h1>
                        <h5>Candidate sign up</h5>
                    </div>
                    <h5 class="mb-5 text-center heading">Get ready for your dream job!</h5>
                    <h6 class="msg-info">Create your account now!</h6>
                    <div class="form-group"> 
                        <form method="POST">
                        <label class="form-control-label text-muted" >Candidate Name</label> 
                        <input name="name" type="text" id="comp-name" placeholder="Name" class="form-control" required autofocus> 
                    </div>
                    
                    <div class="form-group">
                        <label class="form-control-label text-muted" >Candidate Email</label>
                        <input type="text" id="email" name="emails" placeholder="Email id" class="form-control"> 
                    </div>

                    <div class="form-group">
                        <label class="form-control-label text-muted" >Candidate Email</label>
                        <input type="text" id="email" name="phone_no" placeholder="Phone no" class="form-control"> 
                    </div>
                    
                    <div class="form-group">
                        <label class="form-control-label text-muted">Password</label>
                        <input type="password" id="psw" name="psw" placeholder="Password" class="form-control">
                    </div>
                    
                    
                    <div class="row justify-content-center my-3 px-3">
                        <button name="signup" class="btn-block btn-primary">Sign up</button> 
                    </div>
                    </form>
                    <div class="bottom text-center mb-5">
                        <a href="#">
                            Already have an account?
                            <button class="btn btn-white ml-2 mx-auto mb-3" id="Can-signup-signin-btn" >
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
if(isset($_POST['signup'])){
if($signup->user_signup($_POST['name'],$_POST['emails'],$_POST['phone_no'],$_POST['psw'])){
    echo "<script>alert('success, you can now loggin');location.replace('https://localhost/jobPrep/login/');</script>";
}
else{
    echo "<script>alert('something went wrong');</script>";
    }
}
    ?>
  <!--login starts here-->  
    <div class="sign-in hide" id="Can-signin">
        <div class="container px-4 py-5 mx-auto">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-10 my-5">
                    <div class="row justify-content-center px-3 mb-3"> 
                        <h1>Jobify</h1>
                        <h5>Candidate sign in</h5>
                    </div>
                    <h5 class="mb-5 text-center heading">Get ready for your dream job!</h5>
                    <h6 class="msg-info">Please login to your account</h6>
                    <div class="form-group"> 
                        <form method="POST">
                        <label class="form-control-label text-muted" >Candidate id</label> 
                        <input type="text" id="email" name="email" placeholder="Email id" class="form-control" required autofocus>
                    </div>
                    <div class="form-group"> 
                        <label class="form-control-label text-muted">Password</label>
                         <input type="password" id="psw" name="pwd" placeholder="Password" class="form-control"> 
                        </div>
                    <div class="row justify-content-center my-3 px-3"> 
                        <button name="submit" class="btn-block btn-primary">Login</button> 
                    </div>
                       </form>
    
                    
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
                <button class="btn btn-white ml-2" id="Can-signin-signup-btn">Sign up</button></a>
            </div>
        </div>
    </div>
<?php

    $user = new Users();
    if(isset($_POST['submit'])){
        if($user->user_login($_POST['email'],$_POST['pwd'])){
            echo "<script>alert('logged in!');location.replace('https://localhost/jobPrep/');</script>";
    }else{
            echo "<script>alert('login failed!');</script>";
        }
    }
?>




    <script src="https://localhost/jobPrep/js/Can_script.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
     crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
     crossorigin="anonymous">
    </script>
</body>

</html>