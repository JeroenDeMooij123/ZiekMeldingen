<html>
<head>
    <link rel="stylesheet" type="text/css" href="ziekmelden.css" media="screen"/>
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
        <a href="/Ziekmeldingen/Ziekmelden.php" class="nav-links">Ziekmelden</a>
      </li>

    </ul>
  </nav>
  <form method="POST">
  <div class="shade">
		<div class="blackboard">
				<div class="form">
						<p>
								<label>Voornaam: </label>
								<input type="text" name="txtVoornaam"/>
						</p>
						<p>
								<label>Achternaam: </label>
								<input type="text" name="txtAchternaam"/>
						</p>
						<p>
								<label>Klas: </label>
								<input type="text" name="txtKlas" />
						</p>
						<p>
								<label>Datum: </label>
								<input type="text" name="txtDatum"/>
						</p>
						
						<p class="wipeout">
								<input type="submit" name="btnSave" value="Send" />
						</p>
				</div>
		</div>
</div>
</form>
<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
	</div >
	
<?php

include "ZiekmeldingDB.php";


    // Als er op de knop btnSave geklikt is
    if(isset($_POST['btnSave'])) {
        // Tekstvelden uitlezen en opslaan in variable
        $Voornaam = $_POST['txtVoornaam'];
        $Achternaam = $_POST['txtAchternaam'];
        $Klas = $_POST['txtKlas'];
        $Datum = $_POST['txtDatum'];
        // Query maken om vliegtuig toe te voegen
        $query = "INSERT INTO leerlingen (Voornaam, Achternaam, Klas, Datum)
                  VALUES ('$Voornaam', '$Achternaam', '$Klas', '$Datum')";
        // Query klaar zetten om uit te voeren
        $stm = $con->prepare($query);
        // Als de Query succesvol uit gevoerd wordt
        if($stm->execute()){
            echo "Leerling is succesvol toegevoegd.";
        } else {
            echo "Something wrong!";
        }
    }
    ?>
</body>
</html>