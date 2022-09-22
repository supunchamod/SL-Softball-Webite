<?php include('include/navbar.php'); 
?>
<!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Ranking</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Bowler Ranking</p>
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
                        <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href='team.php';" style="height: 47px; margin-top: -2px;">Team Rnking</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href='batting.php';" style="height: 47px; margin-top: -2px;">Batiing Rnking</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href='bowler.php';" style="height: 47px; margin-top: -2px;">Bowler Rnking</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
   
     <div class="container-fluid py-5">
        <div class="container  pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Ranking</h6>
                <h1>Bowler Ranking</h1>
            </div>
            <div class="row">

              <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">Ranking</th>
                       <th scope="col">Name</th>
                       <th scope="col">Last</th>
                       <th scope="col">Point</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                        <th scope="row">1</th>
                         <td>Mark</td>
                         <td>Otto</td>
                         <td>@mdo</td>
                        </tr>
                           
                    </tbody>
                    </table>
                
            </div>
        </div>
    </div>
    

    
 <?php
      include('include/footer.php');
     
?>