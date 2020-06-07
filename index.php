<html>
    <head>
    <link rel="stylesheet" type="text/css" href="ziek.css" media="screen"/>
    </head>
    <body>
<script>
let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("active");
});

</script>
 
  <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
    <a href="#" class="logo">Ziek Meldingen</a>
    <ul class="main-nav" id="js-menu">
    <li>
        <a href="/Ziekmeldingen/index.php" class="nav-links">Home</a>
      </li>
      <li>
        <a href="/Ziekmeldingen/Ziektoevoegen.php" class="nav-links">Leerling toevoegen</a>
      </li>
      <li>
        <a href="/Ziekmeldingen/Ziekmelden.php" class="nav-links">Leerling ziekmelden</a>
      </li>
      <li>
        <a href="/Ziekmeldingen/Ziekbeter.php" class="nav-links">Leerling betermelden</a>
      </li>
      <li>
        <a href="/Ziekmeldingen/Ziekdag.php" class="nav-links">Zieke vandaag</a>
      </li>
    </ul>
  </nav>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

      <div class="load">
    <i class="fa fa-heartbeat fa-3x"></i>
  </div>


  <Center>  <h1>Ziekmelden</h1></Center>


		</div>

</body>
</html>