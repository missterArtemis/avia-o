<?php

	include("conexao.php");

	$cidade = $_POST["cidade"];
	$nomeArpt = $_POST["nomeArpt"];

	$query ="SELECT * FROM aeroportos";
    $result = $conn->query($query);
      
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);

    if($cidade == '' || $nomeArpt == ''){

    	echo '<script>alert("Não registrado: Algum campo vazio"); window.location.replace("registroAeroporto.php");</script>';

    }
    foreach ($options as $option){

    	if($option['nome'] == $nomeArpt){

    		mysqli_error($conn);
    		echo '<script>alert("Não registrado: Já existente"); window.location.replace("registroAeroporto.php");</script>';    	

    	};
    };

$sql = "INSERT INTO aeroportos (cidade, nome) VALUES ('$cidade', '$nomeArpt')";

if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Registrado com sucesso"); window.location.replace("registroAeroporto.php");</script>';   
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
   

 

?>


