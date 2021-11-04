<?php include 'header.php'; 

//İstifadəçınin məlumatlarını bura daxil etmək.
$istifadecigetir=$db->prepare("SELECT * FROM istifadeci where istifadeci_id=:id ");
$istifadecigetir->execute(array(
  'id'=>$_GET['istifadeci_id']
));
$istifadecicek=$istifadecigetir->fetch(PDO::FETCH_ASSOC); 
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
                    <h2>Istifadəçi Hesabı | <span>
                    
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
                    <form action="../connect/operation.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <?php $zaman=explode(" ",$istifadecicek['istifadeci_vaxt']); ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Qeydiyyat Tarixi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="" id="first-name" name="istifadeci_aze" disabled="" value="<?php echo $zaman[0];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Qeydiyyat Saatı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="time" id="first-name" name="istifadeci_aze" disabled="" value="<?php echo $zaman[1];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi AZE <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="istifadeci_aze" value="<?php echo $istifadecicek['istifadeci_aze'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="istifadeci_ad" value="<?php echo $istifadecicek['istifadeci_ad'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Soyad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="istifadeci_soyad" value="<?php echo $istifadecicek['istifadeci_soyad'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Mail<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="istifadeci_mail" disabled="" value="<?php echo $istifadecicek['istifadeci_mail'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Telefon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="istifadeci_tel" value="<?php echo $istifadecicek['istifadeci_tel'];?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

             
                      
                      <input type="hidden" name="istifadeci_id" value="<?php echo $istifadecicek['istifadeci_id']; ?>">
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="istifadeciyaddas" class=" btn btn-success">Yenilə</button>
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