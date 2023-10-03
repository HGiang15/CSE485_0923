<?php
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => 
"Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => 
"Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
"Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United 
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech 
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => 
"Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($arrs as $country => $caption) {

    ?>
    <!-- <h2>Thủ đô của  là </h2> -->
    
    <?php
        $bien = '<h2>Thủ đô của '.$country.'  là '.$caption.'</h2>';
        echo $bien;
        }
    ?>
</body>
</html>