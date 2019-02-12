<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>TV prin cablu:UTILIZATORI</title>
    <link href="style.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />   
</head>


<body>

    <div class="nav-bar">
            <ul>
            	<li><a href="index.html" style="font-size:50px;"> <i class="fa fa-home"></i></a></li>
				<li><a href="http://localhost/lucrare%20an/admin.php" style="float:right;font-size:50px;"><i class="fa fa-user"></i></a></li>
            </ul>
    </div>	


	<div style="margin:80px;">
	        <div class="container" style="margin-bottom:40px;text-align:center;">
	 		<div>
				<h3> <strong>UTILIZATORI</strong> </h3>
				<p style="padding-right:50px;">
					Utilizatorii serviciilor de televiziune prin cablu sunt obligați să-și indice datele de contact, care se stochează pe siteul TV prin Cablu.Dacă un lucrător al companiei noastre are nevoie. 
					<br>Mai jos puteți găsi informația utilă despre fiecare utilizator.</p>
					<img src="img/3.jpg" style="width:80%">
			</div>
	    </div>
	</div>

<?php
include_once("config.php");

	echo '<h2 align=center> LISTA UTILIZATORILOR</h2><hr>';
	$sql = "SELECT * FROM utilizatori";
	
	$rez = mysqli_query($conn, $sql);
	$rezz = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>IDNP</th>
		        <th>Nume Prenume</th>
		        <th>Telefon</th>
		        <th>Localitate</th>
		        <th>Adresă</th>
		      </tr></thead>';

		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['idnp'].'</td>';
			echo'<td>'.$row['nume_prenume'].'</td>';
			echo'<td>'.$row['telefon_ut'].'</td>';
			echo'<td>'.$row['localitate'].'</td>';
			echo'<td>'.$row['adresa'].'</td>';
		}
		echo '</table>';
		echo '<br><br> ';
?>


<?php

?>

<?php

?>
	
	<hr style="width:100%; margin-top:0px;margin-bottom:0px;">
    <div class="footer">
            &copy;2017 TVcablu| <a href="https://www.facebook.com/taria.muruta" style="color:#f2F2F2;" target="_blank" >Creat de: Turuta Maria</a>
    </div>


</body>
</html>