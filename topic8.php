<?php 

    require_once("connection.php");
    $result = $conn->query("SELECT * FROM topic8 "); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Group Portfolio</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  <style>

img.one {
  height: 50%;
  width: 50%;
  border: 5px solid rgb(255, 255, 255);
}
  </style>

</head>

<body id="page-top">

<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger">Topic 8</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="index.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#overview">Overview</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#mindmap">MindMap</a>
      </li>
    </ul>
  </nav>

<!-- Callout -->
<section class="callout" id="overview">
    <div class="container text-center">
      <h1 class="mx-auto mb-5">Topic 8: Software Testing Implementation</h1>
    
      <p>In this chapter we will learn about :                                                                      -testing process    
- test case design
-automated testing  
-alpha& beta site testing programs</p>

    </div>
  </section>

   <!-- Services -->
    
   <section class="content-section bg-primary text-white text-center" id="mindmap">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Topic 8</h3>
        <h2 class="mb-5">Mindmap</h2>
      </div>

      <?php if($result->num_rows > 0){ ?>
      <div class="row">
        <div class="col-lg-12 col-md-12 mb-5 mb-md-0">
        <?php while($row = $result->fetch_assoc()){ ?> 
          <span class="service-image rounded-circle mx-auto mb-6">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['mindmap8']); ?>" />   
          </span>
          <br>
          <hr>
          <button><a href="actionDelete8.php?Del=<?php echo $row['no'] ?>">Delete</a></button>

<hr>
          <?php } ?>      
          <br>  
        </div>
          <br>
      </div>
      <br>
      <?php } ?>
      
      <br>
      <br>
      <br>

      <form action="upload8.php" method="post" enctype="multipart/form-data">
      <h4>Add new MindMap:</h4>
      <br>
                    <div class="form-group">
                    <input id='mindmap8' class="form-control" name="mindmap8" type="file" multiple="multiple" required>
                    </div>
                        <input class="btn btn-warning btn-block text-white" type="submit" name="btnSub8" value="Submit">

</form>

    </div>

  </section>

  

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p class="text-muted small mb-0">Copyright &copy; Nycto 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
