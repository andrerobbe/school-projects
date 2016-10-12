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

        .oneven
        {
            background-color: green;
        }

    </style>
</head>
<body>
    <table>
        <?php for( $i=0;$i<$rijen;++$i ):  ?>

            <tr>	
                <?php for( $j=1; $j<=$maxj;++$j ):  ?>
                    <td class="<?= ( ( $i * $j ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $i * $j ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

</body>
</html>