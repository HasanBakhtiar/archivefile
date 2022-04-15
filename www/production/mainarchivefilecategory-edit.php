<?php 

include 'header.php'; 


$mainarchivefilecategoryask=$db->prepare("SELECT * FROM mainarchivefilecategory where mainarchivefilecategory_id=:mainarchivefilecategory_id");
$mainarchivefilecategoryask->execute(array(
  'mainarchivefilecategory_id' => $_GET['mainarchivefilecategory_id']
  ));

$mainarchivefilecategorypull=$mainarchivefilecategoryask->fetch(PDO::FETCH_ASSOC);


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Arxiv Fayıl Kateqoriya Düzəlt <small>,
            <?php 
                    if (@$_GET['sistem']=="ok") {
                      echo "<span style='font-size:15px;color:#30e714'>Əməliyyat uğurla yerinə yetirildi.</span>";
                    }elseif(@$_GET['sistem']=="no"){
                      echo "<p style='color:red'>Əməliyyat uğursuz oldu</p>";
                    }else{
                      echo "";
                    }

                    ?>

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form action="../connect/operation.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

           

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya Ad EN <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mainarchivefilecategory_name"  required="required" value="<?php echo $mainarchivefilecategorypull['mainarchivefilecategory_name'] ?>"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya Ad AZ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mainarchivefilecategory_nameaz"  required="required" value="<?php echo $mainarchivefilecategorypull['mainarchivefilecategory_nameaz'] ?>"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mainarchivefilecategory_row"  required="required" value="<?php echo $mainarchivefilecategorypull['mainarchivefilecategory_row'] ?>"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>





            <input type="hidden" name="mainarchivefilecategory_id" value="<?php echo $mainarchivefilecategorypull['mainarchivefilecategory_id'] ?>">


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="mainarchivefilecategoryedit" class="btn btn-success">Yenilə</button>
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
