
<table border="1">
		
		<?php ano();?>
</table>
<?php
$mes =1;
function linha($semana){
	echo"<tr>";
	for($i = 0;$i<=6;$i++){
		if(isset($semana[$i])){
			echo"<td>{$semana[$i]}</td>";
		}else{
			echo "<td></td>";
		}
	}	
	echo "</tr>";
}
function calendario(){
	$dia =1;
	$semana = array();
	
	mes_do_ano(this.$mes);
	head_semana();
	while ($dia<=31){
		array_push($semana, $dia);
		if(count($semana)==7){
			linha($semana);
			$semana=array();
		}
		$dia++;
	}
	linha($semana);
	$mes++;
}
function ano(){
	$mes =1;
	
	while($mes <=12){
		echo calendario();
		$mes++;
	}
	
}
function head_semana(){
	echo "<tr>
			<th>Dom</th>
			<th>Seg</th>
			<th>Ter</th>
			<th>Qua</th>
			<th>Qui</th>
			<th>Sex</th>
			<th>Sáb</th>
		</tr>";
}
function mes_do_ano($mes){
	switch($mes){
		case 1:
			echo"Janeiro";
		break;
		case 1:
			echo"Fevereiro";
		break;
		case 1:
			echo"Março";
		break;
		case 1:
			echo"Abril";
		break;
		case 1:
			echo"Maio";
		break;
		case 1:
			echo"Junho";
		break;
		case 1:
			echo"Julho";
		break;
		case 1:
			echo"Agosto";
		break;
		case 1:
			echo"Setembro";
		break;case 1:
			echo"Outubro";
		break;case 1:
			echo"Novembro";
		break;case 1:
			echo"Desembro";
		break;
	}
}
?>