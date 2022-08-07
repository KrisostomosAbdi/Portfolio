<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="style/style.css">

    <title>Krisostomos Abdi</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(211, 211, 211, 0.6);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="cheese" src="assets/image7.webp" width="35px" height="35px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Certificates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Project</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <center><span id="displayDateTime"></span></center>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--jumbotron-->
    <div class="jumbotron container-fluid p-2" style="background-color: rgba(255, 255, 255, 0.6);">
      <center>
        <div class="content">
        <img class="cheese" src="assets/icon2.webp" width="163px" height="163px"><br>
        <h1 class="display-5" id="output">
        </h1>
        <p class="h3">Welcome to my portfolio website</p>
        <hr class="my-4">
        <p>My name is Abdi. I am a programmer who passionate in web programming and android development</p>
        </div>
      </center>
    </div>

    <!--main row-->
    <div class="container-fluid">
      <div class="row">
        <a href="profile.php" class="menu animate__animated animate__fadeIn">
          <div style="background-color:rgba(211, 211, 211, 0.6);">
                <img class="icon" src="assets/profile.webp" sizes="100%" width="90px" height="90px" style="margin-bottom: 12px;"><br>
                <span><h5>About Me</h5></span>
          </div>
        </a>
        <a href="experience.php" class="menu animate__animated animate__fadeIn">
          <div style="background-color:rgba(128, 128, 128, 0.6);">
                <img class="icon1" src="assets/experience.webp" sizes="100%" width="100px" height="100px" style="margin-bottom: -5px;"><br>
                <h5 style="margin-top: 5px;">Organization & Experiences</h5>
            </div>
          </a> 
          <a href="" class="menu animate__animated animate__fadeIn">
            <div style="background-color:rgba(211, 211, 211, 0.6);">
                <img class="icon1" src="assets/sertifikat.webp" sizes="100%" width="105px" height="105px" style="margin-bottom: -13px;"><br>
                <h5 style="margin-top: 5px;">Certificates</h5>
            </div>
          </a>
          <a href="" class="menu animate__animated animate__fadeIn">
            <div style="background-color:rgba(128, 128, 128, 0.6);">
                <img class="icon" src="assets/project.webp" sizes="100%" width="90px" height="90px"><br>
                <h5 style="margin-top: 5px;">Project</h5>
            </div>
          </a>
      </div>
    </div>
    
  <script type="text/javascript">
    function addZero(i) {
      if (i < 10) {i = "0" + i}
      return i;
    }
    var today = new Date();
    var day = today.getDay();
    var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];

    var date = addZero(today.getDate())+'-'+(addZero(today.getMonth()+1))+'-'+addZero(today.getFullYear());
    var time = addZero(today.getHours()) + ":" + addZero(today.getMinutes());
    
    document.getElementById("displayDateTime").innerHTML = time+' '+daylist[day]+', '+date;

  </script>
  <script type="text/javascript">
    // Get the current Hour. Try to apply the conditional logic to check if its morning, afternoon, evening or night.
    var currentHour = new Date().getHours(),
    output = document.getElementById('output');

    if ((currentHour >= 5) && (currentHour < 12)) {
        output.innerHTML += "Good Morning";
    } else if ((currentHour >= 12) && (currentHour < 16)) {
        output.innerHTML += "Good Afternoon";
    } else if ((currentHour >= 16) && (currentHour < 21)) {
        output.innerHTML += "Good Evening";
    } else {
        output.innerHTML += "Good Night";
    }

  </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>