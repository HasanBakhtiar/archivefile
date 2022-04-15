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
            <h2>Arxiv Fayıl Kateqoriya Artır <small>,

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

                  @$archivefile_id=$archivefilecek['mainarchivefilecategory_id']; 

                  $mainarchivefilecategorysor=$db->prepare("select * from mainarchivefilecategory order by mainarchivefilecategory_row");
                  $mainarchivefilecategorysor->execute(array(
                    
                    ));

                    ?>
                    <select class="select2_multiple form-control" required="" name="mainarchivefilecategory_id" >


                     <?php 

                     while($mainarchivefilecategorycek=$mainarchivefilecategorysor->fetch(PDO::FETCH_ASSOC)) {

                       $mainarchivefilecategory_id=$mainarchivefilecategorycek['mainarchivefilecategory_id'];

                       ?>

                       <option  value="<?php echo $mainarchivefilecategorycek['mainarchivefilecategory_id']; ?>"><?php echo $mainarchivefilecategorycek['mainarchivefilecategory_name']; ?></option>

                       <?php } ?>

                     </select>
                   </div>
                 </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya URL  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefilecategory_urlname"  required="required" placeholder="Arxiv Fayıl Kateqoriya URL daxil edin" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya Ad EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefilecategory_name"   placeholder="Arxiv Fayıl Kateqoriya Ad EN daxil edin" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya Ad AZ <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefilecategory_nameaz"   placeholder="Arxiv Fayıl Kateqoriya Ad AZ daxil edin" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              

      

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Arxiv Fayıl Kateqoriya  Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="archivefilecategory_row"  required="required" placeholder="Arxiv Fayıl Kateqoriya Sıra daxil edin"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              


             


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="archivefilecategoryadd" class="btn btn-success">Artır</button>
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
