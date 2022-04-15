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


   
   
   
    






   







if(isset($_POST['archivefilecategoryadd'])) {
  
    
    $yaddas=$db->prepare("INSERT INTO archivefilecategory SET
            mainarchivefilecategory_id=:mainarchivefilecategory_id,
            archivefilecategory_urlname=:urlname,
            archivefilecategory_name=:name,
            archivefilecategory_nameaz=:nameaz,
            archivefilecategory_row=:row
            ");
    $update=$yaddas->execute(array(
                    'mainarchivefilecategory_id' => $_POST['mainarchivefilecategory_id'],
                    'urlname' => $_POST['archivefilecategory_urlname'],
                    'name' => $_POST['archivefilecategory_name'],
                    'nameaz' => $_POST['archivefilecategory_nameaz'],
                    'row' => $_POST['archivefilecategory_row']
        ));
        if($update){
            Header("Location:../production/archivefilecategory.php?sistem=ok");
        }else{
            Header("Location:../production/archivefilecategory.php?sistem=no");
        }
    
}

if(isset($_POST['archivefilecategoryedit'])) {
    $archivefilecategory_id=$_POST['archivefilecategory_id'];
    
    $yaddas=$db->prepare("UPDATE archivefilecategory SET

            mainarchivefilecategory_id=:mainarchivefilecategory_id,
            archivefilecategory_urlname=:urlname,
            archivefilecategory_name=:name,
            archivefilecategory_nameaz=:nameaz,
            archivefilecategory_row=:row
            WHERE archivefilecategory_id={$_POST['archivefilecategory_id']}");
    $update=$yaddas->execute(array(
			'mainarchivefilecategory_id' => $_POST['mainarchivefilecategory_id'],
			'urlname' => $_POST['archivefilecategory_urlname'],
			'name' => $_POST['archivefilecategory_name'],
			'nameaz' => $_POST['archivefilecategory_nameaz'],
			'row' => $_POST['archivefilecategory_row']
        ));
        if($update){
            Header("Location:../production/archivefilecategory-edit.php?sistem=ok&archivefilecategory_id=$archivefilecategory_id");
        }else{
            Header("Location:../production/archivefilecategory-edit.php?sistem=no&archivefilecategory_id=$archivefilecategory_id");
        }
    
}

if($_GET['archivefilecategorydel']=="ok") {
    $sil=$db->prepare("DELETE from archivefilecategory where archivefilecategory_id=:archivefilecategory_id");
    $yoxla=$sil->execute(array(
        'archivefilecategory_id' => $_GET['archivefilecategory_id']
        ));
        if($yoxla){
            header("location:../production/archivefilecategory.php?sistem=ok");
        }else{
            header("location:../production/archivefilecategory.php?sistem=no");
        }
}





if(isset($_POST['mainarchivefilecategoryadd'])) {
  
    
    $yaddas=$db->prepare("INSERT INTO mainarchivefilecategory SET
            mainarchivefilecategory_name=:name,
            mainarchivefilecategory_nameaz=:nameaz,
            mainarchivefilecategory_row=:row
            ");
    $update=$yaddas->execute(array(
                    'name' => $_POST['mainarchivefilecategory_name'],
                    'nameaz' => $_POST['mainarchivefilecategory_nameaz'],
                    'row' => $_POST['mainarchivefilecategory_row']
        ));
        if($update){
            Header("Location:../production/mainarchivefilecategory.php?sistem=ok");
        }else{
            Header("Location:../production/mainarchivefilecategory.php?sistem=no");
        }
    
  }
  
  if(isset($_POST['mainarchivefilecategoryedit'])) {
    $mainarchivefilecategory_id=$_POST['mainarchivefilecategory_id'];
    
    $yaddas=$db->prepare("UPDATE mainarchivefilecategory SET
            mainarchivefilecategory_name=:name,
            mainarchivefilecategory_nameaz=:nameaz,
            mainarchivefilecategory_row=:row
            WHERE mainarchivefilecategory_id={$_POST['mainarchivefilecategory_id']}");
    $update=$yaddas->execute(array(
            'name' => $_POST['mainarchivefilecategory_name'],
            'nameaz' => $_POST['mainarchivefilecategory_nameaz'],
            'row' => $_POST['mainarchivefilecategory_row']
        ));
        if($update){
            Header("Location:../production/mainarchivefilecategory-edit.php?sistem=ok&mainarchivefilecategory_id=$mainarchivefilecategory_id");
        }else{
            Header("Location:../production/mainarchivefilecategory-edit.php?sistem=no&mainarchivefilecategory_id=$mainarchivefilecategory_id");
        }
    
  }
  
  if($_GET['mainarchivefilecategorydel']=="ok") {
    $sil=$db->prepare("DELETE from mainarchivefilecategory where mainarchivefilecategory_id=:mainarchivefilecategory_id");
    $yoxla=$sil->execute(array(
        'mainarchivefilecategory_id' => $_GET['mainarchivefilecategory_id']
        ));
        if($yoxla){
            header("location:../production/mainarchivefilecategory.php?sistem=ok");
        }else{
            header("location:../production/mainarchivefilecategory.php?sistem=no");
        }
  }











   //archivefile bolmesi melumat artir

   if (isset($_POST['archivefileadd'])) {


    
   
   
    $kaydet=$db->prepare("INSERT INTO archivefile SET
        archivefilecategory_id=:archivefilecategory_id,
        archivefile_urlname=:archivefile_urlname,
		archivefile_name=:archivefile_name,
		archivefile_nameaz=:archivefile_nameaz,
        archivefile_row=:archivefile_row,
        archivefile_text=:archivefile_text,
        archivefile_textaz=:archivefile_textaz
        ");
    $insert=$kaydet->execute(array(
        'archivefilecategory_id' => $_POST['archivefilecategory_id'],
        'archivefile_urlname' => $_POST['archivefile_urlname'],
        'archivefile_name' => $_POST['archivefile_name'],
        'archivefile_nameaz' => $_POST['archivefile_nameaz'],
        'archivefile_row' => $_POST['archivefile_row'],
        'archivefile_text' => $_POST['archivefile_text'],
        'archivefile_textaz' => $_POST['archivefile_textaz']
        ));
   
    if ($insert) {
   
        Header("Location:../production/archivefile.php?sistem=ok");
   
    } else {
   
        Header("Location:../production/archivefile.php?sistem=no");
    }
   
   
   }
   
   //archivefile bolmesi melumat yenileme
   
   if (isset($_POST['archivefileedit'])) {
    $archivefile_id=$_POST['archivefile_id'];
    
        $yaddas=$db->prepare("UPDATE archivefile SET
        
        archivefilecategory_id=:archivefilecategory_id,
        archivefile_urlname=:archivefile_urlname,
		archivefile_name=:archivefile_name,
		archivefile_nameaz=:archivefile_nameaz,
        archivefile_row=:archivefile_row,
        archivefile_text=:archivefile_text,
        archivefile_textaz=:archivefile_textaz
        WHERE  archivefile_id={$_POST['archivefile_id']}");
    
        $yenile=$yaddas->execute(array(
            'archivefilecategory_id' => $_POST['archivefilecategory_id'],
            'archivefile_urlname' => $_POST['archivefile_urlname'],
            'archivefile_name' => $_POST['archivefile_name'],
            'archivefile_nameaz' => $_POST['archivefile_nameaz'],
            'archivefile_row' => $_POST['archivefile_row'],
            'archivefile_text' => $_POST['archivefile_text'],
            'archivefile_textaz' => $_POST['archivefile_textaz'],
            'archivefile_urlname' => $_POST['archivefile_urlname']
        ));
    
        if($yenile){
            header("Location:../production/archivefile.php?archivefile_id=$archivefile_id&sistem=ok");
        }else{
            header("Location:../production/archivefile.php?archivefile_id=$archivefile_id&sistem=no");
    
        }
    }


   
    
   
   
 

   
   
   if (@$_GET['archivefilesil']=="ok") {
    $sil=$db->prepare("DELETE from archivefile where archivefile_id=:id");
    $kontrol=$sil->execute(array(
        'id' => $_GET['archivefile_id']
    ));
   
    if ($kontrol) {
        header("location:../production/archivefile.php?sil=ok");
    }else{
        header("location:../production/archivefile.php?sil=no");
   
    }
   }
   

   if(isset($_POST['archivefilegallerydel'])) {

    $archivefile_id=$_POST['archivefile_id'];


    echo $checklist = $_POST['archivefilegalleryselect'];

    
    foreach($checklist as $list) {

        $sil=$db->prepare("DELETE from archivefile_gallery where archivefile_gallery_id=:archivefile_gallery_id");
        $kontrol=$sil->execute(array(
            'archivefile_gallery_id' => $list
            ));
    }

    if ($kontrol) {

        Header("Location:../production/archivefile-gallery.php?archivefile_id=$archivefile_id&sistem=ok");

    } else {

        Header("Location:../production/archivefile-gallery.php?archivefile_id=$archivefile_id&sistem=no");
    }


} 

   