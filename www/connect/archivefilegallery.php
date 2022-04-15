<?php 

ob_start();
session_start();

include 'conn.php';

if (!empty($_FILES)) {



	$uploads_dir = '../allfiles';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$photoway=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$archivefile_id=$_POST['archivefile_id'];

	$kaydet=$db->prepare("INSERT INTO archivefile_gallery SET
		archivefile_gallery_photo=:photoway,
		archivefile_id=:archivefile_id");
	$insert=$kaydet->execute(array(
		'photoway' => $photoway,
		'archivefile_id' => $archivefile_id
		));




}





?>