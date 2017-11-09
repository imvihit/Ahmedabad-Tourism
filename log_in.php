<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ahmedabad_Tourism</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
</head>
<body>
<div id="bg">

<div id="main">
<!-- header begins -->
<div id="header">
	<div id="logo">
	  <h3>&nbsp;</h3>
    </div>
   <div id="buttons">
       <a href="About-Ahmedabad.php" class="but"  title="">Ahmedabad</a><div class="but_razd"></div>
      <a href="tourist-hub.php" class="but" title="">Tourist_Hub</a><div class="but_razd"></div>
      <a href="gallery.php"  class="but" title="">Gallery</a><div class="but_razd"></div>
      <a href="about_us.php"  class="but" title="">About us</a><div class="but_razd"></div>
      <a href="Booking.php" class="but"  title="">TravelBooking</a><div class="but_razd"></div>
	  <a href="contact_us.php" class="but" title="">Contact us</a>
	   <a href="log_in.php" class="but" title="">Log_In</a>
	  
    </div>
</div>
<!-- header ends -->
<div class="cont_top"></div>
<!-- content begins -->       
<div id="content">
    <div>
      <div id="center">
          <div class=" right_box_top"></div>
          <div class="text">
            <h1>&nbsp;</h1>
            <form action="log_in.php" method="post">
              <h1>Log In</h1>
              <p>&nbsp;</p>
              <p><span class="style1">User Name</span> &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="textfield" />
              </p>
              <p>&nbsp;</p>
              <p class="style1">Password &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="password" name="textfield2" />
              </p>
              <label></label>
              </p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="registration.php"><span class="style1">&nbsp;Registration</span></a> </p>
              <div></div>
              <div></div>
              <div>
                <input class="submit2" name="Submit" type="submit" value="submit" />
              </div>
            </form> 
          </div>
          <div class="right_box_bot"></div>
          
        </div>
    	<div style="clear: both;"></div>
    </div>
    <div style="height:15px"></div>
 <!-- bottom begin -->
 <!-- bottom end -->
</div>
<div class="cont_bot"></div>
    <!-- content ends --> 

<!-- footer begins -->
            <div id="footer"></div>
        <!-- footer ends -->
</div>



</div>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("pre5");
	session_start();
	$errorMessage = '';
	if (isset($_POST['textfield']) && isset($_POST['textfield2']))
	{
		$textfield = $_POST['textfield'];
		$textfield2 = $_POST['textfield2'];
		$query ="select * from user where (user_name = '$textfield' && user_pass = '$textfield2')";
		$ans = mysql_query($query);
		if(mysql_num_rows($ans)>0)
		{
			 while ($row = mysql_fetch_array($ans))
			 {
				$access = $row[3];
				$flag = 1;
			 } 
		}	
		else
		{	
			$errorMessage = 'Sorry, wrong user id / password';
			?>
				<p align="left"><strong><font color="#990000"><?php echo $errorMessage; ?></font></strong></p>
				<?php
		}
		if($flag == 1)
		{
			$_SESSION['textfield'] = $textfield;
			if($access == 'a')
			{
				$_SESSION['access'] = "a";
				header('Location:admin/gallery.php');
			}
			else
			{
				$_SESSION['access'] = "u";
				header('Location:About-Ahmedabad.php');
			}
		}
}
?>
</body>
</html>
