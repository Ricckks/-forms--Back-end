<html lang="pt-br">

<head>

<meta charset="utf-8"/>
<meta name="viewport" content="widht=device-width, initial-scale=1.0">
<meta name="Description" content="pagina de formulario">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <title>Formulario</title>

     <form action="index.php" method="post">
           <input type="text" name="name1">
           <label> Digite aqui seu nome</label>


           <button type="bt-send">Enviar</button>
     </form>
<?php
      include("index.php");
?>
</body>
</html>
