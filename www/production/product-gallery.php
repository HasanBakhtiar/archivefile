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

              <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>">

                <div align="right" class="col-md-6">
                  <button type="submit" name="productgallerydel"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilənləri Sil</button>
                  <a class="btn btn-success" href="product-gallery-download.php?product_id=<?php echo $_GET['product_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i>Şəkilləri Yüklə</a>
                </div>
                <div class="clearfix"></div>
              </div>


              <div class="x_content">


                <?php

                $sayfada = 25;   // seyfede gosterilecek sekil sayi


                $sorgu=$db->prepare("select * from product_gallery");
                $sorgu->execute();
                $toplam_productgallery=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_productgallery / $sayfada);

                  // eger seyfeye girilmemişse 1 deyek.
                $sayfa = isset($_GET['page']) ? (int) $_GET['page'] : 1;

          // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

        // umumi seyfe sayımızdan cox yazılırsa en son seyfeni deyek.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;

                $productgallerysor=$db->prepare("select * from product_gallery where product_id=:product_id order by product_gallery_id DESC limit $limit,$sayfada");
                $productgallerysor->execute(array(
                  'product_id' => $_GET['product_id']
                  ));

                  while($productgallerycek=$productgallerysor->fetch(PDO::FETCH_ASSOC)) { ?>



                  <div class="col-md-55">
                   <label>
                    <div class="image view view-first">
                      <img style="width: 250px; height: 100px; display: block;" src="../../<?php echo $productgallerycek['product_gallery_photo']; ?>" alt="image" />
                      <div class="mask">
                        <p> <?php echo $productgallerycek['product_gallery_id']; ?></p>
                        <div class="tools tools-bottom">

                          <!--<a href="#"><i class="fa fa-times"></i></a>-->

                        </div>

                      </div>

                    </div>

                    <?php  @array("$productgalleryselect"); ?>


                    <input type="checkbox" name="productgalleryselect[]"  value="<?php echo $productgallerycek['product_gallery_id']; ?>" > Seç
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

                        <a href="productgallery.php?page=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php } else {?>


                      <li>

                        <a href="productgallery.php?page=<?php echo $s; ?>"><?php echo $s; ?></a>

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
