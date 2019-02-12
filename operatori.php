<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>TV prin cablu:OPERATORI</title>
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
			<h3> <strong>OPERATORI</strong> </h3>
			<p style="padding-right:50px;">
				În prezent, pe piața RM activează 3 operatori: CHANNEL TV, SUN TV și MOLD TV. Mai jos puteți găsi datele de contact și informația utilă despre fiecare din ei.</p>
		</div>
    </div>

    <div class="line">
		<div class="trei"  style="float:left;">
		  <img src="img/channeltv.jpg" style="width:100%;">
		  <div><h3>CHANNEL TV</h3></div>
		</div>

		<div class="trei" style="margin-top:10px;margin-left:40px; display: inline-block;">
		  <img src="img/suntv.jpg" style="width:100%">
		  <div><h3>SUN TV</h3></div>
		</div>

		<div class="trei"  style="float:right;">
		  <img src="img/moldtv.jpg" style="width:100%">
		  <div><h3>MOLD TV</h3></div>
		</div>
	</div>
	</div>


<?php
include_once("config.php");

	echo '<h2 align=center> TABELUL OPERATORI </h2>';
	echo '<h3 align=center> INFORMAȚII DESPRE TOȚI OPERATORII DISPONIBILI PE PIAȚĂ </h3><hr>';
	$sql = "SELECT * FROM `operatori`";
	
	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Id Operator</th>
		        <th>Nume Operator</th>
		        <th>Director</th>
		        <th>Adresa Sediu</th>
		        <th>Telefon asistență</th>
		      </tr></thead>';


		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['id_op'].'</td>';
			echo'<td>'.$row['nume_op'].'</td>';
			echo'<td>'.$row['director'].'</td>';
			echo'<td>'.$row['adresa_Sediu'].'</td>';
			echo'<td>'.$row['telefon_op'].'</td></tr>';
		}
		echo '</table>';
		echo '<br><br><br> ';


	echo '<h3 align=center> INFORMAȚII DESPRE TOȚI OPERATORII DISPONIBILI PE PIAȚĂ ȘI PACHETELE CORESPUNZĂTOARE</h3><hr>';
	$sql = "SELECT * FROM operatori JOIN pachete on operatori.id_op=pachete.id_op";
	
	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Nume Operator</th>
		        <th>Director</th>
		        <th>Adresa Sediu</th>
		        <th>Telefon asistență</th>
		        <th>Nume Pachet</th>
		      </tr></thead>';


		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['nume_op'].'</td>';
			echo'<td>'.$row['director'].'</td>';
			echo'<td>'.$row['adresa_Sediu'].'</td>';
			echo'<td>'.$row['telefon_op'].'</td>';
			echo'<td>'.$row['nume_pachet'].'</td></tr>';
		}
		echo '</table>';
		echo '<br><br> ';
?>

	<hr style="width:100%; margin-top:0px;margin-bottom:0px;">
    <div class="footer">
            &copy;2017 TVcablu| <a href="https://www.facebook.com/taria.muruta" style="color:#f2F2F2;" target="_blank" >Creat de: Turuta Maria</a>
    </div>

</body>
</html>