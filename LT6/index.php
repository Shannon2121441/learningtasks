<?php
$page =(isset($_GET['page']) && $_GET['page'] !='') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Web Portfolio</title>
        <link href="../LT6/css/stylesheet.css" type="text/css" rel="stylesheet">
        <script src="script/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="header">
            <h1><?php echo "Shannon's Portfolio";?></h1>
        </div>
        
        <div id="wrapper">
            <div id="navigation">
                <div id="date">
                    <?php
                    echo date("<b>m/d/Y</b>") . " (" . date("l") . ")";
                    ?>

                </div>
                <ul>
                    <li><a href="index.php?page=default"><b>Home Page</b></a></li>
                    <li><a href="index.php?page=works"><b>Works</b></a></li>
                    <li><a href="index.php?page=profile"><b>Profile</b></a></li>
                </ul>
            </div>
                
            <div id="content">
                <?php
                    switch($page){
                        case"works":
                            require"works.php";
                        break;
                        case"profile":
                            require"profile.php";
                        break;
                        case"default":
                            require"default.php";
                        break;
                    }
                ?>
                <?php
                
                ?>
            </div>
            
        </div>
        
    </body>
</html>