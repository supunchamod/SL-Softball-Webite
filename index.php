<?php include('include/header.php'); 
?>
    
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Ranking</h6>
                <h1>Softball Ranking Sri Lanka</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Team Ranking</h5>
                        <p class="m-0">Top 20 Teams Sri Lanka Softball Cricket.</p>
                         <a href="team.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Batting Ranking</h5>
                        <p class="m-0">Top 20 Batsman Sri Lanka Softball Cricket.</p>
                        <a href="batting.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Bowling Ranking</h5>
                        <p class="m-0">Top 20 Bowler Sri Lanka Softball Cricket.</p>
                        <a href="bowler.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Time Table</h6>
                <h1>Tournament Date And Details</h1>
            </div>
            <div class="row">
                 <?php
            include('config.php');

            $sql= "SELECT * From tournament";
            $result = mysqli_query($con,$sql);
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {

              ?>  
                <div class="col-lg-4 col-md-6 mb-4">               
                         <div class="package-item bg-white mb-2">
                        <img src="img/<?php echo $row['image']; ?>" width="350" height="300" alt=""><br>

                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $row['date']; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>8 Side</small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $row['name']; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    
                                    <h5 class="m-0"><?php echo $row['champ']; ?></h5>
                                    <h5 class="m-0"><?php echo $row['runner']; ?></h5>
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
    </div>
    <div class="text-center"> <a href="matchDetails.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a></div>  

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Details</h6>
                <h1>Umpires</h1>
            </div>
            <div class="row">
                <?php
                    include('config.php');
                    $sql = "SELECT * FROM um";
                    $result = mysqli_query($con,$sql);
                    if ($result) {
                        while($row=mysqli_fetch_assoc($result)){

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
                </div>
                <?php
                    }
                }
            ?>
            </div>
        </div>
    </div>
    <div class="text-center"> <a href="umpire.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a></div>
    <br><br>
    <hr>
     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Details</h6>
                <h1>Announser</h1>
            </div>
            <div class="row">
                 <?php
                    include('config.php');
                    $sql = "SELECT * FROM anno";
                    $result = mysqli_query($con,$sql);
                    if ($result) {
                        while($row=mysqli_fetch_assoc($result)){

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
                </div>   
 <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="text-center"> <a href="announser.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a></div>
    <br><br>
    <hr>


    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Details</h6>
                <h1>Facebook Live</h1>
            </div>
            <div class="row">
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
    <div class="text-center"> <a href="live.php" class="btn btn-primary py-md-3 px-md-5 mt-2">View More</a></div>
    <br><br>
    <hr>


    

 <?php
      include('include/footer.php');
     
?>