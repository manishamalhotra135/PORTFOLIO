<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'folio');
if(!$con)
{
	echo " not connected";
}

?>