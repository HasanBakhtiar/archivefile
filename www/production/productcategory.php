<?php 

include 'header.php'; 

$productcategoryask=$db->prepare("SELECT * FROM productcategory");
$productcategoryask->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Məhsul Kateqoriya Siyahı <small>,

            <?php 
                    if (@$_GET['stuation']=="ok") {
                      echo "<span style='font-size:15px;color:#30e714'>Əməliyyat uğurla yerinə yetirildi.</span>";
                    }elseif(@$_GET['stuation']=="no"){
                      echo "<p style='color:red'>Əməliyyat uğursuz oldu</p>";
                    }else{
                      echo "";
                    }

                    ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="productcategory-add"><button class="btn btn-success btn"> Artır</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Ad</th>
                  <th>Url</th>
                  <th>Sıra</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($productcategorypull=$productcategoryask->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $productcategorypull['productcategory_urlname'] ?></td>
                 <td><?php echo $productcategorypull['productcategory_name'] ?></td>
                 <td><?php echo $productcategorypull['productcategory_row'] ?></td>

               


            <td><center><a href="productcategory-edit.php?productcategory_id=<?php echo $productcategorypull['productcategory_id']; ?>"><button class="btn btn-primary btn-xs">Düzəlt</button></a></center></td>
            <td><center><a href="../connect/operation.php?productcategory_id=<?php echo $productcategorypull['productcategory_id']; ?>&productcategorydel=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
