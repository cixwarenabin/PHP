<?php
$books = [
    [
        'name' => 'Summer Love',
        'author' => 'Subin Bhattarai',
        'price' => 300.50
    ], 
    [
        'name' => 'Muna Madan',
        'author' => 'Laxmi Prasad Devkota',
        'price' => 105.50
    ],
    [
        'name' => 'Naruto',
        'author' => 'Masashi Kishimoto',
        'price' => 200
    ],
    [
        'name' => 'DragonballZ',
        'author' => 'Goku',
        'price' => 200
    ],
    [
        'name' => 'Hunter X Hunter',
        'author' => 'Gon',
        'price' => 200
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="./tailwind.css">
</head>
<body>
    <table class="mx-auto text-center border-2 border-black my-24">
        <tr class="bg-black text-white border-b-2 border-red-500">
            <th class="border-r-4 border-yellow-400">Book</th>
            <th class="border-r-4 border-yellow-400">Author</th>
            <th>Price</th>
        </tr>
    <?php
    foreach($books as $book)
    {
        echo '<tr class = "border-b-2 border-green-500">';
        foreach($book as $field){
            echo '<td class ="border-r-2 border-red-800 bg-gray-300">'.$field.'</td>';
        }
        echo '</tr>';
    }
    ?>
    </table>

    <br>

    <table border = '1'>
        <tr>
            <th>Book</th>
            <th>Author</th>
            <th>Price</th>
        </tr>
        <?php
            foreach($books as $book){
                echo '<tr>';
                echo '<td>'.$book['name'].'</td>';
                echo '<td>'.$book['author'].'</td>';
                echo '<td>'.$book['price'].'</td>';
                echo '</tr>';               
            }
        ?>
    </table>
</body>
</html>