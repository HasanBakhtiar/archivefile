<?php 

include 'header.php';


?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">


    </div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          <form action="" method="POST" >
            <div class="input-group">
              <input type="text" class="form-control" name="aranan" placeholder="Axtarış...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="arama">Axtar!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
             <div align="left" class="col-md-6">
              <h2>galleryya Şəkil Yükləmə <small>
              <?php 
                    if (@$_GET['sistem']=="ok") {
                      echo "<span style='font-size:15px;color:#30e714'>Əməliyyat uğurla yerinə yetirildi.</span>";
                    }elseif(@$_GET['sistem']=="no"){
                      echo "<p style='color:red'>Əməliyyat uğursuz oldu</p>";
                    }else{
                      echo "";
                    }

                    ?></small></h2><br>
              </div>
              <form  action="../connect/operation.php" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="archivefile_id" value="<?php echo $_GET['archivefile_id']; ?>">

                <div align="right" class="col-md-6">
                  <button type="submit" name="archivefilegallerydel"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilənləri Sil</button>
                  <a class="btn btn-success" href="archivefile-gallery-download.php?archivefile_id=<?php echo $_GET['archivefile_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i>Şəkilləri Yüklə</a>
                </div>
                <div class="clearfix"></div>
              </div>


              <div class="x_content">


                <?php

                $sayfada = 25;   // seyfede gosterilecek sekil sayi


                $sorgu=$db->prepare("select * from archivefile_gallery");
                $sorgu->execute();
                $toplam_archivefilegallery=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_archivefilegallery / $sayfada);

                  // eger seyfeye girilmemişse 1 deyek.
                $sayfa = isset($_GET['page']) ? (int) $_GET['page'] : 1;

          // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

        // umumi seyfe sayımızdan cox yazılırsa en son seyfeni deyek.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;

                $archivefilegallerysor=$db->prepare("select * from archivefile_gallery where archivefile_id=:archivefile_id order by archivefile_gallery_id DESC limit $limit,$sayfada");
                $archivefilegallerysor->execute(array(
                  'archivefile_id' => $_GET['archivefile_id']
                  ));

                  while($archivefilegallerycek=$archivefilegallerysor->fetch(PDO::FETCH_ASSOC)) { ?>



                  <div class="col-md-55">
                   <label>
                    <div class="image view view-first">
                      <img style="width: 250px; height: 100px; display: block;" src="../<?php echo $archivefilegallerycek['archivefile_gallery_photo']; ?>" alt="image" />
                      <div class="mask">
                        <p> <?php echo $archivefilegallerycek['archivefile_gallery_id']; ?></p>
                        <div class="tools tools-bottom">

                          <!--<a href="#"><i class="fa fa-times"></i></a>-->

                        </div>

                      </div>

                    </div>

                    <?php  @array("$archivefilegalleryselect"); ?>


                    <input type="checkbox" name="archivefilegalleryselect[]"  value="<?php echo $archivefilegallerycek['archivefile_gallery_id']; ?>" > Seç
                  </label>


                </div>

                <?php } ?>

                <div align="right" class="col-md-12">
                  <ul class="pagination">

                    <?php

                    $s=0;

                    while ($s < $toplam_sayfa) {

                      $s++; ?>

                      <?php 

                      if ($s==$sayfa) {?>

                      <li class="active">

                        <a href="archivefilegallery.php?page=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php } else {?>


                      <li>

                        <a href="archivefilegallery.php?page=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php   }

                    }

                    ?>

                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
