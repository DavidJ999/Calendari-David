<?php
$mes=date("n");
$anys=date("Y");
$diaActual=date("j");
$diaSetmana=date("w",mktime(0,0,0,$mes,1,$anys))+7;
$ultimDia=date("d",(mktime(0,0,0,$mes+1,1,$anys)-1));
 
$mesos=array(1=>"Gener", "Febrer", "Març", "Abril", "Maig", "Junt", "Juliol",
"Agost", "Setembre", "Octubre", "Novembre", "Decembre");
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <title>Calendari</title>		
</head>
 
<body>
<table id="calendar">
	<caption><?php echo $mesos[$mes]." ".$anys?></caption>
	<tr>
		<th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th>
		<th>Divendres</th><th>Dissabte</th><th>Diumenge</th>
	</tr>
	<tr>
		<?php
		$last_cell=$diaSetmana+$ultimDia;
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSetmana)
			{
				$dia=1;
			}
			if($i<$diaSetmana || $i>=$last_cell)
			{
				echo "<td>&nbsp;</td>";
			}else{
				if($dia==$diaActual)
					echo "<td class='hoy'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
			}
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>