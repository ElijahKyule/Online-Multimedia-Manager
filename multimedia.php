<?php
session_start();
if (!isset($_SESSION['id']) && !isset($_SESSION['user'])) 
{
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		    <title>My Multimedia Home</title>
	      <link href="./resources/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="./resources/all.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="./style.css" rel="stylesheet" type="text/css" media="screen"/>
        <script>window.jQuery || document.write('<script src="./resources/jquery-slim.min.js"><\/script>')</script>
        <script type="text/javascript" src="./resources/bootstrap.bundle.js"></script>
        <script src="./resources/popper.min.js"></script>
        <script src="./resources/bootstrap.js"></script>
        <script src="./resources/all.min.js"></script>
</head>

<body>
 
<div class="row">
<div class="col-12 col-sm-9 col-md-10 col-lg-11 col-xl-11 bg-dark">
  <div class="text-left text-white banner">
      <img src="./images/logo.jpg" style="width: 6%; height: 10%; border-radius: 20px; margin-left: 15px" alt="logo" class="mainlogo img-circle img-thumbnail ">
      &nbsp;
      <span class="bannertext"><u>My ImgViewer</u></span>
    </div>
</div>

<div class="col-12 col-sm-3 col-md-2 col-lg-1 col-xl-1 bg-dark userzone-container">
 <div class="userzone bg-secondary">
  <p>
    <i class="fas fa-user text-white loggedInUserIcon"></i>
    <a class="loggedInUserText text-white">
      <?php
        $loggedInUsername = $_SESSION['user'];
        echo $loggedInUsername;
      ?>
    </a>
  </p>
 </div>
</div>
</div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 bg-dark" style=" padding: 10px; height: 80vh">
            <div class="card" style="margin-left: 15px;">
              <div class="card-header">
                <h5 class="card-title mb-0">My Photos</h5>
              </div>

              <div class="list-group list-group-flush nav-tabs" id="mytabs" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#camera" role="tab">
                  <span><i class="fas fa-camera"></i></span> Camera
                </a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#facebook" role="tab">
                  <span><i class="fab fa-facebook-f"></i></span> FaceBook
                </a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#photogrid" role="tab">
                  <span><i class="fas fa-photo-video"></i></span> PhotoGrid
                </a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#whatsapp" role="tab">
                  <span><i class="fab fa-whatsapp"></i></span> Whatsapp
                </a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#downloads" role="tab">
                  <span><i class="fa fa-download"></i></span> Downloads
                </a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#screenshots" role="tab">
                  <span><i class="far fa-image"></i></span> Screenshots
                </a>
              </div>
            </div>
            <br><br><br><br><br><br><br>
            <a href="resources/logout.php" class="text-white" style="margin-left: 15px">
              <span><i class="fas fa-sign-out-alt"></i>Sign Out</span>
            </a>
          </div>

          <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <div class="tab-content"><!--  start tab content -->

              <!-- start camera -->
              <div class="tab-pane  active" id="camera" role="tabpanel" style="margin-top: 10px; margin-right: 10px;max-height: 78vh; overflow-y: scroll; overflow-x: scroll">
                <div class="card flex- fill">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Camera</h5>
                  </div>
                  <div class="card-body">
<?php
$files = glob("images/camera/*.*");
for ($i=1; $i<count($files); $i++)
{
  $num = $files[$i];
  echo '<img src="'.$num.'" alt="random image" width="330">';
  }
?>
                  </div>
                </div> 
              </div> <!-- end camera -->

              <!-- start facebook -->
              <div class="tab-pane fade" id="facebook" role="tabpanel" style="margin-top: 10px; margin-right: 10px;max-height: 78vh; overflow-y: scroll; overflow-x: scroll">
                <div class="card  flex-fill">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Facebook</h5>
                  </div>
                  <div class="card-body p-20" >
<?php
$files = glob("images/facebook/*.*");
for ($i=1; $i<count($files); $i++)
{
  $num = $files[$i];
  echo '<img src="'.$num.'" alt="random image" width="330" height="200">';
  }
?>
                  </div>
                </div>
              </div> <!-- end facebook -->

              <!-- start photogrid -->
              <div class="tab-pane fade" id="photogrid" role="tabpanel" style="margin-top: 10px; margin-right: 10px;max-height: 78vh; overflow-y: scroll; overflow-x: scroll">
                <div class="card flex-fill" >
                  <div class="card-header">
                    <h5 class="card-title mb-0 text-muted">PhotoGrid</h5>
                  </div>
                  <div class="card-body">
<?php
$files = glob("images/photogrid/*.*");
for ($i=1; $i<count($files); $i++)
{
  $num = $files[$i];
  echo '<img src="'.$num.'" alt="random image" width="330">';
  }
?>
                    
                  </div>
                </div>
              </div> <!-- end photogrid -->

              <!-- start whatsapp images -->
              <div class="tab-pane fade" id="whatsapp" role="tabpanel" style="margin-top: 10px; margin-right: 10px;max-height: 78vh; overflow-y: scroll; overflow-x: scroll">
                <div class="card flex-fill">
                  <div class="card-header">
                    <h5 class="card-title mb-0 text-muted">Whatsapp Images</h5>
                  </div>
                  <div class="card-body">
<?php
$files = glob("images/whatsapp/*.*");
for ($i=1; $i<count($files); $i++)
{
  $num = $files[$i];
  echo '<img src="'.$num.'" alt="random image" width="330">';
  }
?>
                  </div>
                </div>
              </div> <!-- end whatsapp -->
  

              <!-- start download images -->
              <div class="tab-pane fade" id="downloads" role="tabpanel" style="margin-top: 10px; margin-right: 10px;max-height: 78vh; overflow-y: scroll; overflow-x: scroll">
                <div class="card flex-fill">
                  <div class="card-header">
                    <h5 class="card-title mb-0 text-muted">Downloads</h5>
                  </div>
                  <div class="card-body">
<?php
$files = glob("images/downloads/*.*");
for ($i=1; $i<count($files); $i++)
{
  $num = $files[$i];
  echo '<img src="'.$num.'" alt="random image" width="330">';
  }
?>                
                  </div>
                </div>
              </div> <!-- end downloads-->

              <!-- start screenshots -->
              <div class="tab-pane fade" id="screenshots" role="tabpanel" style="margin-top: 10px; margin-right: 10px;max-height:78vh; overflow-y: scroll; overflow-x: scroll">
                <div class="card flex-fill">
                  <div class="card-header">
                    <h5 class="card-title mb-0 text-muted">Screenshots</h5>
                  </div>
                  <div class="card-body">
<?php
$files = glob("images/screenshots/*.*");
for ($i=1; $i<count($files); $i++)
{
  $num = $files[$i];
  echo '<img src="'.$num.'" alt="random image" width="330"height="250">';
  }
?>                  
                  </div>
                </div>
              </div> <!-- end screenshots -->

            </div> <!-- end tab content -->
          </div>
        </div>


 <footer class="footer">
  <div class="row bg-dark">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
	  <hr class="hr-dark">
	  <div class="buttons">
		<p class="text-center">
		  <a href="#">
            <button class="btn btn-social-icon btn-gplus btn-outline"><i class="fab fa-google-plus-g"></i></button>
          </a>&nbsp;
          <a href="#">
            <button class="btn btn-social-icon btn-twitter btn-outline"><i class="fab fa-twitter"></i></button>
          </a>&nbsp;
          <a href="#">
            <button class="btn btn-social-icon btn-facebook btn-outline"><i class="fab fa-facebook-f"></i></button>
          </a>
        </p> 
        <p class="text-center text-white">
          &copy; Copyright: TheeSoftwares.
        </p>   
      </div>
      <hr class="hr-dark">
    </div>
   </div>
  </footer>

</body>
</html>
<script>
  $(document).ready(function(){
    $('#signup').modal({
      backdrop: 'static',
      keyboard: false
    });
  });
</script>
<?php
	//  Close connection
	if(isset($connection))
    {
	mysqli_close($connection);
	}
?>