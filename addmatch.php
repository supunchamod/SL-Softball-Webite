<?php include('include/navbar.php'); 
?>

<?php
 include('config.php');
         if(isset($_POST['submit'])){
           $name=$_POST['name'];
           $date=$_POST['date'];
           $qnt=$_POST['qnt'];
           $champ=$_POST['champ'];
           $runner=$_POST['runner'];
            if($_FILES["image"]["error"] == 4){
                echo
                "<script> alert('Image Does Not Exist'); </script>"
                ;
              }
              else{
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName = $_FILES["image"]["tmp_name"];
            
                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if ( !in_array($imageExtension, $validImageExtension) ){
                  echo
                  "
                  <script>
                    alert('Invalid Image Extension');
                  </script>
                  ";
                }
                else if($fileSize > 1000000){
                  echo
                  "
                  <script>
                    alert('Image Size Is Too Large');
                  </script>
                  ";
                }
                else{
                  $newImageName = uniqid();
                  $newImageName .= '.' . $imageExtension;
            
                  move_uploaded_file($tmpName, 'img/' . $newImageName);
                  
                  $sql="INSERT INTO tournament(name,date,qnt,champ,runner,image)VALUES( '$name' , '$date', '$qnt' , '$champ' , '$runner' , '$newImageName')";
                  mysqli_query($con, $sql);
                  echo
                  "
                  <script>
                    alert('Successfully Added');
                  </script>
                  ";
                }
              }    
        }

?>

   
                
<center>
     <div class="col-lg-5 pt-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Add Tournament</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control p-4" placeholder="Tournament Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="date" id="date" class="form-control p-4" placeholder="Date" required="required" />
                                </div>
                                 <div class="form-group">
                                    <input type="text" name="qnt" id="qnt" class="form-control p-4" placeholder="Team Quantity" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="champ" id="champ" class="form-control p-4" placeholder="Champ Price" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="runner" id="runner" class="form-control p-4" placeholder="RunnersUp Price" required="required" />
                                </div>
                                <div class="form-group">
                                     <input type="file" name="image" id="image" placeholder="Tournament Name" class="form-control" required>
                               </div>

                                
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="submit">Add Tournament</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

</center>
               
            
            

    <?php
include('include/footer.php');
?>