<?php 

include 'header.php'; 

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Məhsul Kateqoriya Artır <small>,

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

                  @$product_id=$productcek['mainproductcategory_id']; 

                  $mainproductcategorysor=$db->prepare("select * from mainproductcategory order by mainproductcategory_row");
                  $mainproductcategorysor->execute(array(
                    
                    ));

                    ?>
                    <select class="select2_multiple form-control" required="" name="mainproductcategory_id" >


                     <?php 

                     while($mainproductcategorycek=$mainproductcategorysor->fetch(PDO::FETCH_ASSOC)) {

                       $mainproductcategory_id=$mainproductcategorycek['mainproductcategory_id'];

                       ?>

                       <option  value="<?php echo $mainproductcategorycek['mainproductcategory_id']; ?>"><?php echo $mainproductcategorycek['mainproductcategory_name']; ?></option>

                       <?php } ?>

                     </select>
                   </div>
                 </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Kateqoriya URL  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="productcategory_urlname"  required="required" placeholder="Məhsul Kateqoriya URL daxil edin" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Kateqoriya Ad EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="productcategory_name"   placeholder="Məhsul Kateqoriya Ad EN daxil edin" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Kateqoriya Ad AZ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="productcategory_nameaz"   placeholder="Məhsul Kateqoriya Ad AZ daxil edin" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              

      

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Məhsul Kateqoriya  Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="productcategory_row"  required="required" placeholder="Məhsul Kateqoriya Sıra daxil edin"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              


             


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="productcategoryadd" class="btn btn-success">Artır</button>
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
