<?php

$posts = [

    '05/07/2011' => [
        [
            'title' => 'Post 1',
            'author' => 'Mario Castagni',
            'text' => 'Oggi ho mangiato la carbonara'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Mario Castagni ',
            'text' => 'La carbonara mi ha causato dissenteria'
        ],
    ],
    '11/03/2014' => [
        [
            'title' => 'Post 3',
            'author' => 'Carcarlo Pravettoni',
            'text' => 'Mi ballo la fresca'
        ],
        [
            'title' => 'Post 4',
            'author' => 'Carcarlo Pravettoni',
            'text' => 'Mi sono ballato tutta la fresca alle slot'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Tafazzi',
            'text' => 'Mi fanno male le balle'
        ]
    ],
    '17/11/2017' => [
        [
            'title' => 'Post 6',
            'author' => 'Bruno Liegi Bastonliegi',
            'text' => 'Anna pannocchia ti amo'
        ],
        [
            'title' => 'Post 7',
            'author' => 'Anna pannocchia ',
            'text' => 'Io no'
        ],
        [
            'title' => 'Post 8',
            'author' => 'Don mariottide',
            'text' => 'Che storia lacrime strappa'
        ]
    ],
];
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
    <?php foreach($posts as $post => $testo){
        ?>
            <li>
                <?php echo $post; ?>
                <?php foreach($testo as $key => $status){ ?>
                    <?php foreach($status as $keys => $current_post){ ?>
                        <h3><?php echo $current_post ?></h3>
                    <?php } ?>
                <?php } ?>
            </li>
            
        <?php } ?>
    <ul>
</body>
</html>