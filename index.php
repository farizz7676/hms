<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
<div class="container">
 	<h1>Welcome to Sterling Hospital's Official Website</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of common man.</p>
    <p><?php include('slideshow.php');?></p>
  <?php 
    if(isset($_POST['lemail'])){
      $i = login($_POST['lemail'],$_POST['lpassword'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
      }
    }else if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      echo "<div class='alert alert-info'>
              <strong>Info!</strong> Login or Regishjhgtfrdfghgfdter to be able to book your appointment.</div>";
    }
    unset($_POST);
  ?>
  <?php
                    echo '<label style=font-size: 20px;
                    border-radius: 10px;
                    align:center;
                    width:50%;"><a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </label></li>'
        ?>
        <?php
                    echo '<a class="nav-link" href="patient_log.php">Patient Login</a>
                  </li>'
        ?>
<?php include("footer.php"); ?>


