<?php

use App\Wcs\Hello;

require_once "./../vendor/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCS - Odyssey - PHP Composer 1 - Autoload</title>
</head>
<body>
    <?php 
        $hello = new Hello;
        echo $hello->talk();
    ?>
</body>
</html>