<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta name="keywords" content="breads, cakes, cookies, custom cakes.">
  <meta name="description" content="Sol's Cookies & Cakes lovingly makes homemade cookies, breads and custom cakes for any occassion.">
  <title>Contact Sol's C&amp;C</title>
    <link rel="stylesheet" href="css/style.css" />
      </head>
  <body id="productsPage">
	  <Header>
   <?php include("includes/header.php"); ?>    
  </Header>
  <nav role="navigation">
<?php include("includes/navigation.php"); ?>
</nav>

<h3>Contact Sol's Cookies & Cakes:</h3>

<form method="post"
       action="http://cscie12.dce.harvard.edu/echo"
	   enctype="application/x-www-form-urlencoded" >
<fieldset>
Name:<br>
<input type="text" name="name" size="75" value=""><br><br>
E-mail:<br>
<input type="text" name="mail" size="75" value=""><br><br>
Phone:<br>
<input type="text" name="phone" value=""><br>
<br>
Prefered Method of Contact:<br>
<input type="radio" name="prefered" value="mail">E-mail
<br>
<input type="radio" name="prefered" value="phone" checked>Phone
<br><br>
Please tell us what products you are interested in:<br>
<textarea name="message" rows="10" cols="75">

</textarea><br><br>
</fieldset>
<br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>
<div id="footerdivabout">
 <footer>
<?php include("includes/footer.php"); ?>
</footer>
</div>
  </body>
</html>