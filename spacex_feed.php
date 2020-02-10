<?php
include 'class.manage.php';
$manage = new Manage();
$spacex = $manage->spacex_feed();
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
                    <h1 class="title"> ✈️ SpaceX News Articles & Updates 🚀</h1>
                    <div class="sub_content">
                        <div class="news_feed_expanded">
                            <a href="https://www.spacex.com"><img class="home" src="images/spacex.jpg"/></a><br><h3 class="title">Subscribe <a href="http://www.spacex.com/news.xml"><img class="icon" src="images/rss.png"/></a></h3>
                            <div class="news_content_expanded">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>