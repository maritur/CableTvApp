
<head>
    <meta charset="utf-8" />
    <title>TV prin cablu:INTEROGARI</title>
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
			<h3> <strong>INTEROGĂRI</strong> </h3>
			<p style="padding-right:50px;">
				Cu ajutorul interogăilor puteți cîte un parametru de filtrare a informației necesare.</p>
		</div>
    </div>


	<div class="container">
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află lista de pachete și datele operatorului:</h4>
		  				<select name="val">
		  					    <option value="ChannelTV" >ChannelTV</option>
							    <option value="MoldTV">MoldTV</option>
							    <option value="SunTV">SunTV</option>
						</select>
		  				<input type="submit" name="submit1" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află informația despre pachetele cu numele:</h4>
		  				<select name="val" placeholder="Indică numele pachetului..">
		  					    <option value="ChannelArt">ChannelArt</option>
							    <option value="ChannelJunior">ChannelJunior</option>
							    <option value="ChannelScience">ChannelScience</option>
							    <option value="ChannelTasty">ChannelTasty</option>
							    <option value="MoldKid">MoldKid</option>
							    <option value="MoldUp">MoldUp</option>
							    <option value="SunCook">SunCook</option>
							    <option value="SunJunior">SunJunior</option>
							    <option value="SunSenior">SunSenior</option>
						</select>
		  				<input type="submit" name="submit2" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află datele de contact ale operatorului:</h4>
		  				<input type="text" name="val" placeholder="Indică numele operatorului..">
		  				<input type="submit" name="submit3" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află lista utilizatorilor domiciliați în localitatea:</h4>
		  				<input type="text" name="val" placeholder="Indică localitatea..">
		  				<input type="submit" name="submit4" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Afișează lista utilizatorilor al căror contract are statutul:</h4>
		  				<select name="val">
		  					    <option value="Activ">Activ</option>
							    <option value="Suspendat">Suspendat</option>
						</select>
		  				<input type="submit" name="submit5" value="Află">
		  			</form>



				</div><br><br>

		  			  <?php
		  			  	   include_once("config.php");
		  			       if(isset($_GET['submit1'])) {
		  			           $val=$_GET['val'];
		  			           interogarea1($val,$conn);
		  			       }
		  			       else if(isset($_GET['submit2'])) {
		  			           $val=$_GET['val'];
		  			           interogarea2($val,$conn);
		  			       }
		  			       else if(isset($_GET['submit3'])) {
		  			           $val=$_GET['val'];
		  			           interogarea3($val,$conn);
		  			       }
		  			       else if(isset($_GET['submit4'])) {
		  			           $val=$_GET['val'];
		  			           interogarea4($val,$conn);
		  			       }
		  			       else if(isset($_GET['submit5'])) {
		  			           $val=$_GET['val'];
		  			           interogarea5($val,$conn);
		  			       }
		  			?>

              <?php

		function interogarea1($val,$conn) {
			echo '<h2 align=center>1) LISTA PACHETELOR ȘI A DATELOR OPERATORULUI..</h2><hr>';
			$sql = "SELECT * FROM pachete NATURAL JOIN operatori WHERE nume_op='".$val."'";

				$rez = mysqli_query($conn, $sql);
	 			echo '<table>
    		   <thead><tr>
		        <th>Nume Pachet</th>
		        <th>Canale Incluse</th>
		        <th>Pret(lei)</th>
		        <th>Nume Operator</th>
		      </tr></thead>';


			while($row = mysqli_fetch_array($rez)) 
			{
			echo'<tr><td>'.$row['nume_pachet'].'</td>';
			echo'<td>'.$row['canale_incluse'].'</td>';
			echo'<td>'.$row['pret'].'</td>';
			echo'<td>'.$row['nume_op'].'</td>';
			}
			echo '</table>';
			echo '<br><br> ';
		}


		function interogarea2($val,$conn) {
				echo '<h2 align=center>2) INFORMAȚIA REFERITOARE LA PACHETUL CĂUTAT:</h2><hr>';
               $sql="SELECT * FROM pachete NATURAL JOIN operatori  WHERE pachete.nume_pachet ='".$val."'";


				$rez = mysqli_query($conn, $sql);
	 			echo '<table>
    		   <thead><tr>
		        <th>Nume Pachet</th>
		        <th>Canale Incluse</th>
		        <th>Preț(lei)</th>
		        <th>Nume Operator</th>
		      </tr></thead>';


			while($row = mysqli_fetch_array($rez)) 
			{
				echo'<tr><td>'.$row['nume_pachet'].'</td>';
				echo'<td>'.$row['canale_incluse'].'</td>';
				echo'<td>'.$row['pret'].'</td>';
				echo'<td>'.$row['nume_op'].'</td></tr>';
			}
			echo '</table>';
			echo '<br><br> ';
		}

		function interogarea3($val,$conn) {
				echo '<h2 align=center>4) DATELE DE CONTACT ALE OPERATORULUI..</h2><hr>';
               $sql="SELECT * FROM operatori  WHERE operatori.nume_op ='".$val."'";

				$rez = mysqli_query($conn, $sql);
	 			echo '<table>
    		   <thead><tr>
		        <th>Nume Operator</th>
		        <th>Director</th>
		        <th>Adresa Sediu</th>
		        <th>Telefon asistență</th>
		      </tr></thead>';


			while($row = mysqli_fetch_array($rez)) 
			{
				echo'<tr><td>'.$row['nume_op'].'</td>';
				echo'<td>'.$row['director'].'</td>';
				echo'<td>'.$row['adresa_Sediu'].'</td>';
				echo'<td>'.$row['telefon_op'].'</td></tr>';
			}
			echo '</table>';
			echo '<br><br> ';
		}


		function interogarea4($val,$conn) {
			   echo '<h2 align=center>1) LISTA UTILIZATORILOR DOMICILIAȚI ÎN LOCALITATEA..</h2><hr>';
               $sql="SELECT * FROM utilizatori  WHERE localitate ='".$val."'";

				$rez = mysqli_query($conn, $sql);
	 			echo '<table>
    		   <thead><tr>
		        <th>IDNP</th>
		        <th>Nume Prenume</th>
		        <th>Telefon</th>
		        <th>Localitate</th>
		        <th>Adresă</th>
		      </tr></thead>';


			while($row = mysqli_fetch_array($rez)) 
				{
					echo'<tr><td>'.$row['idnp'].'</td>';
					echo'<td>'.$row['nume_prenume'].'</td>';
					echo'<td>'.$row['telefon_ut'].'</td>';
					echo'<td>'.$row['localitate'].'</td>';
					echo'<td>'.$row['adresa'].'</td></tr>';
				}
			echo '</table>';
			echo '<br><br> ';
		}



		function interogarea5($val,$conn) {
			   echo '<h2 align=center>3) LISTA UTILIZATORILOR CU STATUTUL..</h2><hr>';
				$sql = "SELECT * FROM contracte  NATURAL JOIN utilizatori WHERE contracte.statut='".$val."'";

				$rez = mysqli_query($conn, $sql);
	 			echo '<table>
    		   <thead><tr>
		        <th>IDNP</th>
		        <th>Nume Prenume</th>
		        <th>Telefon</th>
		        <th>Localitate</th>
		        <th>Adresă</th>
		        <th>Nr. contract</th>
		        <th>Id_pachet</th>
		        <th>Data început</th>
		        <th>Data ultimei ac.</th>
		        <th>Statut</th>
		      </tr></thead>';


			while($row = mysqli_fetch_array($rez)) 
				{
					echo'<tr><td>'.$row['idnp'].'</td>';
					echo'<td>'.$row['nume_prenume'].'</td>';
					echo'<td>'.$row['telefon_ut'].'</td>';
					echo'<td>'.$row['localitate'].'</td>';
					echo'<td>'.$row['adresa'].'</td>';
					echo'<td>'.$row['nr_contract'].'</td>';
					echo'<td>'.$row['id_pachet'].'</td>';
					echo'<td>'.$row['data_inceput'].'</td>';
					echo'<td>'.$row['data_ultima_ac'].'</td>';
					echo'<td>'.$row['statut'].'</td></tr>';
				}
			echo '</table>';
			echo '<br><br> ';
		}



		?>
    <br>
</div>

	<hr style="width:100%; margin-top:0px;margin-bottom:0px;">
    <div class="footer">
            &copy;2017 TVcablu| <a href="https://www.facebook.com/taria.muruta" style="color:#f2F2F2;" target="_blank" >Creat de: Turuta Maria</a>
    </div>

</body>
</html>