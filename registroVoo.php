<?php
include('conexao.php');
include('menu.php'); 


    $query ="SELECT * FROM aeroporto";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
 	}
    

?>

<!DOCTYPE html>
<html>

<head>
	<title>Registrar Voo</title>
	
	<script>




function teste(){

var pegaDia = document.getElementById("dia").value;

const d = new Date(pegaDia);
let day = d.getDay()
x = document.getElementById("diaSem").innerHTML;

if(day == "0"){
	x = "segunda";
}

if(day == "1"){
	x = "terça";
}

if(day == "2"){
	x = "quarta";
}

if(day == "3"){
	x = "quinta";
}

if(day == "4"){
	x = "sexta";
}

if(day == "5"){
	x = "sabado";
}

if(day == "6"){
	x = "domingo";
}


document.getElementById("diaSem").innerHTML = x;
document.querySelector('#diaSem').value = x;
alert(x);
	
}
</script>
</head>
<body onload="check()">
</br></br>
	<form action="registrarVoo.php" method="POST">

		<table>
			<tr>
				<td>Aeroporto de Origem:</td>
				<td> 

					<select name="arptOrigem">


						<?php
  						foreach ($options as $option) {
						?>

   						<option value="<?php echo $option['idAeroporto']; ?>"><?php echo $option['nome']; ?> </option>
   						<?php 
   							}
  						?>
					</select>

				</td>
				<td>Horário de Saída Prevista:</td>
				<td><input type="time" name="hrrOrigem"></td>
			</tr>
			<tr>
				
				<td>Aeroporto de Trecho:</td>
				<td> 

					<select name="arptTrecho" id="arptTrecho">

						<option>Nenhum</option>
						<?php
  						foreach ($options as $option) {
						?>

   						<option value="<?php echo $option['idAeroporto']; ?>"><?php echo $option['nome']; ?> </option>

   						<?php 
   							}
  						?>
					</select>

				</td>
				<td id="hrrTrecho">Horário da Chegada Prevista:</td>
				<td><input type="time" name="hrrTrecho"></td>
			</tr>
			<tr>
				<td>Aeroporto de Chegada:</td>
				<td> 

					<select name="arptChegada">


						<?php
  						foreach ($options as $option) {
						?>

   						<option value="<?php echo $option['idAeroporto']; ?>"><?php echo $option['nome']; ?> </option>

   						<?php 
   							}
  						?>
					</select>

				</td>
				<td>Horário de Chegada Prevista:</td>
				<td><input type="time" name="hrrChgd"></td>
			</tr>
			<tr>
				<td>Nome Aeronave:</td>
				<td><input type="text" name="arnv"></td>
			</tr>
			<tr>
				<td>Troca de Aeronave, nome:</td>
				<td><input type="text" name="trocaArnv"></td>
			</tr>
			<tr>
				<td>Dia da Viagem</td>
				<td><input type="date" name="dia" id="dia" onblur="teste()"></td>
			</tr>
			<tr>
				<td>Vagas</td>
				<td><input type="number" name="vagas"></td>
			</tr>
			<tr>
				<td><input type="hidden" id="diaSem" name="diaSem" ></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>

		</table>
	</form>
</body>
</html>