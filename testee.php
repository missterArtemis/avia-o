<?php
    include('conexao.php');
   
    $query ="SELECT * FROM aeroportos";
    $result = $conn->query($query);
      
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);

     
    
?>
    <select name="courseName">
   <option>Select Course</option>
<?php
  foreach ($options as $option) {
 ?>

    <option><?php echo $option['cidade']; ?> </option>
    <?php 
    }
   ?>
</select>


















if (mysqli_query($conn, $sql)) {

	if()

	 $sql = "INSERT INTO aeroportos (cidade, nome) VALUES ('$cidade', '$nomeArpt')";

	echo '<script>alert("Registrado"); window.location.replace("registroAeroporto.php");</script>';

} else {
  echo "Erro no Sis: " . $sql . "<br>" . 
}

mysqli_close($conn);
?>
</select>

     

