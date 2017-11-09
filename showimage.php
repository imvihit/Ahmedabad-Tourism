
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
 <?php 
			 mysql_connect("localhost","root","");
			 mysql_select_db("img");
			 $query = 'select * from image';
			 $sql= mysql_query($query) or (die);
			 if(mysql_num_rows($sql)>0)
		{
			 while ($row = mysql_fetch_array($sql))
			 {
			 echo "<li>";
			 echo "<a href='images/$row[3]'>
                <img src='images/$row[3]' alt='' width='100' height='100' align='absmiddle' /></a>"; 
			echo "</li>";
		     }
		}
			 ?>	
</body>
</html>
