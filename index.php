<?php

include "inc/header.php";

?>
<section>
<div class="container">

  <div class="row">
    <div class="col-md-12">

        <h2> All User Data </h2>

 
          <table class="table table-striped table-hover table-dark table-bordered" id="userData">
  <thead>
      <tr>
      <th scope="col">#SL.</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ACTION</th>

      </tr>
  </thead>
  <tbody>

     <?php

          //read query
              $query="SELECT * from users";

              //pass the sql comand to the database


            $allUsers=mysqli_query($connection,$query);
            //variable for the serial

            $i=1;


            //Recive data from users table using loop


                while($row=mysqli_fetch_assoc($allUsers)){
                  
                  $id=$row['id'];
                  $name=$row['name'];
                  $email=$row['email'];
                  $phone=$row['phone'];

                  ?>

    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $name; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo  $phone; ?></td>

      <td> <div class="btn-group">
            <a href="updateUser.php?id=<?php echo $id ;?>" class="btn btn-success btn-sm">Update </a>  
            <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteUser">Delete</a>  

        </div>
        </td>


              <!-- delete popup modal-->
              <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-danger" id="exampleModalLabel">Do you want to delete this user?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p> If you delete this user it will confirmly vanished from your list.you cannt get it back...  </p>
                    </div>
                    <div class="modal-footer">
                    <a  href="index.php?id=<?php echo $id ?>" class="btn btn-danger">Confirm</a>

                      <a  type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
                      
    </tr>


      <?php
      $i++;
       
    }
?>

  </tbody>
</table>


<!--Table End-->


<!--sql delete User -->

<?php
 if(isset($_GET['id'])){
   $userId=$_GET['id'];
   $query="DELETE FROM users WHERE id ='$userId'";

   $deleteUser=mysqli_query($connection,$query);

   if($deleteUser){ 
     header("Location:index.php");

   }
   else{
      die("Operation failed.".mysqli_error($connection));
   }

  }

?>



<a href="addUser.php" class="btn btn-primary">   Add User </a>

</div>
  </div>

</div>
</section>

<?php

include "inc/footer.php";

?>