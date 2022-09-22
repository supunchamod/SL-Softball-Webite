<?php include('include/navbar.php'); 
 include('config.php');
         if(isset($_POST['submit'])){
           $name=$_POST['name'];
           $contact=$_POST['contact'];
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
                  
                  $sql="INSERT INTO um(name,contact,image)VALUES( '$name' , '$contact','$newImageName')";
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
                            <h1 class="text-white m-0">Add Umpire</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form  method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control p-4" placeholder="Add Umpire Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact" id="contact" class="form-control p-4" placeholder="Add Contact Number" required="required" />
                                </div>
                                
                                <div class="form-group">
                                     <input type="file" name="image" id="image" placeholder="Tournament Name" class="form-control" required>
                               </div>

                                
                                <div>
                                    <button class="btn btn-primary btn-block py-3" name="submit" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

</center>
               
            
            
<?php
include('include/footer.php');
?>