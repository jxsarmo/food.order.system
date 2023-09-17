<!DOCTYPE html>
<html lang="en">

<title>Yummy Bar</title>

    <?php
    session_start();
    include('header.php');
    include('admin/db_connect.php');

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if(!is_numeric($key))
			$_SESSION['setting_'.$key] = $value;
	}
    ?>

    <!-- <style>
    	header.masthead {
		  background: url(assets/img/);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style> -->

    
    <body id="page-top">

        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
        
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-warning" id="mainNav">
            <div class="container">
              <!-- logo -->
              <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Welcome to </h3>
              <a href="index.php" class="navbar-brand">
              <img src="img.model/logomenor.transp.png" width="250" height="100">
              </a>

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link text-primary js-scroll-trigger" href="index.php?page=home" style="font-size: 20px; font-weight:bold">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-primary js-scroll-trigger" href="index.php?page=cart_list" style="font-size: 20px; font-weight:bold"><span> <span class="badge badge-danger item_count">0</span> <i class="fa fa-shopping-cart"></i>  </span>Cart</a></li>
                        
                        <?php if(isset($_SESSION['login_user_id'])): ?>
                        <li class="nav-item"><a class="nav-link text-primary js-scroll-trigger" href="admin/ajax.php?action=logout2" style="font-size: 20px; font-weight:bold"><?php echo "Welcome ". $_SESSION['login_first_name'].' '.$_SESSION['login_last_name'] ?> <i class="fa fa-power-off"></i></a></li>
                      <?php else: ?>
                        <li class="nav-item"><a class="nav-link text-primary js-scroll-trigger" href="javascript:void(0)" id="login_now" style="font-size: 20px; font-weight:bold;">Login Here</a></li>
                      <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
      </div> 

      


      <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('login.php'); ?> 
      </div>
      </div>
    </div>
  </div>

        <section class="covercontainer">
          
              <div class="row">
                    <div class="col-md-12 d-flex mt-5 justify-content-center" style="background-color:#ffc107;">                    

                      
                      
                      <div class="col-md-6 align-self-center d-flex justify-content-center mt-5"> 
                         
                        <h1 class="display-4 justify-content-start text-danger" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"; >Please Login or Signup 
                          <br>
                          and start your <a href="" class="btn btn-primary btn-lg"> Order Here </a>
                                            
                    	</div> 

                      <div class="col-md-6 align-self-start"> 
                      <img src="img.model/happylady1.png" alt="">    
                    	</div>                                          

                      

                    </div><!-- end div col-md-6 -->
                </div>  <!-- end div row -->
          
        </section><!-- end div cover -->

        



<section id="About_us" class="caixa">

<div class="container">
  <div class="row">
    <div class="col-md-6 d-flex pt-2 justify-content-center">
      <div class="align-self-center">
        <h2 class="About_us">Idealized by a local family of food lovers... </h2>
        <p>
        That is why our goal is to provide fresh and delicious dishes to our community.
        We were created and survived 2020 with your support, we strive to be and to offer the best to our clients.         
        </p>
                      
      </div><!-- fim div align -->

     </div><!-- fim div texto -->

    <div class="col-md-6">

      <img src="img.model/family.jpg" class="img-fluid pt-5">
      

    </div><!-- fim div imagem -->

   </div><!-- fim div row -->
  
</div><!--fim div container -->

</section><!--fim secao saiba-->




  <div class="row">
            
      <div class="col-md-8 justiy-content-center pl-5 pt-5">

        <div class="text-center pb-3">
              <h2> Specials of the Week </h2>
          </div>  
          
          <br>
          <br>

       

        <div class="owl-carousel owl-theme pl-5 ml-5">


          <?php 

          /*send array to database*/

          
          $server = 'localhost';
          $user = 'root';
          $password = 'root';
          $db_name = 'yummy-bar'; /*name of the table created*/
          $port = '3306'; /*MySQL port in Xampp*/

          $db_connect = new mysqli($server,$user,$password,$db_name,$port);
          mysqli_set_charset($db_connect,"utf8");

          if ($db_connect->connect_error) {
              echo 'Fail: ' . $db_connect->connect_error;
          } else {
              /*echo 'The connection was completed successfully.' . '<br><br>';*/
              $sql = "SELECT * FROM dishes WHERE specials='1'";
              $result = $db_connect->query($sql);

              if ($result->num_rows > 0){

                  while ($row = $result->fetch_assoc()){ ?>

                  <div class="item"> 
                      <div class="card" style="width: 400px; height: 470px;">

                          <img src="img.model/<?php echo $row["Code"];?>.jpg" class="card-img-top"/>                
                          
                          <div class="card-body">
                          <h5 class="card-title"><?php echo $row["Name"]; ?></h5>
                          <p class="card-text"><?php echo $row["Description"]; ?></p>
                          <h5 class="card-text">$ <?php echo $row["Price"]; ?></h5>
                          <p class="card-text"><b>Calories: </b><?php echo $row["Calories"]; ?></p>
                                                       
                          
                          </div>
                      </div><!-- end do card -->  
                  </div><!-- end of item --> 
                  
                  
                  <?php
                      

                  }
              } else {
                  'No Specials';
              }
              
                }
                  ?>   
              
              
        </div><!-- end div owl-carousel -->

      
    </div><!-- fim div col-md-8.2 -->
  
  
    <div class="col-md-4 d-flex">
      <div class="align-self-center">
        <h2 >Are you hungry?</h2>
        
        <a href="menu1.php" class="btn btn-primary btn-block">Check our Menu!</a>
        
      </div><!-- fim div align -->

     </div><!-- fim div col-md-4 -->

    </div><!-- fim div row -->
    

</section><!--fim secao menu-->
                     
      
       
          


          
       
        
      <?php 
      
       include('footer.php') 
       
       ?>
       
    </body>

    <?php $conn->close() ?>

</html>
