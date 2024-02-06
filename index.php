<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>

  <base href="http://localhost:8888/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index_style.css">

  <script src="js/formatting.js"></script>
  <script src="js/typewriter.js"></script>

  <script>
    window.onload = function(){
      runFormatting();

      const myTimeout = setTimeout(typeWriter, 500);
    }
  </script>

</head>
<body>

  <?php include 'parts/menu.php';?>

  <div id="excl-head-foot">

    <!-- Page content -->
    <div id="main">

      <p></p>
      <p></p>
      <p class="indent+1"></p>

      <p></p>
      <p></p>
      <p class="indent+1"></p>

      <p></p>
      <p></p>
      <p class="indent+1"></p>

      <p></p>
      <p class="indent+1"></p>

      <p></p>

      <p class="indent+1" id="intro">Hello! I am</p>
      <div><span id="name"></span></div>
      <p id="job">I am a software engineer</p>

      <p class="indent-1"></p>
      <p></p>

      <p class="indent-1"></p>
      <p></p>

      <p class="indent-1"></p>
      <p></p>
      <p></p>

      <p class="indent-1"></p>
      <p></p>
      <p></p>

      <p class="indent-1"></p>
      <input type="button" onclick="typeWriter()" value="Ajouter" class="submission-button">



    </div>

  </div>

  <?php include 'parts/footer.php';?>



</body>
</html>
