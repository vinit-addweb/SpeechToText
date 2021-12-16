<?php
  ob_start();
  error_reporting();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <!--Style link-->
    <link rel="stylesheet" href="../style/home.css" />
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/note.css">

    <!-- FontAwesome link -->
  <script src="https://kit.fontawesome.com/cdb4175f0a.js" crossorigin="anonymous"></script>
    <title>Sign Up </title>
</head>
<body>
<!--Header Section Start-->
<div class="container-fluid">
    <div class="row nav_bar">
      <div class="col-6 d-flex d-flex align-items-center">
        <a href="../index.html">
          <img src="../images/sttlogo.png" alt="" srcset="" width="300" height="50" style="object-fit: contain" /></a>
      </div>
      <div class="col-6 d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold fs-6" aria-current="page" href="../index.html">Home</a>
              </li>
              <!-- <li class="nav-item px-2">
                <p class="nav-link fw-bold fs-6 text-white"><?php echo "Welcome " . $row1['user_name'] ?></p>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold fs-6" aria-current="page" href="Admin_Panel/Logout.php">Logout</a>
              </li> -->
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!--Header Section Start-->


    <div class="form_container">
    <form method="POST" name="dash" onsubmit="return Formval()">
        <h2 class="text-center">Sign Up</h2>
        <hr style="border-top:2px solid white">
        <div class="form-group mt-5">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" autocomplete="off" >
            </div>
            
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="email"  id="email" aria-describedby="emailHelp"
                placeholder="Enter email" autocomplete="off" >
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" autocomplete="off" >
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="cpwd" id="cpwd" placeholder="Enter Confirm Password" autocomplete="off">
            </div>
            
            <button type="submit" class="btn mt-5" name="submit">Submit</button>
            <div class="d-flex justify-content-center mt-3">
                <h6>Already have an account? <span> <a href="Login.php">Sign In</a> </span> </h6>
            </div>
        </div> 
    </form>
    </div>
   


    <!--Footer Section Start-->
<div class="container-fluid footer py-4 mt-5">
    <div class="row text-center">
      <h4>Get In Touch</h4>
      <h6>Speech to Text is just our efforts towards innovation.</h6>
    </div>
    <div class="row">
      <ul class="
            social_icon
            d-flex
            justify-content-center
            align-items-center
            my-3
          ">
        <li>
          <a href="# "><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="# "><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="# "><i class="fa fa-google-plus"></i></a>
        </li>
        <li>
          <a href="# "><i class="fa fa-youtube"></i></a>
        </li>
        <li>
          <a href="# "><i class="fa fa-linkedin-square"></i></a>
        </li>
      </ul>
    </div>
    <hr class="hr_border" />
    <div class="text-center pt-2">
      <p>© 2021 Copyright: Speech to Text</p>
    </div>
  </div>
  <!--Footer Section End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script> 


// form validation

function Formval() {
   
   var name = document.forms["dash"]["name"];
   var email = document.forms["dash"]["email"];
   var password = document.forms["dash"]["pwd"];
   var cpassword = document.forms["dash"]["cpwd"];

   var regex = /^[a-zA-Z]+$/;
   var phoneno = /^\d{10}$/;
   var emailval = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
   var passval = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;;
 
   
   if (name.value == "") {
       window.alert("Please enter your name.");
       name.focus();
       return false;
   }

   if(regex.test(dash.name.value) == false)
   {
       window.alert("Name must be in alphabets only");
       dash.name.focus();
       return false;
   }

   if (email.value == "") {
       window.alert(
         "Please enter a valid e-mail address.");
       email.focus();
       return false;
   }

   if(!email.value.match(emailval))
   {
       alert("Not a valid Email-address");
       return false;
   }
   if (password.value == "") {
       window.alert("Please enter your password");
       password.focus();
       return false;
   }
 
   if(!password.value.match(passval))
   {
       window.alert("password must in between 6 to 20 and use special characters");
       return false;
   }

   if(password !=password){
    window.alert("Password and Confirm password must be same");
       return false;
   }

   return true;
}




</script>
    <script src="../Bootstrap/js/jquery.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



<?php

    include 'connection.php';

    if($_POST['pwd']==$_POST['cpwd']){
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['pwd'];
            $cpassword=$_POST['cpwd'];
            
            $insert_query="Insert into user_detail(user_name,user_email,user_password) values
            ('$name','$email','$password')";
            
            $res=mysqli_query($con,$insert_query);
            if($res){
                header("Location:Login.php");
            }else{
            echo "data not inserted";
            }
        }
    }
    
    mysqli_close($con);


?>