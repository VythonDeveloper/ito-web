<?php

include 'dbcon.php';

function getSafeValue($value){
	global $conn;
	return strip_tags(
		mysqli_real_escape_string($conn, $value)
	);
}

function getFirst10Article(){
	global $conn;
	$newsData = Array();
	$res = mysqli_query($conn, "Select * from news_content where status = 'Active' and type = 'Article' order by id DESC LIMIT 10");
	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			$arrCount = count($newsData);
			$newsData[$arrCount] = $row;
		}
	}
	return $newsData;
}

function getAllNews(){
	global $conn;
	$newsData = Array();
	$res = mysqli_query($conn, "Select * from news_content where status = 'Active' order by id DESC");
	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			$arrCount = count($newsData);
			$newsData[$arrCount] = $row;
		}
	}
	return $newsData;
}

function getCategoryNews($category){
	global $conn;
	$category = getSafeValue($category);
	$newsData = Array();

	$res = mysqli_query($conn, "Select * from news_content where status = 'Active' and category = '$category' order by id DESC");
	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			$arrCount = count($newsData);
			$newsData[$arrCount] = $row;
		}
	}
	return $newsData;
}

function getArticleById($newsId){
	global $conn;
	$newsId = getSafeValue($newsId);
	$newsData = Array();

	$res = mysqli_query($conn, "Select * from news_content where status = 'Active' and id = '$newsId'");
	$newsData = mysqli_fetch_assoc($res);
	return $newsData;
}

function get5RandomArticle(){
	global $conn;
	$newsData = Array();

	$res = mysqli_query($conn, "Select * from news_content where status = 'Active' and type = 'Article' order by RAND() LIMIT 5");
	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			$arrCount = count($newsData);
			$newsData[$arrCount] = $row;
		}
	}
	return $newsData;
}

function get5RandomNews(){
	global $conn;
	$newsData = Array();

	$res = mysqli_query($conn, "Select * from news_content where status = 'Active' order by RAND() LIMIT 5");
	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			$arrCount = count($newsData);
			$newsData[$arrCount] = $row;
		}
	}
	return $newsData;
}

function getuseripaddr(){
	global $conn;
	
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    $iplat = $ipdat->geoplugin_latitude;
    $iplong = $ipdat->geoplugin_longitude;
    $ipcountry = $ipdat->geoplugin_countryName;
    $ipcity = $ipdat->geoplugin_city;

    // Counter
	$month=date('M Y');
	$conn->query("Update user_visit set u_visit =u_visit+1 where month='$month' and ip='$ip'");
	if($conn->affected_rows !=1){
	    $conn->query("Insert into user_visit(month, u_visit, ip, ip_lat, ip_long, ip_country, ip_city) Values('$month','1','$ip', '$iplat','$iplong','$ipcountry','$ipcity')");
	}
}

function getPageStats(){
	global $conn;
	$pageData = Array();
	$res = mysqli_query($conn, "SELECT (select count(id) from news_content) as totalblog , (select sum(u_visit) from user_visit) as pagevisit");
	if(mysqli_num_rows($res) > 0){
		while($row = mysqli_fetch_assoc($res)){
			$pageData = $row;
		}
	}
	return $pageData;
}
?>