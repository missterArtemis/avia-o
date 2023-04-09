<?php
include('conexao.php');
include('menu.php'); 


    $query ="SELECT * FROM aeroportos";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
 	}
    

?>

<!DOCTYPE html>
<html>

<head>
	<title>Registrar Voo</title>
	
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

   						<option><?php echo $option['nome']; ?> </option>
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

   						<option><?php echo $option['nome']; ?> </option>

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

   						<option><?php echo $option['nome']; ?> </option>

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
				<td><input type="date" name="dia"></td>
			</tr>
			<tr>
				<td>Vagas</td>
				<td><input type="number" name="vagas"></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>

		</table>
	</form>
</body>
</html>