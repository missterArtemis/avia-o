<?php
include('conexao.php');
include('menu.php');

$id = $_GET['id'];
     
    $query = "SELECT * FROM voos WHERE id = $id";

    $result = $conn->query($query);
      
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrar Reserva</title>
</head>
<body>
    
    <h3>Você escolheu o voo:</h3>
<table border="1">

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

    <?php foreach ($options as $option){ ?>

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
               
    </tr>
    <?php
                
    };

?>
</table>

<h3> Reserve sua Passagem: </h3>

<form action="registrarReserva.php" action="POST">

<table>
<tr>
    <td>Nome:</td><td><input type="text" name="nome"></td>
    <td>Classe:</td><td><select name="classe"><option>Executivo</option><option>Econômica</option></select></td>
    <td>
</tr>
</table>

</body>
</html>