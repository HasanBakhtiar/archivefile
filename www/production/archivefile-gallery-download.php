<?php include 'header.php'; ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title"></div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          <form action="" method="POST">
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

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Qleriyanı zənginləşdir.</h2>

                      <div align="right" class="col-md-9">
                     
                        <a class="btn btn-success" href="archivefile-gallery.php?archivefile_id=<?php echo $_GET['archivefile_id'];?>"><i class="fa fa-compass"  aria-hidden="true"></i> Yüklənmiş Şəkillərə Bax</a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <p>galleryya Şəkil artır.</p>
                      

                      <form action="../connect/archivefilegallery.php" class="dropzone" >

                        <input type="hidden" name="archivefile_id" value="<?php echo $_GET['archivefile_id'];  ?>">
                        
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
