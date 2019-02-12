<head>
    <meta charset="utf-8" />
    <title>TV prin cablu:SERVICII</title>
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
			<h3> <strong>SERVICII</strong> </h3>
			<p style="padding-right:50px;">Cu ajutorul serviciilor puteți indica mai mulți parametri de pentru a filtra informația necesară.</p>
		</div>
    </div>


		<div class="container">
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află ifno despre utilizatorii cu contractele<br>în statutul XXX mai noi de data YYY:</h4>
		  				<input type="text" name="val1" placeholder="Indică statutul contractului căutat..">
		  				<input type="text" name="val2" placeholder="Indică data limită în format YYYY-MM-DD..">
		  				<input type="submit" name="submit1" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află info despre utilizatorii cu contractele<br> semnatepînă pe data de XXX și <br>achitate pînă pe YYY:</h4>
		  				<input type="text" name="val1" placeholder="Indică data limită semnare în format YYYY-MM-DD..">
		  				<input type="text" name="val2" placeholder="Indică data limită achitare în format YYYY-MM-DD..">
		  				<input type="submit" name="submit2" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află info despre pachetele cu prețul <br> mai mic ca XXX și de la operatorul YYY:</h4>
		  				<input type="text" name="val1" placeholder="Indică prețul maxim al pachetului căutat..">
		  				<input type="text" name="val2" placeholder="Indică numele operatorului căutat..">
		  				<input type="submit" name="submit3" value="Află">
		  			</form>
		  			<form class="form" method="get" style="display:inline-block;margin:20px;width:45%;">
		  				<h4>Află info despre utilizatorii din localitatea XXX<br> al căror nume începe cu YYY:</h4>
		  				<input type="text" name="val1" placeholder="Indică literele cu care începe numele utilizatorului căutat..">
		  				<input type="text" name="val2" placeholder="Indică localitatea utilizatorului căutat..">
		  				<input type="submit" name="submit4" value="Află">
		  			</form>
		  	</div><br><br>

		  			  <?php
		  			  	   include_once("config.php");
		  			       if(isset($_GET['submit1'])) {
		  			           $val1=$_GET['val1'];
		  			           $val2=$_GET['val2'];
		  			           serviciu1($val1,$val2,$conn);
		  			       }
		  			       else if(isset($_GET['submit2'])) {
		  			           $val1=$_GET['val1'];
		  			           $val2=$_GET['val2'];
		  			           serviciu2($val1,$val2,$conn);
		  			       }
		  			       else if(isset($_GET['submit3'])) {
		  			           $val1=$_GET['val1'];
		  			           $val2=$_GET['val2'];
		  			           serviciu3($val1,$val2,$conn);
		  			       }
		  			       else if(isset($_GET['submit4'])) {
		  			           $val1=$_GET['val1'];
		  			           $val2=$_GET['val2'];
		  			           serviciu4($val1,$val2,$conn);
		  			       }
		  			?>

              <?php 

		function serviciu1($val1,$val2,$conn) {
			echo '<h3 align=center> LISTA UTILIZATORILOR CU STATUTUL CONTRACTELOR XXX ȘI DATA ÎNSCRIERII MAI TIRZIE DE YYY </h3><hr>';
			$sql = "SELECT * FROM contracte  NATURAL JOIN utilizatori WHERE contracte.statut='".$val1."' AND contracte.data_inceput > ".$val2." ";

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


			function serviciu2($val1,$val2,$conn) {
			echo '<h3 align=center> LISTA UTILIZATORILOR CU CONTRACTELE ÎNSCRIȘI PÎNĂ LA XXX ȘI ACHITAȚI PÎNĂ LA YYY</h3><hr>';
			$sql = "SELECT * FROM contracte  NATURAL JOIN utilizatori WHERE contracte.data_inceput<'".$val1."' and contracte.data_ultima_ac < '".$val2."' ";

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

		function serviciu3($val1,$val2,$conn) {

			echo '<h3 align=center> LISTA PACHETELOR CU PREȚUL MAI MIC CA XXX ȘI NUMELE OPERATORULUI = YYY</h3><hr>';
			$sql = "SELECT * FROM pachete  NATURAL JOIN operatori WHERE pachete.pret<".$val1." and operatori.nume_op='".$val2."'";

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

		function serviciu4($val1,$val2,$conn) {

			echo '<h3 align=center> LISTA UTILIZATORILOR AL CĂROR NUME ÎNCEPE CU  XXX DIN LOCALITATEA YYY</h3><hr>';
			$sql = "SELECT * FROM utilizatori WHERE utilizatori.nume_prenume LIKE '".$val1."' and utilizatori.localitate='".$val2."' ";

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
		?>
    <br>
</div>

	<hr style="width:100%; margin-top:0px;margin-bottom:0px;">
    <div class="footer">
            &copy;2017 TVcablu| <a href="https://www.facebook.com/taria.muruta" style="color:#f2F2F2;" target="_blank" >Creat de: Turuta Maria</a>
    </div>

</body>
</html>