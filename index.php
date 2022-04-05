 <?php

include ("conexao.php");

$nome = filter_input(INPUT_POST, 'name1', FILTER_SANITIZE_STRING);

//usado apenas para ver se o campo preenchido esta sendo capturado.
//echo "$nome";

//QUERY CRIADA
$Result_user = "INSERT INTO recebe users  (nome , created) VALUES ('$nome', NOW())";

//EXECUCAO
$Resultado_user = mysqli_query($conn,$Result_user);

?>

