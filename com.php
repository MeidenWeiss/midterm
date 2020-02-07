<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    
    include 'config.php';
    include 'class.manage.php';
    $manage = new Manage();

    $result = $manage->get_data();
    foreach($result as $row) {
        extract($row);

        $rssfeed .= '<item>';
        $rssfeed .= '<id>' . $aero_id . '</id>';
        $rssfeed .= '<title>' . $aero_name . '</title>';
        $rssfeed .= '<web>' . $aero_web . '</web>';
        $rssfeed .= '<feedlink>' . $aero_rss . '</feedlink>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>