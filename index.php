<?php 

    require_once("connection.php");
    $query = " select * from summary ";
    $result = mysqli_query($conn,$query);

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

{
  box-sizing: border-box;
}

 .center {
  margin-left: auto;
  margin-right: auto;
  }

  th {

    background-color: #FFD33D;

  }

  td {

background-color: #FBFFB3;

}
img.one {
  height: 80%;
  width: 50%;
  border: 5px solid rgb(255, 255, 255);
  transition: transform .2s;

}
img.two {
  height: 80%;
  width: 80%;
  border: 5px solid rgb(255, 255, 255);
  transition: transform .2s;

}

.one:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
.two:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
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
        <a class="js-scroll-trigger">Welcome</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About us</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#overview">Overview</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#topic">Topic</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#teaching">Teaching and Learning</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#assessment">Assessment</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#summary">Feedback</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <br>
      <br>
      <h1 class="mb-1">Nycto's Portfolio</h1>
      <h3 class="mb-5">
        <em>-Afiq-Zuhayrah-Hanis-Anis-Izyan-</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">About us</a>
    </div>
    <div class="overlay"></div>
  </header>

   <!-- Services -->
   <section class="content-section bg-primary text-white text-center" id="about">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">About us</h3>
        <h2 class="mb-5">Nycto's Group Member</h2>
      </div>
      <div class="row">

      <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-image rounded-circle mx-auto mb-3">
          <a href="https://shopee.com.my/zuhayrah.amalin"><img class="one" src="../img/zu.jpg" alt=""></a>          
          </span>
          <h4>
            <strong>NIK ZUHAYRAH AMALIN BINTI ZAHARI</strong>
          </h4>
          <p class="text-faded mb-0">System Analyst</p>
        </div>

        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <span class="service-image rounded-circle mx-auto mb-3">
          <a href="https://www.linkedin.com/in/hanis-hashim/"><img class="two" src="../img/hanis.jpg" alt=""></a>
          </span>
          <h4>
            <strong>NURUL HANIS BINTI MOHD HASHIM</strong>
          </h4>
          <p class="text-faded mb-0">Tester</p>
        </div>

        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <span class="service-image rounded-circle mx-auto mb-3">
          <a href="https://www.linkedin.com/in/afiqmustaffa/"><img class="two" src="../img/afiq.jpg" alt=""></a>
      
          </span>
          <h4>
            <strong>MUHAMMAD AFIQ BIN MUSTAFFA</strong>
          </h4>
          <p class="text-faded mb-0">Developer</p>
        </div>

        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
          <span class="service-image rounded-circle mx-auto mb-3">
          <a href="https://ask.fm/izyannanie/best"><img class="two" src="../img/izyan.jpg" alt=""></a>  
          </span>
          <h4>
            <strong>NURIZYAN HANANI BINTI MOHD SAUFI</strong>
          </h4>
          <p class="text-faded mb-0">Project Manager</p>
        </div>

        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-image rounded-circle mx-auto mb-3">
          <a href="https://www.linkedin.com/in/anis-shamshul-240212134/?originalSubdomain=my"><img class="one" src="../img/anis.jpg" alt=""></a>          
          </span>
          <h4>
            <strong>NURUL ANIS BINTI SHAMSHUL BHARIN</strong>
          </h4>
          <p class="text-faded mb-0">System Designer</p>
        </div>
       
      </div>
    </div>
  </section>

   <!-- Callout -->
   <section class="callout" id="overview">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Portfolio Overview</h2>

      <p>This course offers the necessary skills to describe, develop and implement a software quality system, using effective methodologies adapted for the systems development life cycle model. Software quality assurance (SQA) is a process which assures that all software engineering processes, methods, activities and work items are monitored and comply against the defined standards. These defined standards could be one or a combination of any like ISO 9000, CMMI model, ISO15504, etc.

SQA incorporates all software development processes starting from defining requirements to coding until release. Its prime goal is to ensure quality.


 This subject covered 13 topics, which are Software Quality Assurance Challenge, Software Quality, Software Quality Factors, Contract Review, Development Quality Plan, Software Testing Strategy, Software Testing Implementation, Software Maintanance, Procedure, Document Control, Configuration Management and Software Quality Assurance Architecture</p>

    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="topic">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Software Quality Assurance</h3>
        <h2 class="mb-5">Topic 1-13</h2>
      </div>
  <br>
      <div class="row no-gutters">
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic1.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 1</div>
                <p class="mb-0">Software Quality Assurance Challenge</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic2.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 2</div>
                <p class="mb-0">Software Quality</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic3.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 3</div>
                <p class="mb-0">Software Quality Factors</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic4.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 4</div>
                <p class="mb-0">Contract Review</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic5.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 5</div>
                <p class="mb-0">Development Quality Plan</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic6.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 6</div>
                <p class="mb-0">Design Review</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic7.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 7</div>
                <p class="mb-0">Software Testing Strategy</p>
              </div>
            </div>
            <img class="img-fluid" src="img/img7.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic8.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 8</div>
                <p class="mb-0">Software Testing Implementation</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic9.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 9</div>
                <p class="mb-0">Software Maintanance</p>
              </div>
            </div>
            <img class="img-fluid" src="img/img7.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic10.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 10</div>
                <p class="mb-0">Procedure</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic11.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 11</div>
                <p class="mb-0">Document Control</p>
              </div>
            </div>
            <img class="img-fluid" src="img/img23.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic12.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 12</div>
                <p class="mb-0">Configuration Management</p>
              </div>
            </div>
            <img class="img-fluid" src="img/img10.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-4">
          <a class="portfolio-item" href="topic13.php">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Topic 13</div>
                <p class="mb-0">Software Quality Assurance Architecture</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Callout -->
  <section class="callout" id="teaching">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Teaching
        <em>and</em>
        Learning Activities</h2>
        <div class="container"><form action="actionSearch.php" method="POST">
		<input type="text" name="search" placeholder="Search for Exercises..." required/>
		<input type="submit" name="submit-search" value="Search" />
	</form>
  <br>
  <p>...You can search the exercises by topic/title...</p>
  </div>    </div>
  </section>


   <!-- Call to Action -->
   <section class="content-section bg-primary text-white" id="assessment">
    <div class="container text-center">
      <h1 class="mb-4">Assessment</h1>
      <img src="img/assess1.PNG" width="1000" height="500">
      <br>
      <br>
      <a class="btn btn-warning btn-xl" href="/img/assess.PNG" download>Download Now!</a>
    </div>
    </section>

   <!-- Portfolio -->
   <section class="content-section" id="summary">
    <div class="container">

      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Opinions and Suggestions</h3>
        <h2 class="mb-5">Feedback</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="well well-sm">
            <form class="form-horizontal" action="actionSummary.php" method="post">
            <fieldset>      
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name"> <b>Full Name</b></label>
                <div class="col-md-9">
                  <input id="name" name="name" type="text" placeholder="Your name..." class="form-control" required>
                </div>
              </div>
      
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-6 control-label" for="message"> <b>Your Opinion/Suggestion</b> </label>
                <div class="col-md-9">
                  <textarea class="form-control" id="text" name="text" placeholder="Please share your thoughts here..." rows="5" required></textarea>
                </div>
              </div>
      
              <!-- Form actions -->
              <div class="form-group">
                <div class="col-md-6 text-right">
                  <button type="submit" class="btn btn-primary btn-lg" name="btnSummary">Submit</button>
                </div>
              </div>
            </fieldset>
            </form>
            
          </div>
        </div>
        <div class="center">
          <br>
          <br>
        <table class="table table-responsive table-hover">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Suggestion</th>
                  <th>Posted by</th>
              </tr>
          </thead>
          <tbody>

          <?php 
                      
                      while($row=mysqli_fetch_assoc($result))
                      {
                          $no = $row['no'];
                          $text = $row['text'];
                          $name = $row['name'];
              ?>
                      <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $text ?></td>
                          <td><?php echo $name ?></td>
                      </tr>        
              <?php 
                      }  
              ?>    

          </tbody>
      </table>
      </div>
    </div>
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
