<?php

	include("conexao.php");

	$arptOrigem = $_POST['arptOrigem'];
	$arptChegada = $_POST['arptChegada'];
	$hrrOrigem = $_POST['hrrOrigem'];
	$hrrChgd = $_POST['hrrChgd'];
	$arptTrecho = $_POST['arptTrecho'];
	$hrrTrecho = $_POST['hrrTrecho'];
	$arnv = $_POST['arnv'];
	$trocaArnv = $_POST['trocaArnv'];
	$dia = $_POST['dia'];
	$vagas = $_POST['vagas'];

	if($arptOrigem == '' || $arptChegada == '' || $hrrOrigem == '' || $hrrChgd == '' || $arnv == '' || $dia == '' || $vagas == ''){

		echo '<script>alert("Não Registrado: Há campos obrigatórios vazios"); window.location.replace("registroVoo.php");</script>';

		}else{

			if($arptTrecho == 'Nenhum' && $hrrTrecho != '' || $arptTrecho != 'Nenhum' && $hrrTrecho == ''){

			echo '<script>alert("Não Registrado: Há campos obrigatórios vazios"); window.location.replace("registroVoo.php");</script>';


			}else{

			$sql = "INSERT INTO voos (aeroportoOrigem, aeroportoDestino, horarioSaida, horarioChegada, aeroportoTrecho, horarioTrecho, aeronave, aeronaveTroca, dia, vagas, vagasDisponiveis) VALUES ('$arptOrigem','$arptChegada','$hrrOrigem','$hrrChgd','$arptTrecho','$hrrTrecho','$arnv','$trocaArnv','$dia','$vagas', '$vagas')";

			mysqli_query($conn, $sql);

			echo '<script>alert("Registrado com sucesso"); window.location.replace("registroVoo.php");</script>';

		}

	};


?>


