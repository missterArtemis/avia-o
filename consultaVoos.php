<?php
include('conexao.php');
include('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Reserva</title>
</head>
<body>

</br></br>
	<table>
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

	$query ="SELECT * FROM voos";
    $result = $conn->query($query);
      
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($options as $option){

    		
    		?>
    		<form action="registroReserva.php" method="GET">
    		<tr>
    			
    			<td><?php echo $option['aeroportoOrigem'];?></td>
    			<td><?php echo $option['horarioSaida'];?></td>
    			<td><?php echo $option['aeroportoDestino'];?></td>
    			<td><?php echo $option['horarioChegada'];?></td>
    			<td><?php echo $option['aeroportoTrecho'];?></td>
    			<td><?php echo $option['horarioTrecho'];?></td>
    			<td><?php echo $option['aeronave'];?></td>
    			<td><?php echo $option['aeronaveTroca'];?></td>
    			<td><?php echo $option['dia'];?></td>
    			<td><?php echo $option['vagasDisponiveis'];?></td>
    			<td><input type="submit" value="Fazer Reserva"></td>
    		</tr>
    		<td><input type="hidden" name="id" value="<?php echo $option['id'];?>"></td>
    		</form>

    		<?php
    			
    };

?>

</body>
</html>