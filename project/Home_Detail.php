
<?php
  ob_start();
  error_reporting();
  session_start();
  include 'Admin_Panel/connection.php';
  $email = $_SESSION['email'];
  $query1 = mysqli_query($con, "select user_name from user_detail where user_email='$email'") or die('Error in query');
  $row1 = mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
  <!--Style link-->
  <link rel="stylesheet" href="style/home.css" />
  <link rel="stylesheet" href="style/styles.css"/>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <!-- FontAwesome link -->
  <script src="https://kit.fontawesome.com/cdb4175f0a.js" crossorigin="anonymous"></script>
  <title>Speech To Text | Front Page</title>
</head>

<body>
  <!--Header Section Start-->
  <div class="container-fluid">
    <div class="row nav_bar">
      <div class="col-6 d-flex d-flex align-items-center">
        <a href="index.html">
          <img src="images/sttlogo.png" alt="" srcset="" width="300" height="50" style="object-fit: contain" /></a>
      </div>
      <div class="col-6 d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link active fw-bold fs-6" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item px-2">
                <p class="nav-link fw-bold fs-6 text-white"><?php echo "Welcome " . $row1['user_name'] ?></p>
              </li>
              <li class="nav-item px-2">
                <?php  if($_SESSION['email'] == ''){
                          echo "<a class='nav-link active fw-bold fs-6' aria-current='page' href='Admin_Panel/SignUp.php'>Register</a>";
                        }else{
                          echo "<a class='nav-link active fw-bold fs-6' aria-current='page' href='Admin_Panel/Logout.php'>Logout</a>";
                        }
                ?>
                
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!--Header Section Start-->

  <!--Mid Section Start-->
  <div class="note_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <div class="note-wrapper-outer">
            <div class="not_title">
              <div class="row">
                <div class="col d-flex justify-content-center text-white">
                  <h2>Add New Notes</h2>
                </div>
              </div>
            </div>
            <div class="note_wrapper_inner" style="height: 68vh;">
              <div class="note">
                <textarea class="form-control" id="note-textarea" rows="17" placeholder="Create a new note by typing or using voice recognition."></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
  </div>
  <!--Mid Section End-->

  <!--Bottom Navbar Start-->
  <div class="bottom-navbar" style="margin-top:-12px;">
    <div class="circle" style="z-index:1;">
      <button id="start-record-btn" title="Start Recording" class="btn_start"
        style="background-color: green; display: block;" onclick="pausebtn()">
        <i class="fas fa-microphone fa-lg"></i>
      </button>

    </div>

    <div class="circle" style="z-index:1;">
      <button id="pause-record-btn" title="Pause Recording"
        style=" background-color: red;  padding:0px 7px;z-index:1; display:none;" onclick="pausebtn()">
        <i class="fas fa-microphone-slash fa-lg"></i>
      </button>
    </div>

 
    <form method="post">
    <button id="save-note-btn" title="Save Note" name="savebtn" style="background-color: #051937;z-index:1 ;">
      <i class="far fa-save fa-lg"></i>
    </button>
    </form>
  </div>
  <?php
session_start();
include 'Admin_Panel/connection.php';
if (isset($_POST['savebtn'])) {
  if($_SESSION['email'] == ''){
  header('Location:Admin_Panel/Login.php');
  }
}

?> 
  <!--Bottom Navbar Start-->

  <!--Paragraph box Section Start-->
  <div class="paragraph mt-5">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <p id="recording-instructions" style="border: 2px blue solid;">Press the <strong style="color:green">Green</strong> button and
          allow access.<br>
          Press the <strong style="color:red">Red</strong> button and stop access.</p>
      </div>
    </div>
  </div>
  <!--Paragraph box Section Start-->

  <!--Second Paragraph box Section Start-->
  <div class="second_box">
    <div class="container w-50">
      <div class="row">
        <h3 style="text-align: center;">My Notes</h3>
        <ul id="notes" class="notes_detail" style="border: 2px green solid;background-color: rgb(251, 237, 218);list-style-type:none">
          <li>
            <p class="no-notes">You don't have any notes.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--Second Paragraph box Section Start-->

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

  <!-- store data in php varibale -->

    
  <?php  $a ="<script>

var a = document.getElementById('note-textarea').value;

document.write(a);

</script>";

echo $a;
?>

  <!-- store data in php varibale end -->

  <script src=" Bootstrap/js/jquery.js">



  </script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="scripts.js"></script>
</body>

</html>