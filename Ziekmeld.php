<html>
<body>
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
      background-color:  #46E866;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      border: 1px solid #000000;
      
    }
    
    input[type=submit]:hover {
      background-color:#59FFA9;
    }
</style>
<?php
	include("ziekmeldingDB.php");

	if(isset($_POST['btnOpslaan']))
	{
		//Update naar de database
		$naam = $_POST['txtnaam'];
        $klas = $_POST['txtklas'];
        $bdatum = $_POST['txtbdatum'];
		$status = $_POST['txtStatus'];
		$details = $_POST['txtdetails'];
		/*
		Ophalen id uit de URL. Deze is nodig 
		om een specifiek smaak aan te passen. Dit moet 
		ALTIJD een unieke waarde zijn 
		*/
		$ID = $_GET['ID'];
		//Update query, waarin een voorwaarde gesteld wordt.
		// nl smid dat meekomt uit de URL.
		$query = "UPDATE leerlingen SET naam = '$naam', klas = '$klas', bdatum = '$bdatum', status = '$status', details = '$details' WHERE ID = $ID";
		$stm = $con->prepare($query);
        if($stm->execute())
        
		{
			header('Location: /Ziekmeldingen/Ziekbeter.php' 	);
		}
	}
	
	
	//id ophalen uit de URL
	$ID1 = $_GET['ID'];
	
	//QUERY maken die voldoet aan het id
	$query = "SELECT * FROM leerlingen WHERE ID = $ID1";
	//Voorbereiden op de database
	$stm = $con->prepare($query);
	//Query uitvoeren op de database
	if($stm->execute())
	{
		//Een resultaat ophalen
		$res = $stm->fetch(PDO::FETCH_OBJ);
		?>
		<form method="POST">
		<label>id</label></br>	<input type="text" name="txtID" readonly value="<?php echo $res->id; ?>"/></br>
		<label>Naam</label></br>	<input type="text" name="txtnaam" readonly value="<?php echo $res->naam; ?>"/></br>
		<label>Klas</label></br>	<input type="text" name="txtklas" readonly value="<?php echo $res->klas; ?>"/></br>
        <label>Begindatum</label></br>   <input type="text" name="txtbdatum" value="<?php echo $res->bdatum; ?>"/></br>
		<label>status</label></br>	<input type="text" name="txtStatus"readonly value="ziek"/></br>
		<label>details</label></br>	<input type="text" name="txtdetails" value="<?php echo $res->details; ?>"/></br>
		<input type="submit" name="btnOpslaan" value="Opslaan"/>
		
		</form>
		
<?php
	}
?>
</body>
</html>