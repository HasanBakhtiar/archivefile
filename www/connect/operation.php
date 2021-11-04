<?php
ob_start();
session_start();

include 'conn.php';

if (isset($_POST['adminsignin'])) {

    $user_mail=$_POST['user_mail'];
    $user_password=md5($_POST['user_password']);

    //İstfadəçini bura daxil etmək.
$userbring=$db->prepare("SELECT * FROM user where user_mail=:mail and user_password=:password
 and 	user_permission=:permission");
$userbring->execute(array(
  'mail' => $user_mail,
  'password' => $user_password,
  'permission' => 5

));

$say=$userbring->rowCount();
if ($say==1) {
    $_SESSION['user_mail']=$user_mail;
    header("Location:../production/index.php");
    exit;
}else{
    header("Location:../production/login.php?system=no");
    exit;
}  
}















if (isset($_POST['logoedit'])) {

	

	$uploads_dir = '../../images/logo';

	@$tmp_name = $_FILES['setting_logo']["tmp_name"];
	@$name = $_FILES['setting_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
    
   

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
	$edit=$db->prepare("UPDATE setting SET
		setting_logo=:logo
		WHERE setting_id=0");
	$update=$edit->execute(array(
		'logo' => $refimgyol
		));



	if ($update) {

		

		Header("Location:../production/setting.php?sistem=ok");

	} else {

		Header("Location:../production/setting.php?sistem=no");
	}

}


if (isset($_POST['infostorage'])) {
    $storage=$db->prepare("UPDATE setting SET
    
    setting_title=:setting_title,
    setting_description=:setting_description,
    setting_keywords=:setting_keywords
    WHERE  setting_id=0");

    $yenile=$storage->execute(array(
        'setting_title' => $_POST['setting_title'],
        'setting_description' => $_POST['setting_description'],
        'setting_keywords' => $_POST['setting_keywords']
    ));

    if($yenile){
        header("Location:../production/setting.php?sistem=ok");
    }else{
        header("Location:../production/setting.php?sistem=no");

    }
}

if (isset($_POST['contactstorage'])) {
    $storage=$db->prepare("UPDATE setting SET
    
		setting_tel=:setting_tel,
		setting_mail=:setting_mail,
		setting_address=:setting_address,
		setting_addressaz=:setting_addressaz,
		setting_facebook=:setting_facebook,
		setting_instagram=:setting_instagram,
		setting_youtube=:setting_youtube
    WHERE  setting_id=0");

    $yenile=$storage->execute(array(
        'setting_tel' => $_POST['setting_tel'],
        'setting_mail' => $_POST['setting_mail'],
        'setting_address' => $_POST['setting_address'],
        'setting_addressaz' => $_POST['setting_addressaz'],
        'setting_facebook' => $_POST['setting_facebook'],
        'setting_instagram' => $_POST['setting_instagram'],
        'setting_youtube' => $_POST['setting_youtube']
    ));

    if($yenile){
        header("Location:../production/contact.php?sistem=ok");
    }else{
        header("Location:../production/contact.php?sistem=no");

    }
}




//user bolmesi info yenileme

if (isset($_POST['userstorage'])) {
$user_id=$_POST['user_id'];

    $storage=$db->prepare("UPDATE user SET
    
    user_aze=:user_aze,
    user_ad=:user_ad,
    user_soyad=:user_soyad,
    user_tel=:user_tel
    WHERE  user_id={$_POST['user_id']}");

    $yenile=$storage->execute(array(
        'user_aze' => $_POST['user_aze'],
        'user_ad' => $_POST['user_ad'],
        'user_soyad' => $_POST['user_soyad'],
        'user_tel' => $_POST['user_tel']
    ));

    if($yenile){
        header("Location:../production/user.php?user_id=$user_id&sistem=ok");
    }else{
        header("Location:../production/user.php?user_id=$user_id&sistem=no");

    }
}


   
   
   
    






  
   //about photo

if (isset($_POST['aboutphotoduzelt'])) {

	

	$uploads_dir = '../../images/about';

	@$tmp_name = $_FILES['about_photo']["tmp_name"];
	@$name = $_FILES['about_photo']["name"];

	$benzersizsayi4=rand(20000,32000);
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
    
   

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
	$edit=$db->prepare("UPDATE about SET
		about_photo=:aboutphoto
		WHERE about_id=0");
	$update=$edit->execute(array(
		'aboutphoto' => $refimgyol
		));



	if ($update) {

		$resimsilunlink=$_POST['kohne_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/about.php?sistem=ok");

	} else {

		Header("Location:../production/about.php?sistem=no");
	}

}

//about bolmesi content yenileme

if (isset($_POST['aboutstorage'])) {
    $storage=$db->prepare("UPDATE about SET
    
    about_header=:about_header,
    about_headeraz=:about_headeraz,
    about_content=:about_content,
    about_contentaz=:about_contentaz
    WHERE  about_id=0");

    $yenile=$storage->execute(array(
        'about_header' => $_POST['about_header'],
        'about_headeraz' => $_POST['about_headeraz'],
        'about_content' => $_POST['about_content'],
        'about_contentaz' => $_POST['about_contentaz']
    ));

    if($yenile){
        header("Location:../production/about.php?sistem=ok");
    }else{
        header("Location:../production/about.php?sistem=no");

    }
}
  

  
   


if (isset($_POST['sliderstorage'])) {


	$uploads_dir = '../../images/slider';
	@$tmp_name = $_FILES['slider_photoway']["tmp_name"];
	@$name = $_FILES['slider_photoway']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_name=:slider_name,
		slider_nameaz=:slider_nameaz,
		slider_row=:slider_row,
		slider_link=:slider_link,
		slider_linkaz=:slider_linkaz,
        slider_text=:slider_text,
        slider_textaz=:slider_textaz,
		slider_photoway=:slider_photoway
		");
	$insert=$kaydet->execute(array(
		'slider_name' => $_POST['slider_name'],
		'slider_nameaz' => $_POST['slider_nameaz'],
		'slider_row' => $_POST['slider_row'],
		'slider_link' => $_POST['slider_link'],
		'slider_linkaz' => $_POST['slider_linkaz'],
        'slider_text' => $_POST['slider_text'],
        'slider_textaz' => $_POST['slider_textaz'],
		'slider_photoway' => $refimgyol
		));

	if ($insert) {

		Header("Location:../production/slider.php?sistem=ok");

	} else {

		Header("Location:../production/slider.php?sistem=no");
	}




}



// Slider  Başla


if (isset($_POST['slideredit'])) {

	
	if($_FILES['slider_photoway']["size"] > 0)  { 


		$uploads_dir = '../../images/slider';
		@$tmp_name = $_FILES['slider_photoway']["tmp_name"];
		@$name = $_FILES['slider_photoway']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$edit=$db->prepare("UPDATE slider SET
			slider_name=:ad,
			slider_nameaz=:adaz,
			slider_link=:link,
			slider_linkaz=:linkaz,
			slider_row=:sira,
            slider_text=:context,
            slider_textaz=:contextaz,
			slider_stuation=:stuation,
			slider_photoway=:photoway	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$edit->execute(array(
			'ad' => $_POST['slider_name'],
			'adaz' => $_POST['slider_nameaz'],
			'link' => $_POST['slider_link'],
			'linkaz' => $_POST['slider_linkaz'],
			'sira' => $_POST['slider_row'],
            'context' => $_POST['slider_text'],
            'contextaz' => $_POST['slider_textaz'],
			'stuation' => $_POST['slider_stuation'],
			'photoway' => $refimgyol,
			));
		

		$slider_id=$_POST['slider_id'];

		if ($update) {

			$resimsilunlink=$_POST['slider_photoway'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&sistem=ok");

		} else {

			Header("Location:../production/slider-edit.php?sistem=no");
		}



	} else {

		$edit=$db->prepare("UPDATE slider SET
			slider_name=:ad,
			slider_nameaz=:adaz,
			slider_link=:link,
			slider_linkaz=:linkaz,
			slider_row=:sira,
			slider_text=:context,
			slider_textaz=:contextaz,
			slider_stuation=:stuation		
			WHERE slider_id={$_POST['slider_id']}");
		$update=$edit->execute(array(
			'ad' => $_POST['slider_name'],
			'adaz' => $_POST['slider_nameaz'],
			'link' => $_POST['slider_link'],
			'linkaz' => $_POST['slider_linkaz'],
			'sira' => $_POST['slider_row'],
			'context' => $_POST['slider_text'],
			'contextaz' => $_POST['slider_textaz'],
			'stuation' => $_POST['slider_stuation']
			));

		$slider_id=$_POST['slider_id'];

		if ($update) {

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&sistem=ok");

		} else {

			Header("Location:../production/slider-edit.php?sistem=no");
		}
	}

}


// Slider Bitiş

if ($_GET['slidersil']=="ok") {
	
	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id' => $_GET['slider_id']
		));

	if ($kontrol) {

		$resimsilunlink=$_GET['slider_photoway'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/slider.php?sistem=ok");

	} else {

		Header("Location:../production/slider.php?sistem=no");
	}

}




if(isset($_POST['productcategoryadd'])) {
  
    
    $yaddas=$db->prepare("INSERT INTO productcategory SET
            mainproductcategory_id=:mainproductcategory_id,
            productcategory_urlname=:urlname,
            productcategory_name=:name,
            productcategory_nameaz=:nameaz,
            productcategory_row=:row
            ");
    $update=$yaddas->execute(array(
                    'mainproductcategory_id' => $_POST['mainproductcategory_id'],
                    'urlname' => $_POST['productcategory_urlname'],
                    'name' => $_POST['productcategory_name'],
                    'nameaz' => $_POST['productcategory_nameaz'],
                    'row' => $_POST['productcategory_row']
        ));
        if($update){
            Header("Location:../production/productcategory.php?sistem=ok");
        }else{
            Header("Location:../production/productcategory.php?sistem=no");
        }
    
}

if(isset($_POST['productcategoryedit'])) {
    $productcategory_id=$_POST['productcategory_id'];
    
    $yaddas=$db->prepare("UPDATE productcategory SET

            mainproductcategory_id=:mainproductcategory_id,
            productcategory_urlname=:urlname,
            productcategory_name=:name,
            productcategory_nameaz=:nameaz,
            productcategory_row=:row
            WHERE productcategory_id={$_POST['productcategory_id']}");
    $update=$yaddas->execute(array(
			'mainproductcategory_id' => $_POST['mainproductcategory_id'],
			'urlname' => $_POST['productcategory_urlname'],
			'name' => $_POST['productcategory_name'],
			'nameaz' => $_POST['productcategory_nameaz'],
			'row' => $_POST['productcategory_row']
        ));
        if($update){
            Header("Location:../production/productcategory-edit.php?sistem=ok&productcategory_id=$productcategory_id");
        }else{
            Header("Location:../production/productcategory-edit.php?sistem=no&productcategory_id=$productcategory_id");
        }
    
}

if($_GET['productcategorydel']=="ok") {
    $sil=$db->prepare("DELETE from productcategory where productcategory_id=:productcategory_id");
    $yoxla=$sil->execute(array(
        'productcategory_id' => $_GET['productcategory_id']
        ));
        if($yoxla){
            header("location:../production/productcategory.php?sistem=ok");
        }else{
            header("location:../production/productcategory.php?sistem=no");
        }
}





if(isset($_POST['mainproductcategoryadd'])) {
  
    
    $yaddas=$db->prepare("INSERT INTO mainproductcategory SET
            mainproductcategory_name=:name,
            mainproductcategory_nameaz=:nameaz,
            mainproductcategory_row=:row
            ");
    $update=$yaddas->execute(array(
                    'name' => $_POST['mainproductcategory_name'],
                    'nameaz' => $_POST['mainproductcategory_nameaz'],
                    'row' => $_POST['mainproductcategory_row']
        ));
        if($update){
            Header("Location:../production/mainproductcategory.php?sistem=ok");
        }else{
            Header("Location:../production/mainproductcategory.php?sistem=no");
        }
    
  }
  
  if(isset($_POST['mainproductcategoryedit'])) {
    $mainproductcategory_id=$_POST['mainproductcategory_id'];
    
    $yaddas=$db->prepare("UPDATE mainproductcategory SET
            mainproductcategory_name=:name,
            mainproductcategory_nameaz=:nameaz,
            mainproductcategory_row=:row
            WHERE mainproductcategory_id={$_POST['mainproductcategory_id']}");
    $update=$yaddas->execute(array(
            'name' => $_POST['mainproductcategory_name'],
            'nameaz' => $_POST['mainproductcategory_nameaz'],
            'row' => $_POST['mainproductcategory_row']
        ));
        if($update){
            Header("Location:../production/mainproductcategory-edit.php?sistem=ok&mainproductcategory_id=$mainproductcategory_id");
        }else{
            Header("Location:../production/mainproductcategory-edit.php?sistem=no&mainproductcategory_id=$mainproductcategory_id");
        }
    
  }
  
  if($_GET['mainproductcategorydel']=="ok") {
    $sil=$db->prepare("DELETE from mainproductcategory where mainproductcategory_id=:mainproductcategory_id");
    $yoxla=$sil->execute(array(
        'mainproductcategory_id' => $_GET['mainproductcategory_id']
        ));
        if($yoxla){
            header("location:../production/mainproductcategory.php?sistem=ok");
        }else{
            header("location:../production/mainproductcategory.php?sistem=no");
        }
  }











   //product bolmesi melumat artir

   if (isset($_POST['productadd'])) {


    
   
   
    $kaydet=$db->prepare("INSERT INTO product SET
        productcategory_id=:productcategory_id,
        product_urlname=:product_urlname,
		product_name=:product_name,
		product_nameaz=:product_nameaz,
        product_row=:product_row,
        product_text=:product_text,
        product_textaz=:product_textaz
        ");
    $insert=$kaydet->execute(array(
        'productcategory_id' => $_POST['productcategory_id'],
        'product_urlname' => $_POST['product_urlname'],
        'product_name' => $_POST['product_name'],
        'product_nameaz' => $_POST['product_nameaz'],
        'product_row' => $_POST['product_row'],
        'product_text' => $_POST['product_text'],
        'product_textaz' => $_POST['product_textaz']
        ));
   
    if ($insert) {
   
        Header("Location:../production/product.php?sistem=ok");
   
    } else {
   
        Header("Location:../production/product.php?sistem=no");
    }
   
   
   }
   
   //product bolmesi melumat yenileme
   
   if (isset($_POST['productedit'])) {
    $product_id=$_POST['product_id'];
    
        $yaddas=$db->prepare("UPDATE product SET
        
        productcategory_id=:productcategory_id,
        product_urlname=:product_urlname,
		product_name=:product_name,
		product_nameaz=:product_nameaz,
        product_row=:product_row,
        product_text=:product_text,
        product_textaz=:product_textaz
        WHERE  product_id={$_POST['product_id']}");
    
        $yenile=$yaddas->execute(array(
            'productcategory_id' => $_POST['productcategory_id'],
            'product_urlname' => $_POST['product_urlname'],
            'product_name' => $_POST['product_name'],
            'product_nameaz' => $_POST['product_nameaz'],
            'product_row' => $_POST['product_row'],
            'product_text' => $_POST['product_text'],
            'product_textaz' => $_POST['product_textaz'],
            'product_urlname' => $_POST['product_urlname']
        ));
    
        if($yenile){
            header("Location:../production/product.php?product_id=$product_id&sistem=ok");
        }else{
            header("Location:../production/product.php?product_id=$product_id&sistem=no");
    
        }
    }


   
    
   
   
 

   
   
   if (@$_GET['productsil']=="ok") {
    $sil=$db->prepare("DELETE from product where product_id=:id");
    $kontrol=$sil->execute(array(
        'id' => $_GET['product_id']
    ));
   
    if ($kontrol) {
        header("location:../production/product.php?sil=ok");
    }else{
        header("location:../production/product.php?sil=no");
   
    }
   }
   

   if(isset($_POST['productgallerydel'])) {

    $product_id=$_POST['product_id'];


    echo $checklist = $_POST['productgalleryselect'];

    
    foreach($checklist as $list) {

        $sil=$db->prepare("DELETE from product_gallery where product_gallery_id=:product_gallery_id");
        $kontrol=$sil->execute(array(
            'product_gallery_id' => $list
            ));
    }

    if ($kontrol) {

        Header("Location:../production/product-gallery.php?product_id=$product_id&sistem=ok");

    } else {

        Header("Location:../production/product-gallery.php?product_id=$product_id&sistem=no");
    }


} 


if(isset($_POST['gallerydel'])) {

    $itemglry_id=$_POST['itemglry_id'];
    
    
    echo $checklist = $_POST['galleryselect'];
    
    
    foreach($checklist as $list) {
    
        $sil=$db->prepare("DELETE from gallery where gallery_id=:gallery_id");
        $kontrol=$sil->execute(array(
            'gallery_id' => $list
            ));
    }
    
    if ($kontrol) {
    
        Header("Location:../production/gallery-add.php?itemglry_id=$itemglry_id&sistem=ok");
    
    } else {
    
        Header("Location:../production/gallery-add.php?itemglry_id=$itemglry_id&sistem=no");
    }
    
    
    } 
   