<?php
include('conexao.php');
include('menu.php'); 
?>

<!DOCTYPE html>
<html>

<head>
	<title>Registrar Aeroporto</title>

</head>
<body>
	<form action="registrarAeroporto.php" method="POST">

		<table>
		<tr>
			<td>Cidade do Aeroporto:</td><td><input type="text" name="cidade" id="cidade"></td>
		</tr>
		<tr>
			<td>Nome do Aeroporto:</td><td><input type="text" name="nomeArpt" id="nomeArpt"></td>
		</tr>
		<tr><td><input type="submit" value="Cadastrar Aeroporto" id="botao"></td></tr>
		</table>
	</form>

</body>
</html>