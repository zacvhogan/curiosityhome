<!DOCTYPE html>
<html lang="en">

<head>
  <title>Curiosity Journey - Photos from Mars</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/planetSystem.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono">
  

  <link rel="icon" href="img/favicon.png">
</head>

<body>

  <div id="preload">
    <img class="preload__icon" src="img/loading_1.svg"></img>    
  </div>


  <div id="app">

    <div class="nav"></div>
    
    <div class="header">
      <h1>Curiosity Journey</h1>
      <h2>Photos from Mars</h2>
    </div>

    <div class="main">

      <div class="date-form-container">
        <form id="date-form">
          <input type="date" name="date" id="date-form__date" required>
          <input type="submit" name="submit" id="date-form__submit" value="Find Photos!">  
        </form>
        <p>
          Curiosity photo manifest latest version available: <span id="manifest-date"></span>
        </p>
      </div>


      <!-- Planet-moon system animation -->
      <div class="background-planet">
        <!-- Inclined plane relative to camera -->
        <div class="background-planet__system">
          <!-- Each orbit div follows the incline set by parent div, and spins to create movement -->
          <div class="background-planet__moon-orbit background-planet__moon-orbit-1">  
            <!-- Moon div, rounded edges -->
            <img class="background-planet__moon background-planet__moon-1" src="img/phobos_1.svg">
            </img>
          </div>
          <div class="background-planet__moon-orbit background-planet__moon-orbit-2">  
            <img class="background-planet__moon background-planet__moon-2" src="img/deimos_1.svg">
            </img>
          </div>
          <!-- Planet SVG element, given 3D transform rotate value inverse of background-planet__system -->
          <img class="background-planet__globe" src="img/mars_1.svg"></img>
        </div>
      </div>

      <!-- <div class="results">
        Results
      </div> -->

    </div>

    <div class="footer">Footer stuff</div>





  </div>  
</body>
<script src="scripts/fetchManager.js"></script>
</html>