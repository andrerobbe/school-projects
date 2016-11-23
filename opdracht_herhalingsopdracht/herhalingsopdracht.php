<?php
    $showCursus = false;
    $showVoorbeelden = false;
    $showOpdrachten = false;
    
    $path = realpath('C:\Users\Maurits\Documents\School\jaar2\web-backend\cursus\public\cursus\voorbeelden');
    

    if($_GET['link']){
        $link=$_GET['link'];
        
        switch($link){
            case 'cursus':
                $showCursus = true;
                break;
            case 'voorbeelden':
                $showVoorbeelden = true;
                break;
            case 'opdrachten':
                $showOpdrachten = true;
                break;
        }
    }

    function showList(item) {
        $listItems = array();
        $listItems[] = item;
    }
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename){
        showList($filename);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Herhalingsopdracht</title>
    <style>
        body{
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        .wrapper {
            width: 1000px;
            margin: 0 auto;
        }
        ul li {
            list-style-type: none;
        }
        iframe{
            border: 1px solid black;
            height: 750px;
            width: 1000px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Indexpagina</h1>
        <ul>
            <li><a href="herhalingsopdracht.php?link=cursus">Cursus</a></li>
            <li><a href="herhalingsopdracht.php?link=voorbeelden">Voorbeelden</a></li>
            <li><a href="herhalingsopdracht.php?link=opdrachten">Opdrachten</a></li>
        </ul>
        <form action="herhalingsopdracht.php" method="get">
            <input name="search" type="search" placeholder="zoeken ...">
            <button>Zoeken</button>
        </form>
        
        <h1>Inhoud</h1>
        <?php if($showCursus): ?>
            <iframe src="http://web-backend.local/public/cursus/web-backend-cursus.pdf"></iframe>
        <?php endif; ?>
        <?php if($showVoorbeelden): ?>
            <?php foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename): ?>
                <li><a href="<?php echo $filename ?>"><?php echo $filename ?></a></li>
            <?php endforeach; ?>        
        <?php endif; ?>
        
    </div>
    
</body>
</html>