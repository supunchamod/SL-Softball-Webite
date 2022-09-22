<?php include('include/navbar.php'); 
?>

 <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Tournament Detals</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Tournament Detals</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Time Table</h6>
                <h1>Tournament Date And Details</h1>
            </div>
                <div class="text-center"> <a href="addmatch.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Add Your Details</a></div>
            

            

            <div class="row pt-5">
                <?php
            include('config.php');

            $sql= "SELECT * From tournament";
            $result = mysqli_query($con,$sql);
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {

              ?>      

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img src="img/<?php echo $row['image']; ?>" width="350" height="500" alt=""><br>

                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Kegalla</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $row['date']; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>8 Side</small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $row['name']; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    
                                    <h5 class="m-0">Champion <?php echo $row['champ']; ?></h5>
                                    <h5 class="m-0">Runner Up <?php echo $row['runner']; ?></h5>
                                </div> 
                            </div>
                        </div>
                    </div>       
        <?php
              }
            }
         ?>


                </div>                 
            </div>
        </div>
    </div>
   

 <?php
      include('include/footer.php');
     
?>