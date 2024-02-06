<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projects</title>

  <base href="http://localhost:8888/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/formatting.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    window.onload = function(){
      runFormatting(true);
      $("#cover").hide();
      console.log("Hide")
    }
  </script>

</head>
<body>

  <?php include 'parts/menu.php';?>

  <?php include 'parts/cover.php';?>

  <div id="excl-head-foot">

    <!-- Page content -->
    <div class="main">
      <h1>Heyo</h1>

    </div>

  </div>

  <?php include 'parts/footer.php';?>

</body>
</html>
