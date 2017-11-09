<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("image",$conn);

$testpic = '0.jpg';
$ext = 'jpg'; 

//$testpic = 'testpic.gif';
//$ext = 'gif'; 

//$testpic = 'testpic.png';
//$ext = 'png';




$handle = fopen($testpic, "rb");
$img = fread($handle, filesize($testpic));
fclose($handle);


$img = base64_encode($img); 

$sql = "insert into img values(null,'$img','$ext','female');"; 

mysql_query($sql) or die('Bad Query at 12'.mysql_error()); 

echo "Success! You have inserted your picture!";




$sql = "select pics, ext from img where id='4'"; 

$result = mysql_query($sql) or die('Bad query at 12!'.mysql_error()); 

while($row = mysql_fetch_array($result,MYSQL_ASSOC)){

$img1 = $row['pics'];
$type = $row['ext'];


} 

$img1 = base64_decode($img1); 


$img1 = imagecreatefromstring("box_home.gif");
if ($img1 !== false) { 
switch ($type) {
case "jpg":
header("Content-Type: image/jpeg");
imagejpeg($img1);
break;
case "gif":
header("Content-Type: image/gif");
imagegif($img1);
break;
case "png":
header("Content-Type: image/png");
imagepng($img1);
break;
}


}


?>
<img src="0.jpg"/>
</body>
</html>
