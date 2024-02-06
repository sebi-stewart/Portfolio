<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Me</title>

  <base href="http://localhost:8888/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/formatting.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    window.onload = function(){
      runFormatting(true);
      $("#cover").hide();
    }
  </script>

</head>
<body>

  <?php include 'parts/menu.php';?>

  <?php include 'parts/cover.php';?>

  <div id="excl-head-foot">

    <div class="tab">
      <button class="tablinks" onclick="openContent(event, 'About')">About Me</button>
      <button class="tablinks" onclick="openContent(event, 'Experience')">Experience</button>
      <button class="tablinks" onclick="openContent(event, 'Education')">Education</button>
    </div>

    <!-- Page content -->
    <div id="About" class="tabcontent main">
      <h1> About me</h1>
      <p> I am cool</p>
    </div>
    <div id="Experience" class="tabcontent main">
      <h1> Experience</h1>
      <p> I went to blackrock</p>
    </div>
    <div id="Education" class="tabcontent main">
      <h1> Education</h1>
      <p> I went to uni :)</p>
    </div>

  </div>

  <?php include 'parts/footer.php';?>

</body>
</html>
