<?php
class Manage{
	/*public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}
	} */
	
	/* public function get_data(){
		$sql = "SELECT * FROM tbl_aero";
		$result = mysqli_query($this->db,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
    } */

    public function spacex_feed(){
        $domOBJ = new DOMDocument();
        $domOBJ->load("http://www.spacex.com/news.xml");
        $content = $domOBJ->getElementsByTagName("item");
        return $content;
    }

    public function airbus_feed(){
        $domOBJ = new DOMDocument();
        $domOBJ->load("http://www.airbus.com/rss-feeds/space.rss");
        $content = $domOBJ->getElementsByTagName("item");
        return $content;
    }

    public function nasa_feed(){
        $domOBJ = new DOMDocument();
        $domOBJ->load("http://www.nasa.gov/rss/dyn/breaking_news.rss");
        $content = $domOBJ->getElementsByTagName("item");
        return $content;
    }
	
}