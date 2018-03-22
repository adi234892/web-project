<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$msg=$_POST['msg'];
$con=mysqli_connect('localhost','root');
mysqli_select_db('$con','TP');
$q="insert into enquiry (name,email,number,message) values ('$name','$email',$number,'$msg')";
$status=mysqli_query('$con','$q');
mysqli_close('$con');
?>
<html>
  <head></head>
  <body>
    <?php 
	if($status==1)
		echo "Record Inserted";
	else
		echo "Insertion Failed";
	?>
  </body>
</html>