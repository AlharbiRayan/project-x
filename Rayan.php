<?php
$lessonName = "Concatenation";
$homePage  =  " PHP Variables and ". $lessonName;
$heading   =  " Welcome To RAYAN Web Site ";
$brief     =  " This Lesson Talk About Variables And " . $lessonName ." And How To Use It ";
$name      =  " Name: Rayan Alharbi ";
$city      =  " City: in Riyadh ";
$jop       =  "Jop: Programer";
$text      =  "You have successfully installed XAMPP on this system! Now you can start using Apache,
               MariaDB, PHP and other components. You can find more info in the FAQs section or check 
			   the HOW-TO Guides for getting started with PHP applications.
               XAMPP is meant only for development purposes. It has certain configuration settings
			    that make it easy to develop locally but that are insecure 
				if you want to have your installation accessible to others.
               Start the XAMPP Control Panel to check the server status.";

?>

<!DOCTYPE html>
<html>
      <head>

      	<meta charset="utf-8">
      	<title><?php echo $homePage;?></title>

      </head>

      <body>    
		
         

         <h1><?php echo $heading; ?></h1>
         <p><?php echo $brief; ?></p>


      	     <h2><?php echo "Heading";?></h2>
      	     <p><?php echo "This Is Paragraph From " . $homePage ;?></p>


      	     <?php echo"
                  <h3>Heading Web Site</h3>
      	          <p>This Is Paragraph From PHP " .$lessonName . " In Web Site</p>
      	          ";
      	     ?>

      	     <?php echo"

      	            <p><h4> $name</h4></p>
      	            <p><h4> $city</h4></p>
      	     ";?>
			 <?php echo" <p><h4> $jop</h4></p>";?>

			 <?php echo"this is text<p><h5>$text</h5></p>";?>

			 <?php echo"this is text<p><h5>$text</h5></p>";?>

      </body>
</html>