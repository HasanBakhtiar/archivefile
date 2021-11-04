<?php include 'header.php'; 

//Melumatları bura daxil etmək.
$userbring=$db->prepare("SELECT * FROM user ");
$userbring->execute(array(
  
));
?>

<head>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
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
                    <h2>İstifadəçilər | <span>
                    
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
                  
<!-- b -->
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Tarix</th>
                          <th>Ad Soyad</th>
                          <th>Mail</th>
                          <th>Tel</th>
                          
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      while ($userpull=$userbring->fetch(PDO::FETCH_ASSOC)) { ?>
                      
                      
                        <tr>
                          <td><?php echo $userpull['user_vaxt']; ?></td>
                          <td><?php echo $userpull['user_ad']; ?></td>
                          <td><?php echo $userpull['user_mail']; ?></td>
                          <td><?php echo $userpull['user_tel']; ?></td>
                          <td><center><a href="user-edit.php?user_id=<?php echo $userpull['user_id']; ?>"><button class="btn btn-primary btn-xs">Düzəlt</button></a></center></td>
                       
                        </tr>
                        

                        <?php } ?>
                      </tbody>
                    </table>
<!-- s -->



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            

<?php include 'footer.php' ?>