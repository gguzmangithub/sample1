<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="breads, cakes, cookies, custom cakes.">
  <meta name="description" content="Sol's Cookies & Cakes lovingly makes homemade cookies, breads and custom cakes for any occassion.">
  <link rel="stylesheet" href="css/style.css" />
  <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

  <title>Contact Sol's C&amp;C</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body id="contactPage">
  <!-- Calls Standard Header -->
  <Header>
    <?php include("includes/header.php"); ?>
  </Header>
  <!-- Calls Standard Navigation -->
  <nav>
    <?php include("includes/navigation.php"); ?>
  </nav>

  <h3 class="contactform">Contact Sol's Cookies & Cakes:</h3>
  <!-- form information sent from browser to server as part of HTTP body; not in URL -->
  <!-- http://cscie12.dce.harvard.edu/echo will provide information in regards to each
  field in the form once the send button is clicked -->
  <form class="contactform" method="post"
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
    <input type="radio" name="prefered" value="mail">  E-mail
    <br>
    <input type="radio" name="prefered" value="phone" checked>  Phone
    <br><br>
    Please tell us what products you are interested in:<br>
    <textarea name="message" rows="10" cols="75">

    </textarea><br><br>
  </fieldset>
  <br><br>
  <!--Submit button: submits/posts form information -->
  <input type="submit" value="Send">
  <!--Reset button: resets all fields in the form -->
  <input type="reset" value="Reset">
</form>
<div id="footerdivabout">
  <!-- Calls Standard Footer -->
  <footer>
    <?php include("includes/footer.php"); ?>
  </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
</body>
</html>
