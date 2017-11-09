<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("img");
if(isset($_POST['submit']))
  {
  	$extension = explode(".",$_FILES['img_file']['name']); 
	$num = count($extension)-1; 
	//echo $num."<br>";
    $file_photo=$_POST['img_id'].".".strtolower($extension[$num]);
	echo $file_photo."<br>";
	$href_img="images/$file_photo";
	//delete upto jpg...into mp3...
            if (($extension[$num] == "gif" or $extension[$num] == "png" or $extension[$num] == "bmp" or $extension[$num] == "jpg" or $extension[$num] == "jpeg")&&@copy ($_FILES['img_file']['tmp_name'], $href_img))
                unlink ($_FILES['img_file']['tmp_name']);
				
				
				
				
 // $target = "images/" . basename( $_FILES['img_file']['name']);
//echo $target."<br>";
//$name  =  $_POST ['name'];
$pic   = ($_FILES['img_file']['name']);
$id=$_POST['img_id'];
$title=$_POST['img_title'];
$desc=$_POST['img_desc'];
mysql_query ("insert into image values ('$id', '$title', '$desc', '$file_photo')");

//move_uploaded_file($_FILES['img_file']['tmp_name'], $file_photo);
//if(move_uploaded_file($_FILES['img_file']['tmp_name'], $file_photo))
  //  echo "The file ". basename( $_FILES['img_file']['name']). " has been uploaded.";
//else
  //  echo "Sorry, there was a problem uploading your file.";
	}
	
	header( 'Location:showimage.php' ) ;
  ?>
</body>
</html>

