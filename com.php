<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    
    $sql = "SELECT * FROM tbl_aero ORDER BY aero_id ASC;";
    $connect = mysqli_connect("us-cdbr-iron-east-04.cleardb.net", "bd6741228486af", "11e0ed1a") or die(mysqli_error($connect));
	$db = mysqli_select_db($connect, "test");
    $query = mysqli_query($connect,$sql) or die(mysqli_error($connect));
    while($row=mysqli_fetch_assoc($query)) {
        extract($row);

        $rssfeed .= '<item>';
        $rssfeed .= '<id>' . $aero_id . '</id>';
        $rssfeed .= '<title>' . $aero_name . '</title>';
        $rssfeed .= '<web>' . $aero_web . '</web>';
        $rssfeed .= '<rss>' . $aero_rss . '</rss>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
