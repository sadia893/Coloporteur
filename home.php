 <?php 
session_start();
if(isset($_SESSION['user_data']))
 
	{include 'header2.php' ;
	
}
else{
 include 'header1.php' ;
}

$con= mysqli_connect("localhost","root","","product_details");

		 if(isset($_POST["mz"]))
  {
  	if(isset($_SESSION['user_data']))
 
	{
		header ('Location:allmagazine.php');
	
}
else{
 header ('Location:magazine.php');
}
	  
  }

		 if(isset($_POST["stn"]))
  {
  	if(isset($_SESSION['user_data']))
 
	{
		header ('Location:allstudy.php');
	
}
else{
 header ('Location:study.php');
}
	  
  }

		 if(isset($_POST["bks"]))
  {
  	if(isset($_SESSION['user_data']))
 
	{
		header ('Location:allbook.php');
	
}
else{
 header ('Location:textbook.php');
}
	  
  }
?>

 <!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>COLPORTEUR</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body >
	<div class="header-area">
		<h2>We strive to utilize the power of the internet in its highest peak to fulfil the needs of your busy life</h2>
	</div>

	<?php include "connection_open.php"; ?>
<link href="css/bootstrap.min.css" rel="stylesheet" >


   <div class="container">

   
   	<div class="row">

	<div class="col-md-6 ">
		 <p class="detail fs-1" >We give people the opportunity to buy different books,magazines, and related study materials at low  price so that they can read for themselves and inspire others to read.Finding an online shop that can provide your derivative needs while keeping the costs
 low and quality high can be hard. With us you can put the tension of yours upon us,
 our amicable and dedicated service providers will listen to your needs and provide you with 
the best quality product in the shortest possible time.  <a href="about.php"> More</a></p>
	</div>
	
<div class="col-md-6" >
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/hb2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/section.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
   		<h3 style="padding-top: 50px" class="ctg">Products</h3>
	<?php 
	
            $query = "SELECT * FROM magazine ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result) and ($row["id"]==1 or $row["id"]==2  ) ) {

                    ?>
                    <div class="col-md-4" style="margin-top: 50px">

                        <form method="post" action="magazine.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["images"]; ?>" class="img-responsive">
                                <p class="fs-1 text-danger"><?php echo $row["pname"]; ?></p>
                                <p class=" fs-1 text-danger"><?php echo $row["price"]; ?>tk</p>                               
                            </div>
                        </form>
                    </div>
                    <?php
                     if(isset($_POST["submit3"]))
  {
	  header ('Location:magazine.php');
  }
                }
            }
        ?>
  <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result) and ($row["id"]==1 or $row["id"]==2  or $row["id"]==3  )) {

                    ?>
                    <div class="col-md-4" style="margin-top: 50px">

                        <form method="post" action="study.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <p class="fs-1 text-danger"><?php echo $row["pname"]; ?></p>
                                <p class="fs-1 text-danger"><?php echo $row["price"]; ?>tk</p>
                              
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
         <?php
            $query = "SELECT * FROM book ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)and ($row["id"]==11 or $row["id"]==12  or $row["id"]==13  or $row["id"]==14 or $row["id"]==15 )) {

                    ?>
                    <div class="col-md-4" style="margin-top: 50px">

                        <form method="post" action="textbook.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <p class="fs-1 text-danger"><?php echo $row["pname"]; ?></p>
                                <p class="fs-1 text-danger"><?php echo $row["price"]; ?>tk</p>
                              
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
         <div class="col-md-4 fs-40" style="margin-top: 200px">

                       
                            <div class="seeall">
                               
                                 <a href="AllProduct.php"><p class="fs-1">see all product </p></a>
                               
                            </div>
                        </form>
                    </div>
                    	<h3 style="padding-top: 50px" class="ctg">Categories</h3>
   		<div class="col-md-4">
   			 <form name="ctgform" action ="" method="post">
                  <input type ="submit" class="btn btn-dark fs-1" name= "mz" value="Magazine" style="height: 50px; width: 150px; left: 250; top: 250;">
				</form>  
   		     <div class ="block_images"> <img src="images/slide1.png" class="img-fluid" alt="blog1"> </div>
		</div>

   		 <div class ="col-md-4">
   		 	<form name="ctgform" action ="" method="post">
                  <input type ="submit" class="btn btn-dark fs-1" name= "stn" value="Stationary" style="height: 50px; width: 150px; left: 250; top: 250;">
				</form>  
			 <div class ="block_images"><img src="images/hb2.jpg" class="img-fluid" alt="blog1"></div>
		       
	    </div>
	    <div class ="col-md-4">
		  	 <form name="ctgform" action ="" method="post">
                  <input type ="submit" class="btn btn-dark fs-1" name= "bks" value="Books" style="height: 50px; width: 150px; left: 250; top: 250;">
				</form>  
			 <div class ="block_images"> <img src="images/section.jpg" class="img-fluid" alt="blog1"></div>
		    
   	</div>
</div>

</div>

<?php include 'footer.php' ?>
<script src="js/bootstrap.bundle.min.js" ></script>

</script>
</body>
</html>
