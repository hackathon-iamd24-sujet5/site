<?php
$data_recues = array (); // vient de spark, probablement quatre colonnes : état year month et asked

$data_color = array (); // va être donné à l'html, quatre colonnes aussi

$month = $_POST['month'];
$year = $_POST['year'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];

function requete() {

	$table = "meteo";
	$db;
	$sql;
	$sql2;
	$data = array();
	$data2 = array();



	// on se connecte � MySQL

	try {
		$db = new PDO ( 'mysql:host=localhost; dbname=hackathon', 'root', '' );
	} catch ( Exeception $e ) {
		die ( 'Erreur : ' . $e->getMessage () );
	}

	if($asked == "Tmin"){

		// si ça marche pas, hardcode tout ça

		$table = "meteo";
		mysql_select_db ( 'hackathon' , $db );      // selection de base

		$sql = "SELECT COLUMN_NAME FROM meteo WHERE COLUMN_NAME like 'day%'";
		$req = $db->query($sql);
		$data = $req->fetch();

		// print data si possible pour debugger

		$sql2 = "SELECT State,"+$data+" FROM meteo WHERE Year="+$year+"element=Tmin";
		$req2 = $db->query($sql2);
		$data2 = $req->fetch();

		$moyenne = array_sum($data2) / count($data2);

	}else if($asked == "Tmax"){

		$table = "meteo";
		mysql_select_db ( 'hackathon' , $db );

		$sql = "SELECT COLUMN_NAME FROM meteo WHERE COLUMN_NAME like 'day%'";
		$req = $db->query($sql);
		$data = $req->fetch();

		$sql2 = "SELECT State,"+$data+" FROM meteo WHERE Year="+$year+"element=Tmax";
		$req2 = $db->query($sql2);
		$data2 = $req->fetch();

		$moyenne = array_sum($data2) / count($data2);

	}else if($asked == "car"){

		$table = "acc";
		mysql_select_db ( 'hackathon' , $db );
		$sql = "SELECT State,Population FROM acc WHERE Year="+$year;

		$req = $db->query($sql);
		$data = $req->fetch();

	}else if($asked == "suicide"){

		$table = "suicide";
		mysql_select_db ( 'hackathon' , $db );
		$sql = "SELECT State,Death FROM suicide WHERE Year="+$year;

		$req = $db->query($sql);
		$data = $req->fetch();

	}else if($asked == "air"){

		$table = "particules";
		mysql_select_db ( 'hackathon' , $db );
		$sql = "SELECT State,AvgFineParticulateMatter FROM acc WHERE Year="+$year;

		$req = $db->query($sql);
		$data = $req->fetch();

	}else if($asked == "natality"){

		$table = "natality";
		mysql_select_db ( 'hackathon' , $db );
		$sql = "SELECT State,Births FROM acc WHERE Year="+$year;

		$req = $db->query($sql);
		$data = $req->fetch();
	}


}
function setTime() {
	// demander le temps
}
function getTime() {
	return time;
}
function setdata() {
	// optionnel?
	// Si les data de spark sont pas bien rangées, on les transforme pour donner data_color
}
function getDataColor() {
	return data_color ();
}
function getDataRecv() {
	return data_recues ();
}

?>
