<?php
include('conexao.php');
include('menu.php');

$id = $_GET['id'];
     
    $queryVoos = "SELECT * FROM voo WHERE idVoo = $id";

    $resultVoos = $conn->query($queryVoos);
      
    $optionsVoos= mysqli_fetch_all($resultVoos, MYSQLI_ASSOC);


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

    <?php foreach ($optionsVoos as $optionVoos){ ?>

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