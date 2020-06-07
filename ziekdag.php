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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #CD5C5C}
tr:nth-child(odd){background-color: #B22222}

th {
  background-color:#CD5C5C;
  color: black		;
}
tr{
	color:black;
}

td{
	color: black;
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
<table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Klas</th>
            <th>begin datum</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        <?php
		include "ziekmeldingDB.php";
        // Query om vliegtuigen op te halen
        $query = "SELECT * FROM leerlingen  WHERE status = 'ziek' ORDER BY bdatum DESC ";

        $stm = $con->prepare($query);
        if($stm->execute()== true){
            // Vliegtuigen uit het resultaat halen als objecten en opslaan in $airplanes
            $airplanes = $stm->fetchAll(PDO::FETCH_OBJ);
            // Loop door alle vliegtuigen heen
            foreach($airplanes as $vliegtuig){
                // tr in de loop omdat we 1 vliegtuig per row hebben
                echo "<tr>";
                ?>
                
                
               <td><?php echo  $vliegtuig->id."</a>"; ?></td>
                <td><?php echo $vliegtuig->naam; ?> </td> 
                <td><?php echo $vliegtuig->klas; ?> </td> 
                <td><?php echo $vliegtuig->bdatum; ?> </td> 
                <td><?php echo $vliegtuig->status; ?> </br></td>
                <?php
            }
        }
        ?>

    </table>
	
</body>
</html>