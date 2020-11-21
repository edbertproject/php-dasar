<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style> 
        .ganjil{
            background-color : red;
        }
    </style>
</head>
<body>
    
    <table border="2px" cellpadding="50px" cellspacing="0">
        <!-- dengan tag php templating -->
        <?php for ( $x = 1 ; $x <= 5 ; $x++ ): ?>
            <?php if ( $x % 2 == 1 ): ?>
                <tr class="ganjil">
            <?php else: ?>
                <tr>
            <?php endif; ?>
            <?php for ( $y = 1 ; $y <= 4 ; $y++ ):?>
                <td> <?= "$x,$y"; ?> </td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>


        <!-- dengan tag php semua -->
        <!-- <?php
            for( $x = 1 ; $x <= 5 ; $x++ ){
                echo "<tr>";
                for( $y = 1 ; $y <= 8 ; $y++ ){
                    echo "<td>$x,$y</td>";
                }
                echo "</tr>";
            }
        ?> -->
    </table>



</body>
</html>