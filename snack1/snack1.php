<?php 
$squadre = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantu",
        "punti_casa" => 55,
        "punti_osppite" => 66,
    ],
    [
        "squadra_casa" => "Treviglio",
        "squadra_ospite" => "Cittadella",
        "punti_casa" => 33,
        "punti_osppite" => 44,
    ],
    [
        "squadra_casa" => "Pappardelle",
        "squadra_ospite" => "Spinacina",
        "punti_casa" => 65,
        "punti_osppite" => 54,
    ],
]




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </ul>
        <?php foreach($squadre as $partite){
          ?>
            <li>
              <?php foreach($partite as $matches){ ?>
                <?php echo $matches."  " ?>
                <?php } ?>
            </li>
            
        <?php } ?>
    <ul>
        
</body>
</html>