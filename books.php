<?php
$books = ["Avengers", "Bundle", "Cat-man", "Domain", "Easter Bunny"];
?>
<html>
    <head>
    <title>Documents</title>
    </head>
    <body>
        <table>
            <tr><th>Books</th></tr>
            <?php 
                foreach($books as $book){
                    echo '<tr><td>'.$book.'</td></tr>';
                }
                ?>
        </table>
    </body>
</html>