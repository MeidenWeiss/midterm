<?php
//include 'config.php';
include 'class.manage.php';
$manage = new Manage();
$spacex = $manage->spacex_feed();
$airbus = $manage->airbus_feed();
$nasa = $manage->nasa_feed();
$ukspace = $manage->uk_feed();
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
                    <h1 class="title"> ✈️ Aerospace News Articles & Updates 🚀</h1>
                    <div class="sub_content">
                        <div class="news_feed">
                            <a href="https://www.spacex.com"><img class="home" src="images/spacex.jpg"/></a> <h3 class="title"><a href="index.php?page=spacex">View All</a></h3>
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
                        </div> <br> <br> <br> <br>
                        <div class="news_feed">
                        <a href="https://www.airbus.com"><img class="home" src="images/airbus.jpg"/></a> <h3 class="title"><a href="index.php?page=airbus">View All</a></h3>
                            <div class="news_content">
                                <?php 
                                    foreach($airbus as $rss){
                                        $title = $rss->getElementsByTagName("title")->item(0)->nodeValue;
                                        $date = $rss->getElementsByTagName("pubDate")->item(0)->nodeValue;
                                        $desc = $rss->getElementsByTagName("description")->item(0)->nodeValue;
                                        $link = $rss->getElementsByTagName("link")->item(0)->nodeValue;
                                        $image = $rss->getElementsByTagName("image")->item(0)->nodeValue;
                                ?>
                                    <a href="<?php echo $link;?>"><h3 class="title"> <?php echo $title;?></h3></a>
                                    Date Published: <?php echo $date;?> <br> <br>
                                    <img class="picture_feed" src="<?php echo $image;?>"/>
                                    <p> <?php echo $desc;?> </p>
                                    <div class="line"> </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div> <br> <br> <br> <br>
                        <div class="news_feed">
                        <a href="https://www.nasa.gov"><img class="home" src="images/nasa.png"/></a> <h3 class="title"><a href="index.php?page=nasa">View All</a></h3>
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
                        </div> <br> <br> <br> <br>
                        <div class="news_feed">
                        <a href="https://www.gov.uk/government/organisations/uk-space-agency#content"><img class="home" src="images/uk.jpg"/></a> <h3 class="title"><a href="index.php?page=ukspace">View All</a></h3>
                            <div class="news_content">
                                <?php 
                                    foreach($ukspace as $rss){
                                        $title = $rss->getElementsByTagName("title")->item(0)->nodeValue;
                                        $date = $rss->getElementsByTagName("updated")->item(0)->nodeValue;
                                        $summary = $rss->getElementsByTagName("summary")->item(0)->nodeValue;
                                        $link = $rss->getElementsByTagName("id")->item(0)->nodeValue;
                                ?>
                                    <a href="<?php echo $link;?>"><h3 class="title"> <?php echo $title;?></h3></a>
                                    Date Published: <?php echo $date;?>
                                    <p> <?php echo $summary;?> </p>
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