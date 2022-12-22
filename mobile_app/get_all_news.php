<?php
include '../dbcon.php';
$processStatus[0]["error"] = false;
$processStatus[0]["message"] = "Connection Reset";

function getSafeValue($value){
	global $conn;
	return strip_tags(
		mysqli_real_escape_string($conn, $value)
	);
}

if(isset($_POST['scriptPassword']) && getSafeValue($_POST['scriptPassword']) == "ad38b53ef326ef"){
	$val = isset($_POST['lastBlogId']) && isset($_POST['blogLimit']);

	if($val){
		$lastBlogId = getSafeValue($_POST['lastBlogId']);
		$blogLimit = getSafeValue($_POST['blogLimit']);

		// Validation Part
	  	if($processStatus[0]["error"] == false && $blogLimit == 0){
	  		$processStatus[0]["error"] = true;
	  		$processStatus[0]["message"] = "Invalid Parameter";
	  	}

	  	if($processStatus[0]["error"] == false){
	  		if($lastBlogId == 0){
	  			$sql = "Select * from news_content where status = 'Active' order by updated_on DESC LIMIT $blogLimit";
	  			$processStatus[0]["dataList"] = $lastBlogId.' '.$blogLimit.' '.'1';
	  		}else{
	  			$sql = "Select * from news_content where status = 'Active' and blog_id < '$lastBlogId' order by updated_on DESC LIMIT $blogLimit";
	  			$processStatus[0]["dataList"] = $lastBlogId.' '.$blogLimit.' '.'2';
	  		}

	  		$res = $conn->query($sql);

	  		if($res->num_rows > 0){
	  			$processStatus[0]["error"] = false;
	  			$processStatus[0]["message"] = "Data Retreived";

	  			$newsContentArr = Array();
	  			while($row = $res->fetch_assoc()){
	  			    
	  				$row['updated_on'] = date('F jS Y', strtotime($row['updated_on']));
	  				
	  				$coverImg = $row['cover_img'];
	  				
	  				if($row['type'] == "Article"){
	  					$row['cover_img'] = 'https://indiatvonline.in/ito1.2/assets/blog_images/'.$coverImg;
	  				}
	  				else{
	  					$row['video_link'] = $coverImg;
	  					$img_url = explode('?v=',$coverImg);
	  					$row['cover_img'] = "https://img.youtube.com/vi/".$img_url[1]."/0.jpg";
	  				}
	  				$row['content'] = json_encode($row['content'], JSON_UNESCAPED_SLASHES);
	  				$newsContentArr[count($newsContentArr)] = $row;
	  			}
	  			$processStatus[0]["newsContentArr"] = $newsContentArr;
	  		}
	  		else{
	  			$processStatus[0]["error"] = true;
	  			$processStatus[0]["message"] = "No News available";
	  		}
	  	}
	}
}
else{
    echo "Invalid Password";
}
mysqli_close($conn);
header('Content-Type: application/json');
echo json_encode($processStatus);
?>