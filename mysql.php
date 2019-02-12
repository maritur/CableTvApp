<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>TV prin cablu:MYSQL</title>
    <link href="style.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />   
    <style>

    input[type=text] {
    background-color: #aaaaaa;
    color: #27382a;
}
</style>
</head>


<body>

	<div class="nav-bar">
            <ul>
            	<li><a href="index.html" style="font-size:50px;"> <i class="fa fa-home"></i></a></li>
				<li><a href="http://localhost/lucrare%20an/admin.php" style="float:right;font-size:50px;"><i class="fa fa-user"></i></a></li>
            </ul>
    </div>	


	<div style="margin:300px;margin-bottom:50px;margin-top:50px;">
		<div class="meniu" style=";color:white;text-align:center"><h3>
	        <a href="#utilizatori"> > Tabel UTILIZATORI</a><br>
	        <a href="#contracte"> >Tabel CONTRACTE</a><br>
	        <a href="#interactiuni"> >INTERACȚIUNI UTILIZATORI<->CONTRACTE</a></h3>
	    </div><hr>
 

	    <h2 align=center> ACȚIUNI ÎN TABELUL UTILIZATORI</h2><hr>

		<?php
		require_once("config.php");
		echo'
		<form >
		<h3 align=center>Caută utilizator</h3>
		<input type="text" name="id_utilizator1" method="GET" placeholder="Întroduceți id-ul utilizatorului pe care doriți să-l găsiți..">
		</select> <br><br>
		<input type="submit" name="submit" value="Caută">
		</form>
		';


			if(isset($_GET['id_utilizator1'])){
				$id_utilizator = $_GET['id_utilizator1'];
				$sql = "SELECT  *FROM utilizatori where id_utilizator=".$id_utilizator." ";



					$rez = mysqli_query($conn, $sql);
					if($rez)
					{
						echo '<p style="color:green">Datele au fost găsite cu succes!</p>';
						echo '<table>
			    		   <thead><tr>
			    		    <th>Id</th>
					        <th>IDNP</th>
					        <th>Nume Prenume</th>
					        <th>Telefon</th>
					        <th>Localitate</th>
					        <th>Adresă</th>
					      </tr></thead>';



						while($row = mysqli_fetch_array($rez)) 
							{
					echo'<tr><td>'.$row['id_utilizator'].'</td>';
					echo'<td>'.$row['idnp'].'</td>';
					echo'<td>'.$row['nume_prenume'].'</td>';
					echo'<td>'.$row['telefon_ut'].'</td>';
					echo'<td>'.$row['localitate'].'</td>';
					echo'<td>'.$row['adresa'].'</td></tr>';
							}
						echo '</table>';
						echo '<br><br> ';
					}
					else
					{
						echo '<p style="color:red">Eroare!</p>';
					}
			}
		?>
    	<br><br>



		<?php
		require_once("config.php");
		echo'
		<form><hr>
		<h3 align=center>Modifică date utilizator</h3>
		<input type="text" name="id_utilizator2" method="POST" placeholder="Întroduceți id_ul utilizatorului, datele căruia doriți să le modificați..">
		<input type="text" name="telefon_ut" method="POST" placeholder="Introduceți noul nr. de telefon..">
		<input type="text" name="adresa" method="POST" placeholder="Întroduceți noua adresă.."><br><br>
		<input type="submit" name="submit" value="Modifică">
		</form>
		';

		if(isset($_GET['id_utilizator2'],  $_GET['telefon_ut'],  $_GET['adresa'])){

				$id_utilizator = $_GET['id_utilizator2'];
				$telefon_ut= $_GET['telefon_ut'];
			    $adresa = $_GET['adresa'];
			    
				$sql = "UPDATE utilizatori
						SET telefon_ut = '".$telefon_ut."', adresa ='".$adresa."'
						WHERE id_utilizator = '".$id_utilizator."' ";

					$rez = mysqli_query($conn, $sql);			
					if($rez)
					{$sql ="select *from utilizatori";
				    $rez = mysqli_query($conn,$sql);
						echo '<p style="color:green">Datele au fost modificate cu succes!</p>';
						echo '<table>
			    		   <thead><tr>
			    		    <th>Id</th>
					        <th>IDNP</th>
					        <th>Nume Prenume</th>
					        <th>Telefon</th>
					        <th>Localitate</th>
					        <th>Adresă</th>
					      </tr></thead>';


						while($row = mysqli_fetch_array($rez)) 
							{
					echo'<tr><td>'.$row['id_utilizator'].'</td>';
					echo'<td>'.$row['idnp'].'</td>';
					echo'<td>'.$row['nume_prenume'].'</td>';
					echo'<td>'.$row['telefon_ut'].'</td>';
					echo'<td>'.$row['localitate'].'</td>';
					echo'<td>'.$row['adresa'].'</td></tr>';
							}
						echo '</table>';
						echo '<br><br> ';
					}
					else
					{
						echo '<p style="color:red">Eroare!</p>';
					}
			}
		?>
	<br><br>


		<?php

		echo'
		<form ><hr>
		<h3 align=center>Șterge date utilizator</h3>
		<input type="text" name="id_utilizator3" method="POST" placeholder="Întroduceți id-ul utilizatorului pe care doriți să-l ștergeți...">
		<br><br>
		<input type="submit" name="submit" value="Sterge">
		</form>
		';
		echo '<br>';

			if(isset($_GET['id_utilizator3'])){
				$id_utilizator = $_GET['id_utilizator3'];

			$sql = "DELETE FROM utilizatori where id_utilizator=".$id_utilizator." ";

				$rez = mysqli_query($conn, $sql);
				if($rez)
				{
					$sql ="select *from utilizatori";
				    $rez = mysqli_query($conn,$sql);
				    	echo '<p style="color:green">Datele au fost sterse cu succes!</p>';
						echo '<table>
			    		   <thead><tr>
			    		    <th>Id</th>
					        <th>IDNP</th>
					        <th>Nume Prenume</th>
					        <th>Telefon</th>
					        <th>Localitate</th>
					        <th>Adresă</th>
					      </tr></thead>';
					
					while($row = mysqli_fetch_array($rez)) 
							{
					echo'<tr><td>'.$row['id_utilizator'].'</td>';
					echo'<td>'.$row['idnp'].'</td>';
					echo'<td>'.$row['nume_prenume'].'</td>';
					echo'<td>'.$row['telefon_ut'].'</td>';
					echo'<td>'.$row['localitate'].'</td>';
					echo'<td>'.$row['adresa'].'</td></tr>';
							}
						echo '</table>';
						echo '<br><br> ';
					}
				else
				{
					echo '<p style="color:red">Eroare!</p>';
				}
			}
?>
    	<br><br><hr>


		<?php
		include_once("config.php");
		echo'
		<form >
		<h3 align=center>Înregistrează utilizator</h3>
		<input type="text" name="idnp" method="GET" placeholder="IDNP">
		<input type="text" name="nume_prenume" method="GET" placeholder="Nume Prenume">
		<input type="text" name="telefon_ut" method="GET" placeholder="Telefon">
		<input type="text" name="localitate" method="GET" placeholder="Localitatea">
		<input type="text" name="adresa" method="GET" placeholder="Adresa">
		</select> <br><br>
		<input type="submit" name="submit" value="Înregistrează">
		</form> 
		';
		echo '<br>';


			if(isset($_GET['idnp'],$_GET['nume_prenume'],$_GET['telefon_ut'],$_GET['localitate'], $_GET['adresa'])){
				$idnp = $_GET['idnp'];
				$nume_prenume = $_GET['nume_prenume'];
				$telefon_ut = $_GET['telefon_ut'];
				$localitate = $_GET['localitate'];
				$adresa = $_GET['adresa'];
				$sql = "INSERT INTO utilizatori (idnp, nume_prenume, telefon_ut, localitate, adresa)   
				VALUES ( ".$idnp.",'".$nume_prenume."' ,'".$telefon_ut."','".$localitate." ','".$adresa."'  )";

					$rez = mysqli_query($conn, $sql);

					if($rez)
					{	$sql ="select *from utilizatori";
					    $rez = mysqli_query($conn,$sql);
						echo '<p style="color:green">Datele au fost introduse cu succes!</p>';
						echo '<table>
			    		   <thead><tr>
			    		    <th>Id</th>
					        <th>IDNP</th>
					        <th>Nume Prenume</th>
					        <th>Telefon</th>
					        <th>Localitate</th>
					        <th>Adresă</th>
					      </tr></thead>';


						while($row = mysqli_fetch_array($rez)) 
							{
					echo'<tr><td>'.$row['id_utilizator'].'</td>';
					echo'<td>'.$row['idnp'].'</td>';
					echo'<td>'.$row['nume_prenume'].'</td>';
					echo'<td>'.$row['telefon_ut'].'</td>';
					echo'<td>'.$row['localitate'].'</td>';
					echo'<td>'.$row['adresa'].'</td></tr>';
							}
						echo '</table>';
						echo '<br><br> ';
					}
					else
					{
						echo '<p style="color:red">Eroare!</p>';
					}
			}
		?>
    	<br><br>
    </div>



<?php
include_once("config.php");

	echo '<a name="utilizatori"><h2 align=center> TABELUL UTILIZATORI (BD)</h2></a><hr>';
	$sql = "SELECT * FROM utilizatori";
	
	$rez = mysqli_query($conn, $sql);
	$rezz = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
    		   	<th>ID Utilizator</th>
		        <th>IDNP</th>
		        <th>Nume Prenume</th>
		        <th>Telefon</th>
		        <th>Localitate</th>
		        <th>Adresă</th>
		      </tr></thead>';

		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['id_utilizator'].'</td>';
			echo'<td>'.$row['idnp'].'</td>';
			echo'<td>'.$row['nume_prenume'].'</td>';
			echo'<td>'.$row['telefon_ut'].'</td>';
			echo'<td>'.$row['localitate'].'</td>';
			echo'<td>'.$row['adresa'].'</td>';
		}
		echo '</table>';
		echo '<br><br> ';


	echo '<a name="contracte"><h2 align=center> TABELUL CONTRACTE(BD) - ÎN CONTINUĂ ACTUALIZARE A STATUTULUI </h2></a><hr>';

    $sql = "UPDATE contracte  SET statut='Suspendat'
 	        WHERE DATEDIFF(CURDATE(), contracte.data_ultima_ac)>60";

	$sql = "SELECT * FROM contracte NATURAL JOIN utilizatori  NATURAL JOIN pachete 
			WHERE contracte.id_utilizator=utilizatori.id_utilizator and contracte.id_pachet=pachete.id_pachet order by nr_contract";

	$rez = mysqli_query($conn, $sql);
	 echo '<table>
    		   <thead><tr>
		        <th>Nr. contract</th>
		        <th>Nume Utilizator</th>
		        <th>Id Pachet</th>
		        <th>Data început</th>
		        <th>Data ultimei ac.</th>
		        <th>Statut</th>
		      </tr></thead>';

		while($row = mysqli_fetch_assoc($rez)) 
		{
			echo'<tr><td>'.$row['nr_contract'].'</td>';
			echo'<td>'.$row['nume_prenume'].'</td>';
			echo'<td>'.$row['id_pachet'].'</td>';
			echo'<td>'.$row['data_inceput'].'</td>';
			echo'<td>'.$row['data_ultima_ac'].'</td>';
			echo'<td>'.$row['statut'].'</td></tr>';
		}
		echo '</table>';
		echo '<br><br> ';

	echo '<a name="interactiuni"><h2 align=center> LISTA UTILIZATORILOR ȘI A CONTRACTELOR LOR</h2></a><hr>';
	$sql = "SELECT * FROM contracte NATURAL JOIN utilizatori";
	
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

		while($row = mysqli_fetch_assoc($rez)) 
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

	echo '<h2 align=center> LISTA UTILIZATORILOR CU CONTRACTELE SUSPENDATE</h2><hr>';
	$sql = "SELECT * FROM contracte  NATURAL JOIN utilizatori WHERE contracte.statut='Suspendat'";
	
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

		while($row = mysqli_fetch_assoc($rez)) 
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
?>
</div>



	<hr style="width:100%; margin-top:0px;margin-bottom:0px;">
    <div class="footer">
            &copy;2017 TVcablu| <a href="https://www.facebook.com/taria.muruta" style="color:#f2F2F2;" target="_blank" >Creat de: Turuta Maria</a>
    </div>

</body>
</html>