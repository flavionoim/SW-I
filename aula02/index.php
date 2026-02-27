<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>AULA 02 - PHP + HTML</h1>
    <?php
        $nome = "Flávio";
        echo "<p style = \"color:red\";>Bem Vindo... $nome</p>  ";
         //echo "<p>Bem Vindo... ". $nome ."</p>";
        echo "<ul>";
         for ($i=1; $i <= 5; $i++) { 
            echo "<li>Item $i</li>";;
            echo "<br>";

         }
         echo "</ul>";
    ?>


</body>
</html> 