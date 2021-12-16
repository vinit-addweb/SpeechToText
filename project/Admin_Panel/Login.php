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
    

  <!--Style link-->
  <link rel="stylesheet" href="../style/home.css" />
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <!-- FontAwesome link -->
  <script src="https://kit.fontawesome.com/cdb4175f0a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <!--Style link-->

    <link rel="stylesheet" href="../style/login.css">
    <title>Login </title>
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
    <form class=" " method="POST">
        <h2 class="text-center">Login</h2>
        <hr style="border-top:2px solid white">
        <div class="form-group mt-5">
            
            <div class="form-group mt-3">
            <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp"
                placeholder="Enter email" autocomplete="off" required>
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" autocomplete="off" required>
                <!-- <a href="#">Forget Password?</a> -->
            </div>

        </div>
        <button type="submit" class="btn mt-5" name="submit" >Submit</button>
        <div class="d-flex justify-content-center mt-3">
            <h6>Don't have account? <span> <a href="SignUp.php">Sign Up</a> </span> </h6>
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
    <script src="../Bootstrap/js/jquery.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
 include 'connection.php';

 if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['pwd'];

    $sql="select * from user_detail where user_email='$email' and user_password='$password'";

    $query=mysqli_query($con,$sql) or die("Error in Query");
        $rows=mysqli_num_rows($query);

        if($rows>0){
            session_start();
            $_SESSION['email']=$email;
            header('Location:../Home_Detail.php');
            echo "Login successfully";
        }else{
            echo "Incorrect User Or Password";
        }
        
        mysqli_close($con);
    }

?>