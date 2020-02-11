<?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Aerospace News Feed Portal </title>
        <link rel="stylesheet" type="text/css" href="css/index_styles.css">
    </head>
    <body>
        <div id="main_body">
            <div id="navigation_body">                                   <!--NAVIGATION BAR-->
                <div class="navbar">
                    <ul>
                        <li><a href="https://www.nasa.gov"><img id="pic" src="images/nasa.png"/></a></li>
                        <li><a href="https://www.spacex.com"><img id="pic" src="images/spacex.jpg"/></a></li>
                        <li><a href="index.php"><img id="home_logo" src="images/logo.png"/></a></li>
                        <li><a href="https://www.airbus.com"><img id="pic" src="images/airbus.jpg"/></a></li>
                        <li><a href="https://www.gov.uk/government/organisations/uk-space-agency#content"><img id="pic" src="images/uk.jpg"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="content">                                        <!-- MAIN CONTENT-->
                <?php
                    switch($load){
                        case 'about-us':
                            require_once('about_us.php');
                        break;
                        case 'spacex':
                            require_once('spacex_feed.php');
                        break;
                        case 'airbus':
                            require_once('airbus_feed.php');
                        break;
                        case 'nasa':
                            require_once('nasa_feed.php');
                        break;
                        case 'ukspace':
                            require_once('ukspace_feed.php');
                        break;
                        default:
                            require_once('home.php');
                        break;
                    }
                ?>
            </div>  <!-- End of div class="content" -->
        </div>  <!-- End of div class="main_body" -->
    </body>
</html>