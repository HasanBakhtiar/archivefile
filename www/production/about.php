<?php include 'header.php'; 

//contentları bura daxil etmək.
$aboutbring=$db->prepare("SELECT * FROM about where about_id=:id ");
$aboutbring->execute(array(
  'id'=>0
));
$aboutpull=$aboutbring->fetch(PDO::FETCH_ASSOC);
?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Haqqımızda | <span>
                    
                    <?php 
                    if (@$_GET['sistem']=="ok") {
                      echo "<span style='font-size:15px;color:#30e714'>Əməliyyat uğurla yerinə yetirildi.</span>";
                    }elseif(@$_GET['sistem']=="no"){
                      echo "<p style='color:red'>Əməliyyat uğursuz oldu</p>";
                    }else{
                      echo "";
                    }

                    ?>
                    
                    </span></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../connect/operation.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yükləniş Şəkil<br>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">

    <?php 
    if (strlen($aboutpull['about_photo'])>0) {?>

    <img width="200"  src="../../<?php echo $aboutpull['about_photo']; ?>">

    <?php } else {?>


    <img width="200"  src="../../images" alt="Şəkil Yoxdur">


    <?php } ?>

    
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şəkil Seç<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="first-name"  name="about_photo"  class="form-control col-md-7 col-xs-12">
  </div>
</div>

<input type="hidden" name="kohne_yol" value="<?php echo $aboutpull['about_photo']; ?>">

<div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
  <button type="submit" name="aboutphotoduzelt" class="btn btn-primary">Yenilə</button>
</div>

</form>
<hr>
                    <form action="../connect/operation.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Başlıq EN  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="about_header" value="<?php echo $aboutpull['about_header'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Başlıq AZ  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="about_headeraz" value="<?php echo $aboutpull['about_headeraz'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         <!-- Ck Editör Başlangıç -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Məlumat EN <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="about_content"><?php echo $aboutpull['about_content']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->



               <!-- Ck Editör Başlangıç -->

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Haqqımızda Məlumat AZ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="about_contentaz"><?php echo $aboutpull['about_contentaz']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->

               

               
                      
                      
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="aboutstorage" class=" btn btn-success">Yenilə</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            

<?php include 'footer.php' ?>