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
<style>

input[type=text], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000000;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 25%;
  background-color:  #9932CC;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  border: 1px solid #000000;
  
}

input[type=submit]:hover {
  background-color:#DC143C;
}
</style>

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
    <center>
    <form method="POST">
        <label for="txtnaam">Naam</label>
        <input type="text" name="txtnaam" id="txtnaam">
        <br/>
        <label for="txtklas">Klas</label>
        <input type="text" name="txtklas" id="txtklas">
        <br/>
        <label for="txtstatus">Status</label>
        <input type="text" name="txtstatus" id="txtstatus">
        <br/>
        <input type="submit" name="btnSave" value="Opslaan">
    </form>
	</center>
  <?php
include "ZiekmeldingDB.php";


// Als er op de knop btnSave geklikt is
if(isset($_POST['btnSave'])) {
    // Tekstvelden uitlezen en opslaan in variable
    $Naam = $_POST['txtnaam'];
    $Klas = $_POST['txtklas'];
    $Status = $_POST['txtstatus'];

    // Query maken om vliegtuig toe te voegen
    $query = "INSERT INTO leerlingen (naam, klas, status)
              VALUES "."('$Naam', '$Klas', '$Status')";
    // Query klaar zetten om uit te voeren
    $saus = $con->prepare($query);
    // Als de Query succesvol uit gevoerd wordt
    if($saus->execute()){
        echo "leerling is succesvol toegevoegd.";
    } else {
        echo "Iets ging fout!";   
         
    }
}

 
?>
</body>
</html>