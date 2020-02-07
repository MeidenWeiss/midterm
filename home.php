<?php
//include 'config.php';
include 'class.manage.php';
$manage = new Manage();
$spacex = $manage->spacex_feed();
$airbus = $manage->airbus_feed();
$nasa = $manage->nasa_feed();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>
        <div class="content_container">
            <div class="content_mask"> <br> <br> 
                <div class="text_container">
                    <h1 class="title"> ✈️ Aerospace News Articles & Updates </h1>
                    <div class="sub_content">
                        <div class="news_feed">
                            <a href="https://www.spacex.com"><img class="home" src="images/spacex.jpg"/></a>
                            <div class="news_content">
                                <?php 
                                    foreach($spacex as $rss){
                                        $title = $rss->getElementsByTagName("title")->item(0)->nodeValue;
                                        $date = $rss->getElementsByTagName("pubDate")->item(0)->nodeValue;
                                        $desc = $rss->getElementsByTagName("description")->item(0)->nodeValue;
                                        $link = $rss->getElementsByTagName("link")->item(0)->nodeValue;
                                ?>
                                    <a href="<?php echo $link;?>"><h3 class="title"> <?php echo $title;?></h3></a>
                                    Date Published: <?php echo $date;?>
                                    <p> <?php echo $desc;?> </p>
                                    <div class="line"> </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div> <br> <br>
                        <div class="news_feed">
                        <a href="https://www.airbus.com"><img class="home" src="images/airbus.jpg"/></a>
                            <div class="news_content">
                                <?php 
                                    foreach($airbus as $rss){
                                        $title = $rss->getElementsByTagName("title")->item(0)->nodeValue;
                                        $date = $rss->getElementsByTagName("pubDate")->item(0)->nodeValue;
                                        $desc = $rss->getElementsByTagName("description")->item(0)->nodeValue;
                                        $link = $rss->getElementsByTagName("link")->item(0)->nodeValue;
                                ?>
                                    <a href="<?php echo $link;?>"><h3 class="title"> <?php echo $title;?></h3></a>
                                    Date Published: <?php echo $date;?>
                                    <p> <?php echo $desc;?> </p>
                                    <div class="line"> </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div> <br> <br>
                        <div class="news_feed">
                        <a href="https://www.nasa.gov"><img class="home" src="images/nasa.png"/></a>
                            <div class="news_content">
                                <?php 
                                    foreach($nasa as $rss){
                                        $title = $rss->getElementsByTagName("title")->item(0)->nodeValue;
                                        $date = $rss->getElementsByTagName("pubDate")->item(0)->nodeValue;
                                        $desc = $rss->getElementsByTagName("description")->item(0)->nodeValue;
                                        $link = $rss->getElementsByTagName("link")->item(0)->nodeValue;
                                ?>
                                    <a href="<?php echo $link;?>"><h3 class="title"> <?php echo $title;?></h3></a>
                                    Date Published: <?php echo $date;?>
                                    <p> <?php echo $desc;?> </p>
                                    <div class="line"> </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>