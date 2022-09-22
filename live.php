<?php include('include/navbar.php'); 
?>


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Facebook Live</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Facebook Live Conatct Details</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                   <div class="col-md-4">
                        <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href='umpire.php';" style="height: 47px; margin-top: -2px;">Umpire</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href='announser.php';" style="height: 47px; margin-top: -2px;">Announser</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href='live.php';" style="height: 47px; margin-top: -2px;">Facebook Live</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Facebook Live</h6>
                <h1>Facebook Live</h1>
            </div>
            <div class="text-center"> <a href="addlive.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Add Your Details</a></div>
            <div class="row  pt-5">
                    <?php
            include('config.php');

            $sql= "SELECT * From live";
            $result = mysqli_query($con,$sql);
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {

              ?> 
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">                
                <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img src="img/<?php echo $row['image']; ?>" width="250" height="250" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?php echo $row['name']; ?></h5>
                            <p class="m-0"><?php echo $row['contact']; ?></p>
                        </div>
                </div>
                               
                </div><?php
                    }
                }
            ?>
                 
            </div>
        </div>
    </div>
    <!-- Team End -->
   
 <?php
      include('include/footer.php');
     
?>