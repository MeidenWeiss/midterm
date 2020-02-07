<?php
$domOBJ = new DOMDocument();
$domOBJ->load("http://midterm-exam.herokuapp.com/com.php");//XML page URL

$content = $domOBJ->getElementsByTagName("item");
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
                    <h2 class="title"> LATEST NEWS </h2>
                    <?php 
                        foreach($content as $org){
                            $id = $org->getElementsByTagName("id")->item(0)->nodeValue;
                            $title = $org->getElementsByTagName("title")->item(0)->nodeValue;
                            $web = $org->getElementsByTagName("web")->item(0)->nodeValue;
                            $rss = $org->getElementsByTagName("feedlink")->item(0)->nodeValue;
                    ?>
                        <h3> <?php echo $title; ?> </h3>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>