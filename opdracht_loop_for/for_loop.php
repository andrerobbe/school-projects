<?php

	$rijen = 10;
	$kolommen = 10;
?>
	

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>for loop 1</title>
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
    </style>
</head>
<body>
   <h1>Oplossingen: for lus</h1>
    <table>
        <?php for ( $i=0;$i<$rijen;++$i): ?>
            <tr>
                <?php for ( $j=0; $j<$kolommen;++$j): ?>
                    <td>kolom</td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

</body>
</html>