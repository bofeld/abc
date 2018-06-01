<?php

	include_once ("db.php");

	if (isset ($_POST["regist"]))
	{
		if (!empty($_POST["vorname"]) && !empty( $_POST["nachname"]) && !empty( $_POST["straße"]) && !empty( $_POST["hausnummer"]) && !empty( $_POST["postleitzahl"]) && !empty( $_POST["wohnort"]) && !empty( $_POST["email"]) && !empty( $_POST["passwort"])) 
		{
			$geschlecht = $_POST["geschlecht"]; 
			$vorname = $_POST["vorname"];
			$nachname = $_POST["nachname"];
			$straße = $_POST["straße"];
			$hausnummer = $_POST["hausnummer"];
			$postleitzahl = $_POST["postleitzahl"];
			$wohnort = $_POST["wohnort"];
			$email = $_POST["email"];
			$telefon = $_POST["telefon"];
			$passwort = $_POST["passwort"];
			 /*echo "alle Felder sind ausgefüllt!";*/
			 echo $geschlecht, $vorname;

			 $insert_row = $con-> query("INSERT INTO kunden (geschecht, vorname, nachname, strasse, hausnummer, postleitzahl, ort, email, telefon, password) VALUES ('$geschlecht', '$vorname', '$nachname', '$straße', '$hausnummer', '$postleitzahl', '$wohnort', '$email', '$telefon', '$passwort')");
			if($insert_row){

				echo "ok";
			
			
			}
			else{
				die('Error : ('. $con->errno .') '. $con->error);
			}
		}

	}




?>