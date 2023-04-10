<?php
include('conexao.php');
include('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Reserva</title>
</head>

</br></br>
	<table border='1'>
		<tr>
			<td>Origem</td>
			<td>Horário de Saída</td>
			<td>Destino</td>
			<td>Horário de Chegada</td>
			<td>Trecho</td>
			<td>Chegada no Trecho</td>
			<td>Nome da Nave</td>
			<td>Troca de nave</td>
			<td>Data</td>
			<td>Vagas Disponíveis</td>
		</tr>


	<?php

	$queryVoos ="SELECT * FROM voo";
    $resultVoos = $conn->query($queryVoos);
      
    $optionsVoos= mysqli_fetch_all($resultVoos, MYSQLI_ASSOC);



    foreach ($optionsVoos as $optionVoos){

    		
    		?>
    		<form action="registroReserva.php" method="GET">
    		<tr>
    			
    			<td><?php $idSaida = $optionVoos['arptSaida'];$queryArpt ="SELECT * FROM aeroporto WHERE idAeroporto = $idSaida "; $resultArpt = $conn->query($queryArpt); $optionsArpt= mysqli_fetch_all($resultArpt, MYSQLI_ASSOC); foreach ($optionsArpt as $optionArpt){echo $optionArpt['nome'];};?></td>
    			<td><?php echo $optionVoos['hrrSaida'];?></td>
    			<td><?php $idTrecho = $optionVoos['arptTrecho'];$queryArpt ="SELECT * FROM aeroporto WHERE idAeroporto = $idTrecho "; $resultArpt = $conn->query($queryArpt); $optionsArpt= mysqli_fetch_all($resultArpt, MYSQLI_ASSOC); foreach ($optionsArpt as $optionArpt){echo $optionArpt['nome'];};?></td>
    			<td><?php echo $optionVoos['hrrTrecho'];?></td>
    			<td><?php $idChegada = $optionVoos['arptChegada'];$queryArpt ="SELECT * FROM aeroporto WHERE idAeroporto = $idChegada "; $resultArpt = $conn->query($queryArpt); $optionsArpt= mysqli_fetch_all($resultArpt, MYSQLI_ASSOC); foreach ($optionsArpt as $optionArpt){echo $optionArpt['nome'];};?></td>
    			<td><?php echo $optionVoos['hrrChegada'];?></td>
    			<td><?php echo $optionVoos['arnv'];?></td>
    			<td><?php echo $optionVoos['arnvTroca'];?></td>
    			<td><?php echo $optionVoos['dia'];?></td>
    			<td><?php echo $optionVoos['vagasDsp'];?></td>
    			<td><input type="submit" value="Fazer Reserva"></td>
    		</tr>
    		<td><input type="hidden" name="id" value="<?php echo $optionVoos['idVoo'];?>"></td>
    		</form>

    		<?php
    			
    };

?>

</body>
</html>