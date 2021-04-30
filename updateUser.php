<?php 

  include "inc/header.php";

?>

<section>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
         <h1> Update Information </h1>
         
         <?php
           if(isset($_GET['id'])){
               $userId="$_GET[id]";

               $query="SELECT * FROM users WHERE id='$userId'";

               $data=mysqli_query($connection,$query);


               while($row=mysqli_fetch_assoc($data)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];

                ?>

                            <form action="" method="POST">
                        <div class="mb-3">
                            <label for="names"class="form-label"> Your Name </label>
                            <input type="text"class="form-control" id="names"placeholder="Enter name" name="name" value="<?php echo $name?>"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"> Your Email </label>
                            <input type="email"class="form-control"placeholder="Enter gmail"  name="email"  value="<?php echo $email?>"/>
                        </div>
                        

                        <div class="mb-3">
                            <label class="form-label"> Your Phone</label>
                            <input type="pass"class="form-control"placeholder="Enter phone no"  name="phone"  value="<?php echo $phone?>"/>
                        </div>
                        
                      
                        <button type="submit" name="save"class="btn btn-primary" value="save changes">Submit</button>

                    </form>


                <?php
               }
           }

            ?>




                <!--update user data -->
                <?php
                       if(isset($_POST['save'])){
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];


                        $query="UPDATE users SET name='$name',email='$email',phone='$phone' WHERE id='$userId'";
                        $updateUser=mysqli_query($connection,$query);


                        if($updateUser){
                            header("Location:index.php");
                        }
                        else{
                            die("Operation Failed." .mysqli_error($connection));
                        }
                    }


          
                     ?>


        </div>
        </div>
        </div>
        </section>



        <?php 

include "inc/footer.php";

?>