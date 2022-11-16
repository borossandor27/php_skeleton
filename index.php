<?php
$menuitem = filter_input(INPUT_GET, "menu");
?>
<!DOCTYPE html>
<!--
    PHP site egy lehetséges működési modelljének bemutatása
    csak skeleton 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC model</title>
    </head>
    <body>
        <h1>Controller</h1>
        <nav>
            <ul>
                <li><a href="index.php?menu=home">Home</a></li>
                <li><a href="index.php?menu=contact">Contact</a></li>
                <li><a href="index.php?menu=about">About</a></li>
            </ul>
        </nav>
        <?php
        require_once './controller.php';        // put your code here
        ?>
    </body>
</html>
