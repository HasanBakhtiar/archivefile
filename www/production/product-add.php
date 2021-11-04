<?php include 'header.php'; 

//Melumatları bura daxil etmək.
$productgetir=$db->prepare("SELECT * FROM product where product_id=:id ");
$productgetir->execute(array(
  'id'=>0
));
$productcek=$productgetir->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Məhsul Artır <small>,

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form action="../connect/operation.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">




            <div class="form-group row">
              <label class="col-sm-3 col-md-3 form-control-label" for="first-name">Məhsul Kateqoriya Seç<span class="required">*</span>
                </label>
                <div class="col-sm-9 col-md-6">

                  <?php  

                  @$product_id=$productcek['productcategory_id']; 

                  $productcategorysor=$db->prepare("select * from productcategory order by productcategory_row");
                  $productcategorysor->execute(array(
                    
                    ));

                    ?>
                    <select class="select2_multiple form-control" required="" name="productcategory_id" >


                     <?php 

                     while($productcategorycek=$productcategorysor->fetch(PDO::FETCH_ASSOC)) {

                       $productcategory_id=$productcategorycek['productcategory_id'];

                       ?>

                       <option  value="<?php echo $productcategorycek['productcategory_id']; ?>"><?php echo $productcategorycek['productcategory_urlname']; ?></option>

                       <?php } ?>

                     </select>
                   </div>
                 </div>


       


            

              


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_urlname"   placeholder="category Link giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Ad EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_name"  required="required" placeholder="category adını giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Ad AZ<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_nameaz"  required="required" placeholder="category adını giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_row"  required="required" placeholder="category sıra giriniz"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Məlumat EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="product_text"></textarea>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Məlumat AZ<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="product_textaz"></textarea>
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
                <button type="submit" name="productadd" class="btn btn-success">Artır</button>
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
