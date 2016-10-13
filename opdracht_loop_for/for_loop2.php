<?php
	$rijen = 10;
	$kolommen = 10;
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>loop 2</title>
    <style>
        table
        {
            border-collapse:collapse;
        }

        td
        {
            padding: 16px;
            border: 1px solid lightgrey;
        }
        .oneven
        {
            background-color: green;
        }

    </style>
</head>
<body>
   <h1>Oplossingen: for lus2</h1>
    <table>
        <?php for( $i=0;$i<$rijen;++$i ):  ?>
            <tr>	
                <?php for( $j=1; $j<=$kolommen;++$j ):  ?>
                    <td class="<?= ( ( $i * $j ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $i * $j ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

</body>
</html>