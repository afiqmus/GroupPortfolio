<?php 
    require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Group Portfolio</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  <style>


.hello{


    background-color: #ffffd8;


}

  </style>

</head>

<body id="page-top">

  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger">Exercises</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="index.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#teaching">Teaching and Learning</a>
      </li>
    </ul>
  </nav>

  <section class="callout" id="teaching">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Teaching
        <em>and</em>
        Learning Activities</h2>
        <div class="container"><form action="actionSearch.php" method="POST">
		<input type="text" name="search" placeholder="Search for Exercises..." />
		<input type="submit" name="submit-search" value="Search" />
	</form>
  <br>
  <p>...You can search the exercises by week/topic/title...</p>
  
  </div>    </div>
  <div class="hello">

<?php

if (isset($_POST['submit-search'])) {

    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM exercises WHERE topic LIKE '%$search%' OR title LIKE '%$search%' OR question LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "
<div>

<h3>".$row['topic']."</h3>
<p>".$row['title']."</p>
<p>".$row['question']."</p>
<a href=".$row['exercise'].">Link to Exercise</a>
</div>";




        }

    }

    else {
        echo "There is no result match";
    }
}


?>




</div>
</section>

  

  <footer class="footer text-center">
    <div class="container">
      <p class="text-muted small mb-0">Copyright &copy; Nycto 2020</p>
    </div>
  </footer>

  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
