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

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  <style>

  th {

    background-color: #FFD33D;

  }

  td {

background-color: #FBFFB3;

}

img.one {
  height: 70%;
  width: 70%;
  border: 5px solid rgb(255, 255, 255);
}
  </style>

</head>
<body>

<section class="content-section" id="topic">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Software Quality Assurance</h3>
        <h2 class="mb-5">Topic 1-13</h2>
      </div>
      <div class="container"><form action="search.php" method="GET">
		<input type="text" name="query" />
		<input type="submit" value="Search" />
	</form>
  </div>
  <br>
      <div class="row no-gutters">
        <div class="col-lg-4">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
              <?php
	$query = $_GET['query']; 

	$min_length = 3;
	
	if(strlen($query) >= $min_length){ 

		$query = htmlspecialchars($query); 
		
		$query = mysql_real_escape_string($query);
		
		$raw_results = mysql_query("SELECT * FROM topic
			WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
			
		
		if(mysql_num_rows($raw_results) > 0){ 
			
			while($results = mysql_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
                echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
                <div class="h2"><?php echo $topic ?></div>
                <p class="mb-0"><?php echo $text ?></p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
       
      </div>
    </div>
  </section>
<?php
	$query = $_GET['query']; 

	$min_length = 3;
	
	if(strlen($query) >= $min_length){ 

		$query = htmlspecialchars($query); 
		
		$query = mysql_real_escape_string($query);
		
		$raw_results = mysql_query("SELECT * FROM topic
			WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
			
		
		if(mysql_num_rows($raw_results) > 0){ 
			
			while($results = mysql_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
                echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html>