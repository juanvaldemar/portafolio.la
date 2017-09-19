<?php 

	$user_name = "u269207917_root";
	$user_pass = "u269207917_root";
	$host_name = "mysql:host=mysql.hostinger.es";
	$db_name = "u269207917_dbju";


$con = mysqli_connect($host_name,$user_name,$user_pass,$db_name);

if($con)
{
	$image = $_POST["image"];
	$name = $_POST["name"];
	$sql = "INSERT INTO upImagen(name) VALUES('$name')";
	$upload_path="uploads/$name.jpg";

	 if(mysqli_query($con,$sql)){
		file_put_contents($upload_path,base64_decode($image));
		echo json_encode(array('response'=>'Image Uploaded Succesgly'));
	}
	else{
		echo json_encode(array('response'=>'Fallo'));
	} 
}
else{
	echo json_encode(array('response'=>'Fallo fallo Succesgly'));
}
mysqli_close($con);

/*
if($con){
	$qr = "INSERT INTO upImagen VALUES"
}*/

?>
