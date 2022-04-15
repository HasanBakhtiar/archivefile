<?php include 'header.php'; 

//Melumatları bura daxil etmək.
$archivefilegetir=$db->prepare("SELECT * FROM archivefile where archivefile_id=:id ");
$archivefilegetir->execute(array(
  'id'=>0
));
$archivefilecek=$archivefilegetir->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Arxiv Fayıl Artır <small>,

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form action="../connect/operation.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">




            <div class="form-group row">
              <label class="col-sm-3 col-md-3 form-control-label" for="first-name">Arxiv Fayıl Kateqoriya Seç<span class="required">*</span>
                </label>
                <div class="col-sm-9 col-md-6">

                  <?php  

                  @$archivefile_id=$archivefilecek['archivefilecategory_id']; 

                  $archivefilecategorysor=$db->prepare("select * from archivefilecategory order by archivefilecategory_row");
                  $archivefilecategorysor->execute(array(
                    
                    ));

                    ?>
                    <select class="select2_multiple form-control" required="" name="archivefilecategory_id" >


                     <?php 

                     while($archivefilecategorycek=$archivefilecategorysor->fetch(PDO::FETCH_ASSOC)) {

                       $archivefilecategory_id=$archivefilecategorycek['archivefilecategory_id'];

                       ?>

                       <option  value="<?php echo $archivefilecategorycek['archivefilecategory_id']; ?>"><?php echo $archivefilecategorycek['archivefilecategory_urlname']; ?></option>

                       <?php } ?>

                     </select>
                   </div>
                 </div>


       


            

              


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefile_urlname"   placeholder="category Link giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Ad EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefile_name"  required="required" placeholder="category adını giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Ad AZ<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefile_nameaz"  required="required" placeholder="category adını giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefile_row"  required="required" placeholder="category sıra giriniz"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Məlumat EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="archivefile_text"></textarea>
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


<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Məlumat AZ<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="archivefile_textaz"></textarea>
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
             
             


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="archivefileadd" class="btn btn-success">Artır</button>
              </div>
            </div>

          </form>



        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
