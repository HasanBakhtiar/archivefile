<?php 

ob_start();
session_start();

include 'conn.php';

if (!empty($_FILES)) {



	$uploads_dir = '../../images/itemglry';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$photoway=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$itemglry_id=$_POST['itemglry_id'];

	$kaydet=$db->prepare("INSERT INTO gallery SET
		gallery_photo=:photoway,
		itemglry_id=:itemglry_id");
	$insert=$kaydet->execute(array(
		'photoway' => $photoway,
		'itemglry_id' => $itemglry_id
		));




}





?>