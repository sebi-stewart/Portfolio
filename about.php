<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Me</title>

  <base href="http://localhost:8888/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tab_style.css">

  <script src="js/formatting.js"></script>
  <script src="js/tabs.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    window.onload = function(){
      runFormatting(true);
      document.getElementById("defaultOpen").click();
      $("#cover").hide();
    }
  </script>

</head>
<body>

  <?php include 'parts/menu.php';?>

  <?php include 'parts/cover.php';?>

  <div id="excl-head-foot">

    <div class="tab">
      <h1> About </h1>

      <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'About')">Biography</button>
      <button class="tablinks" onclick="openTab(event, 'WorkExperience')">Work Experience</button>
      <button class="tablinks" onclick="openTab(event, 'Education')">Education</button>
      <button class="tablinks" onclick="openTab(event, 'CompExperience')">Competition Experience</button>
    </div>

    <!-- Page content -->
    <div id="About" class="tabcontent main">
      <p></p>
      <p></p>
      <h1> About me</h1>
      <p class="indent+1"></p>
      <p>I'm a highly motivated and versatile student currently studying Computer Science at </p>
      <p> Newcastle university. I have a strong background in both finance and technology. </p>
      <p> Both my education and my work experience have allowed me to obtain a variety of </p>
      <p>technical skills as well as fine-tuning my problem-solving prowess.</p>
      <p></p>
      <p>Apart from being proficient with numbers and computers I also speak three languages</p>
      <p> at a native level, English, German, Spanish and am in the process of learning another</p>
      <p>one, French.</p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p class="indent-1"></p>
    </div>
    <div id="WorkExperience" class="tabcontent main">
      <p></p>
      <p></p>
      <h1>Work Experience</h1>
      <p class="indent+1"></p>
      <h2>Blackrock</h2>
      <p class="indent+1 job">Software Engineer - June 2025 -> June 2025</p>
      <p class="indent+1"></p>
      <p></p>
      <p class="indent-2"></p>
      <h2>Oberbank - 3 Banken Group</h2>
      <p class="indent+1 job">Bank Employee - August 2021</p>
      <p class="indent+1"> Worked in a bank in Mödling,Austria,focusing on excellent customer service.</p>
      <p> Brought in various new customers to the bank by using my language skills.</p>
      <p>Assisted colleagues by solving technical difficulties and with the aforementioned language skills.</p>
      <p>Managed various accounts and evaluated the credit scores of clients.</p>
      <p>Actively participated in miscellaneous administrative tasks.</p>
      <p class="indent-2"></p>
      <h2>Bank Austria - UniCredit</h2>
      <p class="indent+1 job">Bank Employee - July 2019</p>
      <p class="indent+1">Worked in a medium-sized branch of Bank Austria in Vienna, Austria, focusing mainly on administrative tasks whilst also making sure that customers were attended by the correct bankers.</p>
      <p>Responsible for the cash machines in the bank whilst also partially operating the bank cash register.</p>
      <p></p>
      <p class="indent-1"> </p>
      <p></p>
      <p class="indent-1"></p>
      <p> </p>
      <p class="indent-1"></p>
    </div>
    <div id="Education" class="tabcontent main">
      <p></p>
      <p></p>
      <h1> Education</h1>
      <p class="indent+1"> I went to uni :)</p>
    </div>
    <div id="CompExperience" class="tabcontent main">
      <p></p>
      <p></p>
      <h1>Competition Experience</h1>
      <p class="indent+1"></p>
      <h2>The UK & Ireland Programming Contest (UKIEPC)</h2>
      <p class="indent+1 job">21 October 2023</p>
      <p class="indent+1">Achieved second place for Newcastle University</p>
      <p>Worked as a part of a team to create efficient and elegant programming
        solutions to the complex problems given during the competition.</p>
      <p>Acquired skills in algorithmic design and analysis as well as in collaborative
        teamwork and learned how to work productively in a high-pressure environment.</p>
      <p class="indent-2"></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p class="indent-1"></p>
    </div>


  </div>


  <?php include 'parts/footer.php';?>

</body>
</html>
