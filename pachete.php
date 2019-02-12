<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>TV prin cablu:PACHETE</title>
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
				<h3> <strong>PACHETE</strong> </h3>
				<p style="padding-right:50px;">
					Operatorii CHANNEL TV, SUN TV și MOLD TV pun la dispoziție o gamă largă de pachete, din diferite domenii de interes ale clienților. 
					<br>Mai jos puteți găsi d informația utilă despre fiecare pachet.</p>
					<img src="img/3.jpg" style="width:80%">
			</div>
	    </div>
	</div>

<?php
 include_once("config.php");
 	
 	echo '<h2 align=center> TABELUL PACHETE </h2>';
	echo '<h3 align=center> INFORMAȚII DESPRE TOATE PACHETELE DISPONIBILE PE PIAȚĂ</h3><hr>';
	$sql = "SELECT * FROM pachete LEFT JOIN operatori on pachete.id_op=operatori.id_op";
	
	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Id Pachet</th>
		        <th>Nume Pachet</th>
		        <th>Canale Incluse</th>
		        <th>Preț(lei)</th>
		        <th>Nume Operator</th>
		      </tr></thead>';


		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['id_pachet'].'</td>';
			echo'<td>'.$row['nume_pachet'].'</td>';
			echo'<td>'.$row['canale_incluse'].'</td>';
			echo'<td>'.$row['pret'].'</td>';
			echo'<td>'.$row['nume_op'].'</td></tr>';
		}
		echo '</table>';
		echo '<br><br> ';
?>



<?php
	echo '<h2 align=center> LISTA PACHETELOR OPERATORULUI SunTV</h2><hr>';
	$sql = "SELECT * FROM pachete NATURAL JOIN operatori WHERE nume_op='SunTV'";
	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Nume Pachet</th>
		        <th>Canale Incluse</th>
		        <th>Pret(lei)</th>
		        <th>Nume Operator</th>
		      </tr></thead>';

		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['nume_pachet'].'</td>';
			echo'<td>'.$row['canale_incluse'].'</td>';
			echo'<td>'.$row['pret'].'</td>';
			echo'<td>'.$row['nume_op'].'</td>';
		}
		echo '</table>';
		echo '<br><br> ';
?>

<?php
	echo '<h2 align=center> LISTA PACHETELOR OPERATORULUI MoldTV</h2><hr>';
	$sql = "SELECT * FROM pachete NATURAL JOIN operatori WHERE nume_op='MoldTV'";
	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Nume Pachet</th>
		        <th>Canale Incluse</th>
		        <th>Pret(lei)</th>
		        <th>Nume Operator</th>
		      </tr></thead>';

		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['nume_pachet'].'</td>';
			echo'<td>'.$row['canale_incluse'].'</td>';
			echo'<td>'.$row['pret'].'</td>';
			echo'<td>'.$row['nume_op'].'</td>';
		}
		echo '</table>';
		echo '<br><br> ';
?>

<?php
	echo '<h2 align=center> LISTA PACHETELOR OPERATORULUI ChannelTV</h2><hr>';
	$sql = "SELECT * FROM pachete NATURAL JOIN operatori WHERE nume_op='SunTV'";
	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Nume Pachet</th>
		        <th>Canale Incluse</th>
		        <th>Pret(lei)</th>
		        <th>Nume Operator</th>
		      </tr></thead>';

		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['nume_pachet'].'</td>';
			echo'<td>'.$row['canale_incluse'].'</td>';
			echo'<td>'.$row['pret'].'</td>';
			echo'<td>'.$row['nume_op'].'</td>';
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