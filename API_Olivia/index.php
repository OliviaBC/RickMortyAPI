<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css"rel="stylesheet" type="text/css">
    <title>Rick & Morty</title>
</head>
<body>
 
<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://rickandmortyapi.com/api/character/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $dados = json_decode(curl_exec($ch));
    curl_close($ch);

    //var_dump($dados);

    echo"<header>";
    echo "<h1><center>Rick & Morty Universe</h1></center><br>";
    echo"</header>";

    
   foreach ($dados->results as $result) {
       echo "<main class='grid'>";
       echo "<div id ='fl1'><img src= '$result->image'" . "</div><br><br><br>";
       echo "<div id = 'fl2'><h3>" . $result->name . "</h3></div><br>";
       echo "<p> " . $result->species . ", " . $result->gender . "<br>";
       echo "" . $result->location->name . "</td><br><br><br>";
       echo "<hr>";
       echo "</main>";
       
   }

   ?>
    
</body>
</html>