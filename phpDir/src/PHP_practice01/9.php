<?php
 $name = "testing";
 $count = 5;
 $expiry = time() + (60*60*24*7);
 
 setcookie($name, $value, $expiry);

?>

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php
   

    if (isset($_COOKIE[$name])) {
      $display = $_POST[$expiry];
      echo $display;
    } else {
      $display = "";
    }
    

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

  // if(isset($_POST['submit'])) {
  //   echo $_GET['submit'];
  // }
		?>

<!-- <a href="9.php?source=1234">Click Here!</a> -->



  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>